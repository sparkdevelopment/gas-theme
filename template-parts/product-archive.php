<?php
// Get category image from term meta
$category_header_image = get_term_meta( get_queried_object()->term_id, 'product_category_image', true );
$category_title        = get_queried_object()->name;
?>
<div class="bg-black text-white flex flex-col justify-between">
	<div class="flex items-center bg-cover bg-center lg:h-[85vh] h-[50vh] gas-mask [-webkit-mask-size:175%] sm:[-webkit-mask-size:125%] md:[-webkit-mask-size:150%] lg:[-webkit-mask-size:175%] [-webkit-mask-position:65%_100%]" style="background-image: url('<?php echo $category_header_image; ?>');">
		<h1 class="mx-auto text-2xl lg:text-7xl font-light"><?php echo $category_title; ?></h1>
	</div>
	<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="Arrow pointing down" class="h-[7vh] mx-auto mt-[2vh] mb-[1vh] bouncing-item ![animation-delay:3.5s]">
	<?php
	// Output product subcategories in 2 columns
	$product_subcategories = get_terms(
		array(
			'taxonomy'   => 'product_category',
			'parent'     => get_queried_object()->term_id,
			'hide_empty' => false,
		)
	);

	if ( $product_subcategories ) {
		echo '<div class="flex flex-col lg:flex-row justify-center lg:space-x-10 lg:space-y-0 space-y-10 px-10 lg:px-0 w-1/2 mx-auto">';
		foreach ( $product_subcategories as $product_subcategory ) {
			echo '<div class="flex flex-col items-center w-1/2">';
			echo '<a href="' . get_term_link( $product_subcategory ) . '">';
			echo '<img src="' . get_term_meta( $product_subcategory->term_id, 'product_category_image', true ) . '" alt="' . $product_subcategory->name . '" class="gas-mask mask-center">';
			echo '</a>';
			echo '<h2 class="text-2xl lg:text-4xl font-light -mt-5">' . $product_subcategory->name . '</h2>';
			echo '</div>';
		}
		echo '</div>';
	} else {
        // Output products in 3 columns
        $products = new WP_Query(
            array(
                'post_type'      => 'product',
                'posts_per_page' => -1,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'product_category',
                        'field'    => 'term_id',
                        'terms'    => get_queried_object()->term_id,
                    ),
                ),
            )
        );

        if ( $products->have_posts() ) {
            echo '<div class="flex flex-col lg:flex-row justify-center lg:space-x-10 lg:space-y-0 space-y-10 px-10 lg:px-0 w-3/4 mx-auto">';
            while ( $products->have_posts() ) {
                $products->the_post();
                echo '<div class="flex flex-col items-center w-1/3">';
                echo '<a href="' . get_the_permalink() . '">';
                echo '<img src="' . get_the_post_thumbnail_url() . '" alt="' . get_the_title() . '" class="gas-mask mask-center">';
                echo '</a>';
                echo '<h2 class="text-2xl lg:text-4xl font-light -mt-5">' . get_the_title() . '</h2>';
                echo '</div>';
            }
            echo '</div>';
        }
    }
	?>
	<div class="text-lg text-center mt-24">
		<a href="#">
			<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="Arrow pointing left" class="w-[0.9vw] rotate-90 mr-[0.5vw] inline-block"> Back
		</a>
	</div>
	<div class="text-sm font-bold text-center mt-16">
		<p>Prices exclude VAT and insurance. Prices are subject to change, please contact a team member at GAS for further information</p>
	</div>
</div>
