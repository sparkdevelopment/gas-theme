<?php
/**
 * Registers widgets for the GAS theme.
 *
 * @since 1.0.0
 * @package Gas
 */

/**
 * Registers widgets for the GAS theme.
 *
 * @since 1.0.0
 * @return void
 */
function gas_footer_newsletter_widget_area() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Newsletter', 'gas-production-hire' ),
			'id'            => 'footer-newsletter',
			'description'   => __( 'Add a newsletter form to the footer.', 'gas-production-hire' ),
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="text-white text-xl font-light leading-6">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'gas_footer_newsletter_widget_area' );
