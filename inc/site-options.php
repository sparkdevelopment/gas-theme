<?php
add_action( 'admin_menu', 'gas_options_page' );
add_action( 'admin_init', 'gas_settings_fields' );

function gas_options_page() {
	add_menu_page( 'GAS Options', 'GAS', 'manage_options', 'gas_options', 'gas_options_page_callback', 'dashicons-admin-site', 4 );
}

function gas_options_page_callback() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	if ( isset( $_GET['settings-updated'] ) ) {
		add_settings_error( 'gas_options', 'gas_options', __( 'Settings Saved', 'gas' ), 'updated' );
	}
	settings_errors( 'gas_options' );
	?>
	<div class="wrap">
		<h1><?php echo get_admin_page_title(); ?></h1>
		<form method="post" action="options.php" class="validate">
			<?php
				settings_fields( 'gas_options' );
				echo '<table class="form-table">';
				do_settings_sections( 'gas_options' );
				echo '</table>';
				submit_button();
			?>
		</form>
		<style>
			.custom-media-button-upload {
				width: fit-content;
				display: block;
			}
		</style>
	</div>
	<?php
}

function gas_settings_fields() {
    // Image fields
    $fields = array(
        'gas_lighting_image'       => 'Lighting Image',
        'gas_camera_digital_image' => 'Camera & Digital Image',
        'gas_production_image'     => 'Production Image',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'absint' );
        add_settings_field( $field, $label, 'gas_cat_image_field', 'gas_options', 'gas_category_images', array( 'label_for' => $field ) );
    }
    add_settings_section( 'gas_category_images', 'Category Images', '', 'gas_options' );

    // Text fields
    $fields = array(
        'homepage_title' => 'About Title',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'sanitize_text_field' );
        add_settings_field( $field, $label, 'gas_text_field', 'gas_options', 'gas_homepage_text', array( 'label_for' => $field ) );
    }

    // Textarea fields
    $fields = array(
        'homepage_text'  => 'About Text',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'sanitize_textarea_field' );
        add_settings_field( $field, $label, 'gas_textarea_field', 'gas_options', 'gas_homepage_text', array( 'label_for' => $field ) );
    }
    add_settings_section( 'gas_homepage_text', 'About Section', '', 'gas_options' );

    // Textarea fields
    $fields = array(
        'studios_text'  => 'Studios Text',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'sanitize_textarea_field' );
        add_settings_field( $field, $label, 'gas_textarea_field', 'gas_options', 'gas_studios_section', array( 'label_for' => $field ) );
    }
    
    // Image field
    $fields = array(
        'studios_image' => 'Studios Image',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'absint' );
        add_settings_field( $field, $label, 'gas_cat_image_field', 'gas_options', 'gas_studios_section', array( 'label_for' => $field ) );
    }
    add_settings_section( 'gas_studios_section', 'Studios Section', '', 'gas_options' );

    // Textarea fields
    $fields = array(
        'hapaca_text'  => 'Hapaca Text',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'sanitize_textarea_field' );
        add_settings_field( $field, $label, 'gas_textarea_field', 'gas_options', 'gas_hapaca_section', array( 'label_for' => $field ) );
    }

    // Image field
    $fields = array(
        'hapaca_image' => 'Hapaca Image',
    );
    foreach ( $fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'absint' );
        add_settings_field( $field, $label, 'gas_cat_image_field', 'gas_options', 'gas_hapaca_section', array( 'label_for' => $field ) );
    }
    add_settings_section( 'gas_hapaca_section', 'Hapaca Section', '', 'gas_options' );

    // PDF section
    $pdf_fields = array(
        'gas_price_list_pdf' => 'Price List PDF',
        'gas_account_form_pdf' => 'Account Form PDF',
        'gas_tnc_pdf' => 'T&Cs PDF',
    );
    foreach ( $pdf_fields as $field => $label ) {
        register_setting( 'gas_options', $field, 'absint' );
        add_settings_field( $field, $label, 'gas_cat_pdf_field', 'gas_options', 'gas_pdf_files', array( 'label_for' => $field ) );
    }
    add_settings_section( 'gas_pdf_files', 'PDF Files', '', 'gas_options' );
}

function gas_cat_image_field( $args ) {
	$image_id = get_option( $args['label_for'] ) ?? 0;
	if ( $image = wp_get_attachment_image_url( $image_id, 'medium' ) ) :
		?>
		<a href="#" class="custom-media-button-upload">
			<img src="<?php echo esc_url( $image ); ?>" />
		</a>
		<a href="#" class="custom-media-button-remove button">Remove image</a>
	<?php else : ?>
		<a href="#" class="button custom-media-button-upload">Upload image</a>
		<a href="#" class="custom-media-button-remove" style="display:none">Remove image</a>
	<?php endif; ?>
	<input type="hidden" class="hidden-media-id" name="<?php echo $args['label_for']; ?>" value="<?php echo absint( $image_id ); ?>">
	<?php
}

function gas_cat_pdf_field( $args ) {
    $pdf_id = get_option( $args['label_for'] ) ?? 0;
    $pdf_url = wp_get_attachment_url($pdf_id);
    $pdf_title = get_the_title($pdf_id);
    ?>
    <div class="pdf-upload">
        <?php if ($pdf_url) : ?>
            <a href="<?php echo esc_url($pdf_url); ?>" target="_blank" class="button">View PDF: <?php echo esc_html($pdf_title); ?></a>
            <a href="#" class="custom-media-button-remove button">Remove PDF</a>
        <?php else : ?>
            <a href="#" class="button custom-media-button-upload">Upload PDF</a>
            <a href="#" class="custom-media-button-remove button" style="display:none">Remove PDF</a>
        <?php endif; ?>
        <input type="hidden" class="hidden-media-id" name="<?php echo $args['label_for']; ?>" value="<?php echo absint( $pdf_id ); ?>">
    </div>
    <?php
}

function gas_textarea_field( $args ) {
	$text = get_option( $args['label_for'] ) ?? '';
	?>
	<textarea name="<?php echo $args['label_for']; ?>" rows="15" cols="80" class="widefat"><?php echo esc_textarea( $text ); ?></textarea>
	<?php
}

function gas_text_field( $args ) {
	$text = get_option( $args['label_for'] ) ?? '';
	?>
	<input type="text" name="<?php echo $args['label_for']; ?>" value="<?php echo esc_attr( $text ); ?>" class="widefat">
	<?php
}

