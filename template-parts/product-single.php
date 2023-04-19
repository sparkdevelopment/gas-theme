<?php

// Template for the product single page
// Path: template-parts/product-single.php

?>

<article id="product-<?php the_ID(); ?>" <?php post_class( 'bg-black w-full text-white' ); ?>>
	<div class="pt-52 w-full !max-w-full">
		<div class="mx-8">
			<h1 class="text-2xl lg:text-5xl font-light text-left font-theme-heading my-4"><?php the_title(); ?></h1>
			<div><?php display_breadcrumbs(); ?></div>
			<div class="text-2xl lg:text-4xl font-bold text-left my-4">&pound;<?php echo get_post_meta( get_the_ID(), 'product_price', true ); ?></div>
		</div>
		<div class="relative my-16 flex items-center">
			<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-black.svg" alt="Arrow pointing left"  class="absolute left-6 bottom-0 w-[1.5vw] mx-auto mt-[2vh] mb-[1vh] rotate-90 mr-[1.5vw] cursor-pointer">
			<div class="background-image w-full h-[800px] bg-cover bg-center grow" style="background-image: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>');"></div>
			<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-black.svg" alt="Arrow pointing right" class="absolute right-6 bottom-0 w-[1.5vw] mx-auto mt-[2vh] mb-[1vh] -rotate-90 ml-[1.5vw] cursor-pointer">
		</div>
		<div class="text-2xl font-light text-left space-y-5 mx-8 my-4">
			<?php
			// Output description
			echo wpautop( get_post_meta( get_the_ID(), 'product_description', true ) );
			?>
		</div>
		<div class="text-lg font-light text-center mt-20">
			<span class="bg-gray-800 text-white inline-block py-1 px-2">Click <a href="#" class="underline">here</a> to send a booking email</span>
		</div>
		<div class="text-lg text-center">
			<?php
			// Get the product category url
			$terms     = get_the_terms( get_the_ID(), 'product_category' );
			$term      = array_pop( $terms );
			$term_link = get_term_link( $term );
			?>
			<a href="<?php echo esc_attr( $term_link ); ?>">
				<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="Arrow pointing left" class="w-[0.9vw] rotate-90 mr-[0.5vw] inline-block"> Back
			</a>
		</div>
		<div class="text-sm font-bold text-center mt-16">
			<p>Prices exclude VAT and insurance. Prices are subject to change, please contact a team member at GAS for further information</p>
		</div>
	</div>
</article>
<div class="bg-black text-white text-center">
	<h2 class="py-20 text-5xl font-light">Back to the categories</h2>
	<?php get_template_part( 'template-parts/section', 'category', array( 'full-height' => false ) ); ?>
</div>
