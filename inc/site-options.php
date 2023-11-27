<?php
/**
 * Registers settings fields for the gas theme.
 *
 * @since 1.0.0
 * @package Gas
 */

require_once 'callback-functions.php';
require_once 'settings-fields.php';
require_once 'field-rendering-functions.php';

add_action( 'admin_menu', 'gas_options_page' );
add_action( 'admin_init', 'gas_register_settings_fields' );

/**
 * Registers the site options page.
 *
 * @since 1.0.0
 *
 * @return void
 */
function gas_options_page() {
	add_menu_page( 'GAS Options', 'GAS', 'manage_options', 'gas_options', 'gas_options_page_callback', 'dashicons-admin-site', 4 );
}
