<?php

// Create tabbed settings page using native WordPress code

// Add menu item
function add_site_options_page() {
    add_menu_page(
        'Site Options',
        'Site Options',
        'manage_options',
        'site-options',
        'site_options_page_html',
        'dashicons-admin-generic',
        30
    );
}
add_action( 'admin_menu', 'add_site_options_page' );

// Add settings section
function add_site_options_section() {
    add_settings_section(
        'site_options_section',
        'Site Options',
        'site_options_section_html',
        'site-options'
    );
}
add_action( 'admin_init', 'add_site_options_section' );

// Add settings fields
function add_site_options_fields() {
    add_settings_field(
        'site_options_field',
        'Site Options Field',
        'site_options_field_html',
        'site-options',
        'site_options_section'
    );
}
add_action( 'admin_init', 'add_site_options_fields' );

// Register settings
function register_site_options_settings() {
    register_setting(
        'site_options_section',
        'site_options_field'
    );
}
add_action( 'admin_init', 'register_site_options_settings' );

// Callback functions
function site_options_page_html() {
    // Add tabbed interface
    ?>
    <h2 class="nav-tab-wrapper">
        <a href="?page=site-options" class="nav-tab nav-tab-active">Site Options</a>
        <a href="?page=site-options&tab=tab-2" class="nav-tab">Tab 2</a>
        <a href="?page=site-options&tab=tab-3" class="nav-tab">Tab 3</a>
    </h2>
    <?php
    // Add settings page
    ?>
    <div class="wrap">
        <h1>Site Options</h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'site_options_section' );
            do_settings_sections( 'site-options' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function site_options_section_html() {
    echo '<p>Site options description.</p>';
}

function site_options_field_html() {
    ?>
    <input type="text" name="site_options_field" value="<?php echo esc_attr( get_option( 'site_options_field' ) ); ?>">
    <?php
}