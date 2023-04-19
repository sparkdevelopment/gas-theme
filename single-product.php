<?php
// Template for single product page

get_header();

get_template_part( 'template-parts/product', 'single' );
get_template_part( 'template-parts/section', 'footer' );

get_footer( null, array( 'full-height' => false ) );
