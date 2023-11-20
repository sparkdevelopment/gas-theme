<?php
/**
 * Registers the site options page.
 *
 * This function registers the site options page for the gas theme, using the WordPress functions add_menu_page() and add_submenu_page().
 *
 * @since 1.0.0
 *
 * @return void
 */

require_once 'callback-functions.php';
require_once 'settings-fields.php';
require_once 'field-rendering-functions.php';

add_action( 'admin_menu', 'gas_options_page' );
add_action( 'admin_init', 'gas_register_settings_fields' );

function gas_options_page() {
	add_menu_page( 'GAS Options', 'GAS', 'manage_options', 'gas_options', 'gas_options_page_callback', 'dashicons-admin-site', 4 );
}
