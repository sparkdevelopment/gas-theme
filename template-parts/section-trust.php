<?php
/**
 * Registers the trust section.
 *
 * @since 1.0.0
 * @return void
 * @package Gas
 */

?>
<section id="section-trust" class="h-screen overflow-hidden bg-black flex flex-col text-white text-center font-theme-heading justify-center">
	<div class="sm:w-[75vw] md:w-[80vw] lg:w-[55vw] xl:w-[57.5vw] mx-auto font-light">
		<h2 class="fade-in text-3xl sm:text-3xl md:text-3xl lg:text-3xl 2xl:text-5xl sm:p-3 md:p-4 p-2 w-[75%] sm:w-[75%] mx-auto">
			<?php echo esc_html( get_option( 'homepage_title' ) ); ?>
		</h2>
		<?php
			$homepage_text = get_option( 'homepage_text' );
			// break content into paragraphs if it isn't already.
			$homepage_text = wpautop( $homepage_text );
			// replace new line characters with break tags for consistent rendering.
			$homepage_text = nl2br( $homepage_text );
			// add CSS class to each paragraph.
			$homepage_text = str_replace( '<p>', '<p class="fade-in text-[4vmin] sm:text-xl md:text-xl lg:text-xl 2xl:text-2xl p-2">', $homepage_text );
			// remove all <br /> tags.
			$homepage_text = str_replace( '<br />', '', $homepage_text ); // Remove all <br> tags
			// output content.
			echo $homepage_text;
		?>
	</div>
</section>
