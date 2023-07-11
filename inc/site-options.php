<?php
add_action( 'admin_menu', 'gas_top_lvl_menu' );

function gas_top_lvl_menu() {

	add_menu_page(
		'GAS Options', // page <title>Title</title>
		'GAS', // link text
		'manage_options', // user capabilities
		'gas_options', // page slug
		'gas_options_page_callback', // this function prints the page content
		'dashicons-admin-site', // icon (from Dashicons for example)
		4 // menu position
	);
}

function gas_options_page_callback(){
	?>
		<div class="wrap">
			<h1><?php echo get_admin_page_title() ?></h1>
			<form method="post" action="options.php">
				<?php
					settings_fields( 'gas_options_settings' ); // settings group name
					do_settings_sections( 'gas_options' ); // just a page slug
					submit_button(); // "Save Changes" button
				?>
			</form>
		</div>
	<?php
}

add_action( 'admin_init',  'gas_settings_fields' );
function gas_settings_fields(){

    // 1. register a new settings section
	$page_slug = 'gas_options';
	$option_group = 'gas_options_settings';

	add_settings_section(
		'gas_category_images', // section ID
		'Category Images', // title (optional)
		'', // callback function to display the section (optional)
		$page_slug
	);

	// 2. register fields
	register_setting( $option_group, 'gas_lighting_image', 'esc_attr' );
	register_setting( $option_group, 'gas_camera_digital_image', 'esc_attr' );
	register_setting( $option_group, 'gas_production_image', 'esc_attr' );

	// 3. add fields
	add_settings_field(
		'gas_lighting_image',
		'Lighting Image',
		'gas_cat_image_field', // function to print the field
		$page_slug,
		'gas_category_images' // section ID
	);

	add_settings_field(
		'gas_camera_digital_image',
		'Camera & Digital Image',
		'gas_cat_image_field', // function to print the field
		$page_slug,
		'gas_category_images' // section ID
	);

	add_settings_field(
		'gas_production_image',
		'Production Image',
		'gas_cat_image_field', // function to print the field
		$page_slug,
		'gas_category_images' // section ID
	);

}

// Uses WordPress media uploader
function gas_cat_image_field( $image_id ) {
	var_dump($image_id);
	if( $image = wp_get_attachment_image_url( $image_id, 'medium' ) ) : ?>
		<a href="#" class="custom-media-button-upload">
			<img src="<?php echo esc_url( $image ) ?>" />
		</a>
		<a href="#" class="custom-media-button-remove">Remove image</a>
		<input type="hidden" name="gas_lighting_image" value="<?php echo absint( $image_id ) ?>">
	<?php else : ?>
		<a href="#" class="button custom-media-button-upload">Upload image</a>
		<a href="#" class="custom-media-button-remove" style="display:none">Remove image</a>
		<input type="hidden" name="gas_lighting_image" value="">
	<?php endif;
}

function gas_camera_digital_image_field( $image_id ) {
	$value = get_option( 'gas_camera_digital_image' );
	?>
		<input type="text" name="gas_camera_digital_image" id="gas_camera_digital_image" value="<?php echo esc_attr( $value ); ?>" />
		<input type="button" class="button custom_media_button" id="gas_camera_digital_image_button" value="Choose or Upload an Image" />
	<?php
	return;
}

function gas_production_image_field( $image_id ) {
	$value = get_option( 'gas_production_image' );
	?>
		<input type="text" name="gas_production_image" id="gas_production_image" value="<?php echo esc_attr( $value ); ?>" />
		<input type="button" class="button custom_media_button" id="gas_production_image_button" value="Choose or Upload an Image" />
	<?php
	return;
}