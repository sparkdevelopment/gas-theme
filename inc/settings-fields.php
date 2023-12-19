<?php
/**
 * Registers settings fields for the gas theme.
 *
 * @since 1.0.0
 * @package Gas
 */

global $gas_registered_sections;
$gas_registered_sections = array();

/**
 * Registers settings fields for the gas theme.
 *
 * @since 1.0.0
 * @return void
 */
function gas_register_settings_fields() {
	gas_register_section_category_images();
	gas_register_section_homepage_text();
	gas_register_section_studios();
	gas_register_section_hapaca();
	gas_register_info_contact();
	gas_register_footer();
}

/**
 * Registers a section with settings fields.
 *
 * @param string $section_id The ID of the section.
 * @param string $section_label The label of the section.
 * @param array  $fields An array of fields for the section.
 * @return void
 */
function gas_register_section( $section_id, $section_label, $fields ) {
	global $gas_registered_sections;

	// Validate fields array.
	if ( ! is_array( $fields ) ) {
		// Handle error, e.g., log or display an admin notice.
		return;
	}

	foreach ( $fields as $field_id => $field_properties ) {
		$field_type  = $field_properties['type'];
		$field_label = $field_properties['label'];

		// Dynamic function name based on field type.
		$render_callback = "gas_render_{$field_type}_field";
		if ( ! function_exists( $render_callback ) ) {
			continue; // Skip if render function does not exist.
		}

		// Register setting with a dynamic sanitization callback.
		$sanitization_callback = ( 'image' === $field_type || 'pdf' === $field_type ) ? 'absint' : "sanitize_{$field_type}_field";
		$sanitization_callback = 'pdf_or_page' === $field_type ? 'gas_sanitize_pdf_or_page_field' : $sanitization_callback;
		register_setting( 'gas_options', $field_id, $sanitization_callback );

		// Add settings field with dynamic render callback.
		add_settings_field( $field_id, $field_label, $render_callback, "gas_options_$section_id", "gas_section_$section_id", array( 'label_for' => $field_id ) );
	}

	$gas_registered_sections[ $section_id ] = $section_label;

	add_settings_section( "gas_section_$section_id", $section_label, '', "gas_options_$section_id" );
}

/**
 * Registers the category images section.
 *
 * @return void
 */
function gas_register_section_category_images() {
	$fields = array(
		'gas_lighting_image'       => array(
			'label' => 'Lighting Image',
			'type'  => 'image',
		),
		'gas_camera_digital_image' => array(
			'label' => 'Camera & Digital Image',
			'type'  => 'image',
		),
		'gas_production_image'     => array(
			'label' => 'Production Image',
			'type'  => 'image',
		),
	);
	gas_register_section( 'category_images', 'Category Images', $fields );
}

/**
 * Registers the homepage text section.
 *
 * @return void
 */
function gas_register_section_homepage_text() {
	$fields = array(
		'homepage_title' => array(
			'label' => 'About Title',
			'type'  => 'text',
		),
		'homepage_text'  => array(
			'label' => 'About Text',
			'type'  => 'textarea',
		),
	);
	gas_register_section( 'about_section', 'About Section', $fields );
}

/**
 * Registers the studios section.
 *
 * @return void
 */
function gas_register_section_studios() {
	$fields = array(
		'studios_text'  => array(
			'label' => 'Studios Text',
			'type'  => 'textarea',
		),
		'studios_image' => array(
			'label' => 'Studios Image',
			'type'  => 'image',
		),
	);
	gas_register_section( 'studios_section', 'Studios Section', $fields );
}

/**
 * Registers the Hapaca section.
 *
 * @return void
 */
function gas_register_section_hapaca() {
	$fields = array(
		'hapaca_text'  => array(
			'label' => 'Hapaca Text',
			'type'  => 'textarea',
		),
		'hapaca_image' => array(
			'label' => 'Hapaca Image',
			'type'  => 'image',
		),
	);
	gas_register_section( 'hapaca_section', 'Hapaca Section', $fields );
}

/**
 * Registers the PDF Files section.
 *
 * @return void
 */
function gas_register_info_contact() {
	$fields = array(
		'gas_info_contact_text'    => array(
			'label' => 'Info & Contact Text',
			'type'  => 'textarea',
		),
		'gas_info_contact_tel'     => array(
			'label' => 'Telephone Number',
			'type'  => 'text',
		),
		'gas_info_contact_email'   => array(
			'label' => 'Email Address',
			'type'  => 'text',
		),
		'gas_info_contact_map_url' => array(
			'label' => 'Google Map URL',
			'type'  => 'url',
		),
		'gas_price_list_link'      => array(
			'label' => 'Price List',
			'type'  => 'pdf_or_page',
		),
		'gas_account_form_link'    => array(
			'label' => 'Account Form',
			'type'  => 'pdf_or_page',
		),
		'gas_tnc_link'             => array(
			'label' => 'T&C',
			'type'  => 'pdf_or_page',
		),
		'gas_extra_button_1_text'  => array(
			'label' => 'Extra Button 1 Text',
			'type'  => 'text',
		),
		'gas_extra_button_1_link'  => array(
			'label' => 'Extra Button 1 Link',
			'type'  => 'pdf_or_page',
		),
		'gas_extra_button_2_text'  => array(
			'label' => 'Extra Button 2 Text',
			'type'  => 'text',
		),
		'gas_extra_button_2_link'  => array(
			'label' => 'Extra Button 2 Link',
			'type'  => 'pdf_or_page',
		),
	);
	gas_register_section( 'pdf_files', 'Info & Contact', $fields );
}

/**
 * Registers the footer section.
 *
 * @return void
 */
function gas_register_footer() {
	$fields = array(
		'gas_footer_email'   => array(
			'label' => 'Footer Email',
			'type'  => 'text',
		),
		'gas_footer_tel'     => array(
			'label' => 'Footer Telephone',
			'type'  => 'text',
		),
		'gas_footer_address' => array(
			'label' => 'Footer Address',
			'type'  => 'textarea',
		),
	);
	gas_register_section( 'footer', 'Footer', $fields );
}
