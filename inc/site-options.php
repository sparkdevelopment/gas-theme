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
		'gas_section_id', // section ID
		'', // title (optional)
		'', // callback function to display the section (optional)
		$page_slug
	);

	// 2. register fields
	register_setting( $option_group, 'slider_on', 'gas_sanitize_checkbox' );
	register_setting( $option_group, 'num_of_slides', 'absint' );

	// 3. add fields
	add_settings_field(
		'slider_on',
		'Display slider',
		'gas_checkbox', // function to print the field
		$page_slug,
		'gas_section_id' // section ID
	);

	add_settings_field(
		'num_of_slides',
		'Number of slides',
		'gas_number',
		$page_slug,
		'gas_section_id',
		array(
			'label_for' => 'num_of_slides',
			'class' => 'hello', // for <tr> element
			'name' => 'num_of_slides' // pass any custom parameters
		)
	);

}

// custom callback function to print field HTML
function gas_number( $args ){
	printf(
		'<input type="number" id="%s" name="%s" value="%d" />',
		$args[ 'name' ],
		$args[ 'name' ],
		get_option( $args[ 'name' ], 2 ) // 2 is the default number of slides
	);
}
// custom callback function to print checkbox field HTML
function gas_checkbox( $args ) {
	$value = get_option( 'slider_on' );
	?>
		<label>
			<input type="checkbox" name="slider_on" <?php checked( $value, 'yes' ) ?> /> Yes
		</label>
	<?php
}

// custom sanitization function for a checkbox field
function gas_sanitize_checkbox( $value ) {
	return 'on' === $value ? 'yes' : 'no';
}