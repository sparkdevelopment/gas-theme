<?php

// Create product post type
function create_product_post_type() {
	register_post_type(
		'product',
		array(
			'labels'      => array(
				'name'          => __( 'Products' ),
				'singular_name' => __( 'Product' ),
			),
			'public'      => true,
			'has_archive' => true,
			'rewrite'     => array( 'slug' => 'product' ),
			'menu_icon'   => 'dashicons-cart',
			'supports'    => array( 'title', 'thumbnail' ),
		)
	);
}
add_action( 'init', 'create_product_post_type' );

// Add custom fields to product post type
function add_product_fields() {
	add_meta_box(
		'product_fields',
		'Product Fields',
		'product_fields_callback',
		'product',
		'normal',
		'high'
	);
	add_meta_box(
        'product_images',
        'Product Images',
        'product_images_callback',
        'product',
        'normal',
        'high'
    );	
}
add_action( 'add_meta_boxes', 'add_product_fields' );

// Add custom fields to product post type
function product_fields_callback( $post ) {
	// Add nonce for security and authentication.
	wp_nonce_field( 'product_fields_nonce_action', 'product_fields_nonce' );

	// Retrieve an existing value from the database.
	$product_price       = get_post_meta( $post->ID, 'product_price', true );
	$product_description = get_post_meta( $post->ID, 'product_description', true );

	// Set default values.
	if ( empty( $product_price ) ) {
		$product_price = '';
	}
	if ( empty( $product_description ) ) {
		$product_description = '';
	}

	// Form fields.
	echo '<style>.product_description_field { width: 100%; }</style>';
	echo '<table class="form-table">';
	echo '	<tr>';
	echo '		<th><label for="product_price" class="product_price_label">Price</label></th>';
	echo '		<td>';
	echo '			<input type="text" id="product_price" name="product_price" class="product_price_field" placeholder="Enter price" value="' . esc_attr( $product_price ) . '">';
	echo '		</td>';
	echo '	</tr>';
	echo '	<tr>';
	echo '		<th><label for="product_description" class="product_description_label">Description</label></th>';
	echo '		<td>';
	// Use WYSIWYG editor to allow formatting.
	wp_editor( $product_description, 'product_description', array( 'textarea_name' => 'product_description' ) );
	echo '		</td>';
	echo '	</tr>';
	echo '</table>';
}

// Save custom fields to product post type
function save_product_fields( $post_id, $post ) {
	// Add nonce for security and authentication.
	$nonce_name   = isset( $_POST['product_fields_nonce'] ) ? $_POST['product_fields_nonce'] : '';
	$nonce_action = 'product_fields_nonce_action';

	// Check if a nonce is set.
	if ( ! isset( $nonce_name ) ) {
		return;
	}

	// Check if a nonce is valid.
	if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) ) {
		return;
	}

	// Check if the user has permissions to save data.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	// Check if it's not an autosave.
	if ( wp_is_post_autosave( $post_id ) ) {
		return;
	}

	// Check if it's not a revision.
	if ( wp_is_post_revision( $post_id ) ) {
		return;
	}

	// Sanitize user input.
	$product_price_new       = isset( $_POST['product_price'] ) ? sanitize_text_field( $_POST['product_price'] ) : '';
	$product_description_new = isset( $_POST['product_description'] ) ? wp_kses_post( $_POST['product_description'] ) : '';
	$product_images_new      = isset( $_POST['product_images'] ) ? array_map( 'absint', $_POST['product_images'] ) : array();

	// Update the meta field in the database.
	update_post_meta( $post_id, 'product_price', $product_price_new );
	update_post_meta( $post_id, 'product_description', $product_description_new );
	update_post_meta( $post_id, 'product_images', $product_images_new );
}
add_action( 'save_post', 'save_product_fields', 10, 2 );

function product_images_callback($post) {
    wp_nonce_field( basename(__FILE__), 'product_images_nonce' );
    $images = get_post_meta($post->ID, 'product_images', true);
    ?>
    <div class="product-images-container">
        <div class="product-images-list">
            <?php if (!empty($images)) :
                foreach ($images as $image_id) : ?>
                    <div class="product-image-item">
                        <?php echo wp_get_attachment_image($image_id, 'thumbnail'); ?>
                        <input type="hidden" name="product_images[]" value="<?php echo esc_attr($image_id); ?>">
                        <a href="#" class="remove-product-image">Remove</a>
                    </div>
                <?php endforeach;
            endif; ?>
        </div>
        <p>
            <button class="button button-primary upload-product-images">Upload Images</button>
        </p>
    </div>
    <?php
}

// Create product category taxonomy
function create_product_category_taxonomy() {
	$labels = array(
		'name'              => _x( 'Product Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Product Categories' ),
		'all_items'         => __( 'All Product Categories' ),
		'parent_item'       => __( 'Parent Product Category' ),
		'parent_item_colon' => __( 'Parent Product Category:' ),
		'edit_item'         => __( 'Edit Product Category' ),
		'update_item'       => __( 'Update Product Category' ),
		'add_new_item'      => __( 'Add New Product Category' ),
		'new_item_name'     => __( 'New Product Category Name' ),
		'menu_name'         => __( 'Product Categories' ),
	);
	$args   = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array(
			'slug'         => 'category',
			'hierarchical' => true,
		),
	);
	register_taxonomy( 'product_category', array( 'product' ), $args );
}
add_action( 'init', 'create_product_category_taxonomy' );

// Add custom fields to product category taxonomy
function add_product_category_fields( $taxonomy ) {
	// Get current image
	$term_id = $taxonomy->term_id;
	$image   = get_term_meta( $term_id, 'product_category_image', true );

	echo '<table class="form-table">';
	echo '	<tr class="form-field term-group-wrap">';
	echo '		<th scope="row">';
	echo '			<label for="product_category_image">Image</label>';
	echo '		</th>';
	echo '		<td>';
	echo '			<input type="hidden" id="product_category_image" name="product_category_image" class="custom_media_url" value="">';
	echo '			<div id="product_category_image_wrapper"></div>';
	echo '			<p>';
	echo '				<input type="button" class="js-upload-image button button-secondary custom_media_button" id="custom_media_button" name="custom_media_button" value="Add Image" />';
	echo '				<input type="button" class="js-remove-image button button-secondary custom_media_remove" id="custom_media_remove" name="custom_media_remove" value="Remove Image" />';
	echo '			</p>';
	echo '          <img src="' . $image . '" class="js-image-preview" style="margin:10px 0;padding:0;max-height:100px;float:none;" />';
	echo '		</td>';
	echo '	</tr>';
	echo '</table>';
}
// add_action( 'product_category_add_form', 'add_product_category_fields', 10, 2 );
add_action( 'product_category_edit_form', 'add_product_category_fields', 10, 2 );

// Save custom fields to product category taxonomy
function save_product_category_fields( $term_id ) {
	if ( isset( $_POST['product_category_image'] ) ) {
		$image          = $_POST['product_category_image'];
		$existing_image = get_term_meta( $term_id, 'product_category_image', true );
		if ( empty( $image ) ) {
			// If the image has been removed, delete the metadata from the database
			delete_term_meta( $term_id, 'product_category_image' );
		} elseif ( $image !== $existing_image ) {
				update_term_meta( $term_id, 'product_category_image', $image );
		}
	}
}
add_action( 'created_product_category', 'save_product_category_fields', 10, 2 );
add_action( 'edited_product_category', 'save_product_category_fields', 10, 2 );
