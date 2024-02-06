<?php
/**
 * Callback functions for rendering settings fields.
 *
 * @since 1.0.0
 * @package Gas
 */

/**
 * Renders a category image field in the site options.
 *
 * @param array $args The arguments for rendering the field.
 *                    - label_for (string) The label for the field.
 *
 * @return void
 */
function gas_render_image_field( $args ) {
	$image_id = get_option( $args['label_for'] ) ?? 0;
	$image    = wp_get_attachment_image_url( $image_id, 'medium' );

	if ( $image ) :
		?>
		<a href="#" class="custom-media-button-upload">
			<img src="<?php echo esc_url( $image ); ?>" />
		</a>
		<a href="#" class="custom-media-button-remove button">Remove image</a>
	<?php else : ?>
		<a href="#" class="button custom-media-button-upload">Upload image</a>
		<a href="#" class="custom-media-button-remove" style="display:none">Remove image</a>
	<?php endif; ?>
	<input type="hidden" class="hidden-media-id" name="<?php echo esc_attr( $args['label_for'] ); ?>" value="<?php echo absint( $image_id ); ?>">
	<?php
}

/**
 * Renders a PDF upload field for the site options.
 *
 * This function generates HTML markup for a PDF upload field, including the ability to view and remove the uploaded PDF.
 *
 * @param array $args {
 *     An array of arguments for rendering the PDF upload field.
 *
 *     @type string $label_for The option name for the PDF ID.
 * }
 */
function gas_render_pdf_field( $args ) {
	$pdf_id    = get_option( $args['label_for'] ) ?? 0;
	$pdf_url   = wp_get_attachment_url( $pdf_id );
	$pdf_title = get_the_title( $pdf_id );
	?>
	<div class="pdf-upload">
		<?php if ( $pdf_url ) : ?>
			<a href="<?php echo esc_url( $pdf_url ); ?>" target="_blank" class="custom-media-button-view button">View PDF: <?php echo esc_html( $pdf_title ); ?></a>
			<a href="#" class="custom-media-button-remove button">Remove PDF</a>
		<?php else : ?>
			<a href="#" class="button custom-media-button-upload">Select PDF</a>
			<a href="#" class="custom-media-button-remove button" style="display:none">Remove PDF</a>
		<?php endif; ?>
		<input type="hidden" class="hidden-media-id" name="<?php echo esc_attr( $args['label_for'] ); ?>" value="<?php echo absint( $pdf_id ); ?>">
	</div>
	<?php
}

/**
 * Renders a textarea field for the site options page.
 *
 * @param array $args The arguments for the field.
 *                    - label_for (string) The option name to retrieve the value from.
 *
 * @return void
 */
function gas_render_textarea_field( $args ) {
	$text = get_option( $args['label_for'] ) ?? '';
	?>
	<textarea name="<?php echo esc_attr( $args['label_for'] ); ?>" rows="15" cols="80" class="widefat"><?php echo esc_textarea( $text ); ?></textarea>
	<?php
}

/**
 * Renders a text field for the site options page.
 *
 * @param array $args The arguments for the text field.
 *                    - label_for (string) The option name to retrieve the value from.
 *
 * @return void
 */
function gas_render_text_field( $args ) {
	$text = get_option( $args['label_for'] ) ?? '';

	// If max_length is set, add a maxlength attribute to the input field.
	$max_length     = $args['max_length'] ?? '';
	$maxlength_attr = $max_length ? "maxlength=\"$max_length\"" : '';

	?>
	<input type="text" <?php echo $maxlength_attr; ?> name="<?php echo esc_attr( $args['label_for'] ); ?>" value="<?php echo esc_attr( $text ); ?>" class="widefat">
	<?php
}

function gas_render_number_field( $args ) {
	$number = get_option( $args['label_for'] ) ?? '';
	?>
	<input type="number" name="<?php echo esc_attr( $args['label_for'] ); ?>" value="<?php echo esc_attr( $number ); ?>" class="widefat">
	<?php
}

/**
 * Renders a PDF or Page field with upload button and dropdown.
 *
 * @param array $args The arguments for rendering the field.
 *                    - label_for (string) The label for the field.
 *
 * @return void
 */
function gas_render_pdf_or_page_field( $args ) {
	$field_id    = $args['label_for']; // Unique identifier for each field.
	$field_value = get_option( $field_id ) ?? '';

	$pdf_id    = intval( $field_value['pdf'] ?? 0 );
	$pdf_url   = wp_get_attachment_url( $pdf_id );
	$pdf_title = get_the_title( $pdf_id );

	$page_id = intval( $field_value['page'] ?? 0 );

	$selected_type = $page_id ? 'page' : 'pdf';

	// Start of layout.
	echo '<div class="gas-field-container" style="margin-bottom: 20px;">';

	// Unique name for radio buttons of this field.
	$radio_name = 'radio_' . $field_id;

	// Radio buttons to select between PDF and Page.
	echo '<div style="margin-bottom: 10px;">';
	echo '<label style="margin-right: 10px;"><input type="radio" name="' . esc_attr( $radio_name ) . '[type]" value="pdf"' . checked( $selected_type, 'pdf', false ) . '> PDF</label>';
	echo '<label><input type="radio" name="' . esc_attr( $radio_name ) . '[type]" value="page"' . checked( $selected_type, 'page', false ) . '> Page</label>';
	echo '</div>';

	// PDF Upload Button.
	echo '<div class="gas-pdf-upload-field pdf-upload" style="' . ( 'pdf' !== $selected_type ? 'display:none;' : '' ) . 'margin-bottom: 10px;">';
	if ( $pdf_id ) {
		echo '<a href="' . esc_url( $pdf_url ) . '" target="_blank" class="custom-media-button-view button">View PDF: ' . esc_html( $pdf_title ) . '</a>';
		echo '<a href="#" class="custom-media-button-remove button">Remove PDF</a>';
	} else {
		echo '<a href="#" class="button custom-media-button-upload">Select PDF</a>';
		echo '<a href="#" class="custom-media-button-remove button" style="display:none">Remove PDF</a>';
	}
	echo '<input type="hidden" class="hidden-media-id" name="' . esc_attr( $field_id ) . '[pdf]" value="' . esc_attr( $pdf_id ) . '">';
	echo '</div>';

	// Pages Dropdown.
	echo '<div class="gas-page-select-field"' . ( 'page' !== $selected_type ? ' style="display:none; margin-bottom: 10px;"' : ' style="margin-bottom: 10px;"' ) . '>';
	wp_dropdown_pages(
		array(
			'name'             => esc_attr( $field_id ) . '[page]',
			'selected'         => esc_attr( $field_value['page'] ?? 0 ),
			'show_option_none' => 'Select a page',
		)
	);
	echo '</div>';

	// End of layout.
	echo '</div>';

	// JavaScript for functionality.
	echo '<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".gas-field-container input[type=\'radio\']").change(function() {
                var selectedValue = $(this).val();
                var container = $(this).closest(".gas-field-container");

                if(selectedValue === "pdf") {
                    container.find(".gas-pdf-upload-field").show();
                    container.find(".gas-page-select-field").hide();
                } else {
                    container.find(".gas-pdf-upload-field").hide();
                    container.find(".gas-page-select-field").show();
                }
            });

            // Clear unused values on submit in parent form
            $("form input[type=\'submit\']").click(function(e) {
                var container = $(this).parent().parent().find(".gas-field-container");
                container.find("input[type=\'radio\']").each(function() {
                    if ($(this).is(\':checked\')) {
                        var fieldContainer = $(this).parent().parent().parent();
                        if ($(this).val() === "pdf") {
                            fieldContainer.find(".gas-page-select-field select").val("");
                        } else {
                            fieldContainer.find(".custom-media-button-view").removeClass("custom-media-button-view").addClass("custom-media-button-upload").text("Select PDF");
                            fieldContainer.find(".custom-media-button-remove").hide();
                            fieldContainer.find(".gas-pdf-upload-field input[type=\'hidden\']").val("");
                        }
                    }
                });
            });
        });
    </script>';
}

/**
 * Sanitizes a PDF or Page field.
 *
 * @param array $input The input to sanitize.
 * @return array The sanitized input.
 */
function gas_sanitize_pdf_or_page( $input ) {
	$output = array();
	if ( isset( $input['type'] ) && 'pdf' === $input['type'] && ! empty( $input['pdf'] ) ) {
		// Sanitize URL for the PDF.
		$output['type'] = 'pdf';
		$output['pdf']  = esc_url_raw( $input['pdf'] );
	} elseif ( isset( $input['type'] ) && 'page' === $input['type'] && ! empty( $input['page'] ) ) {
		// Sanitize ID for the page.
		$output['type'] = 'page';
		$output['page'] = absint( $input['page'] );
	}
	return $output;
}

/**
 * Renders a URL field for the site options page.
 *
 * @param array $args The arguments for the URL field.
 *                    - label_for (string) The option name to retrieve the value from.
 *
 * @return void
 */
function gas_render_url_field( $args ) {
	$url = get_option( $args['label_for'] ) ?? '';
	?>
	<input type="url" name="<?php echo esc_attr( $args['label_for'] ); ?>" value="<?php echo esc_url( $url ); ?>" class="widefat">
	<?php
}

/**
 * Sanitizes a URL field.
 *
 * @param string $input The URL to sanitize.
 * @return string The sanitized URL.
 */
function gas_sanitize_url_field( $input ) {
	return esc_url_raw( $input );
}

function gas_render_separator_field( $args ) {
	?>
	<hr>
	<?php
}
