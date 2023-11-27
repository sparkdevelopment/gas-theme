<?php
/**
 * The template for displaying product archives.
 *
 * @package Gas
 */

get_header();

get_template_part( 'template-parts/product', 'archive' );
get_template_part( 'template-parts/section', 'footer' );

get_footer( null, array( 'full-height' => false ) );
