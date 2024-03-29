<?php
// Get category image from term meta
$category_header_image = get_term_meta( get_queried_object()->term_id, 'product_category_image', true );
$category_title        = get_queried_object()->name;

$has_parent = get_queried_object()->parent;

$product_subcategories = get_terms(
	array(
		'taxonomy'   => 'product_category',
		'parent'     => get_queried_object()->term_id,
		'hide_empty' => false,
	)
);
?>
<div class="bg-black text-white flex flex-col justify-between min-h-screen">
	<?php if ( ! $has_parent ) { ?>
	<div class="flex items-center bg-cover bg-bottom lg:h-[85vh] h-[50vh] gas-mask [-webkit-mask-size:175%] sm:[-webkit-mask-size:125%] md:[-webkit-mask-size:150%] lg:[-webkit-mask-size:175%] [-webkit-mask-position:65%_100%]" style="background-image: url('<?php echo $category_header_image; ?>');">
		<h1 class="mx-auto text-2xl lg:text-7xl font-light"><?php echo $category_title; ?></h1>
	</div>
	<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="Arrow pointing down" class="h-[7vh] mx-auto mt-[2vh] mb-[10vh] bouncing-item ![animation-delay:3.5s]">
	<?php } else { ?>
		<div class="mx-8 pt-32 pb-10">
			<h1 class="text-2xl lg:text-5xl font-bold text-left font-theme-heading my-4"><?php echo esc_html( $category_title); ?></h1>
			<div><?php display_breadcrumbs(); ?></div>
		</div>
	<?php } ?>
	<?php if ( $product_subcategories ) { ?>
		<div class="flex flex-row flex-wrap justify-center md:px-0 w-full mx-auto">
		<?php foreach ( $product_subcategories as $product_subcategory ) { ?>
			<a href="<?php echo get_term_link( $product_subcategory ); ?>" class="!mx-0 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center w-full aspect-square sm:w-[50vw] md:w-[25vw] sm:h-[50vw] md:h-[25vw]">
				<div class="card-zoom">
					<div class="card-zoom-image" style="background-image: url('<?php echo get_term_meta( $product_subcategory->term_id, 'product_category_image', true ); ?>')"></div>
					<h1 class="card-zoom-text !text-2xl md:!text-2xl 2xl:!text-4xl"><?php echo $product_subcategory->name; ?></h1>
				</div>
			</a>
		<?php } ?>
		</div>
		<?php
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
			echo '<div class="flex flex-col flex-wrap md:flex-row justify-center md:space-x-10 md:space-y-0 space-y-10 px-10 md:px-0 w-full mx-auto">';
			while ( $products->have_posts() ) {
				$products->the_post();
				?>
				<a href="<?php echo the_permalink(); ?>" class="!mx-0 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center w-full aspect-square md:w-[25vw] md:h-[25vw]">
					<div class="card-zoom">
						<div class="card-zoom-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
						<h1 class="card-zoom-text !text-2xl md:!text-2xl 2xl:!text-4xl"><?php echo get_the_title(); ?></h1>
					</div>
				</a>
				<?php
			}
			echo '</div>';
		}
	}
	?>
	<div class="text-lg text-center mt-24">
		<?php
		// Get parent category link
		if ( get_queried_object()->parent === 0 ) {
			// Get home page link
			$parent_url = get_home_url();
		} else {
			$parent_category = get_term( get_queried_object()->parent, 'product_category' );
			$parent_url      = get_term_link( $parent_category );
		}
		?>
	</div>
</div>
<div class="bg-black text-white text-center py-8">
	<?php get_template_part( 'template-parts/section', 'category', array( 'full-height' => false ) ); ?>
</div>