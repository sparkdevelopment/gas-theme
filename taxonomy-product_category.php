<?php
// Template for product archive page

get_header();

get_template_part( 'template-parts/product', 'archive' );
get_template_part( 'template-parts/section', 'footer' );

get_footer( null, array( 'full-height' => false ) );
