<div class="bg-black h-screen md:h-auto flex flex-col justify-between">
	<div class="sm:grid grid-cols-5 xl:grid-cols-8 2xl:grid-cols-10 flex flex-col md:flex-col-reverse justify-between gap-4 text-white text-sm sm:text-md sm:mx-8 md:mx-0 font-light leading-5">
		<div class="col-span-5 lg:col-span-1 order-1 sm:order-none">
			<?php if ( has_custom_logo() ) : ?>
			<div class="w-full">
				<div class="pt-2 md:pb-4 w-full">
					<div class="flex justify-between items-center">
						<div class="h-24 md:h-auto js-header-logo xl:ml-4 sm:w-auto max-w-[75%] md:max-w-[35%] xl:max-w-[10%]">
							<div class="js-footer-logo w-36 h-full items-center md:flex hidden">
								<div><?php the_custom_logo(); ?></div>
							</div>
							<div class="js-footer-logo w-36 h-full md:hidden flex">
								<img src="<?php echo get_template_directory_uri(); ?>/resources/img/mobile-logo.svg">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="flex flex-col col-span-5 sm:col-span-1 mx-4 order-4 sm:order-none">
			<p class="sm:my-4 my-2 whitespace-nowrap">
				<a href="mailto:office@gashire.co.uk?subject=Enquiry from website">office@gashire.co.uk</a><br>
				<a href="tel:+442033972757">+44 (0)20 3397 2757</a>
			</p>
			<address class="sm:mb-6 sm:mt-0 my-2 not-italic leading-4 whitespace-nowrap">
				GAS Production Hire<br>
				Unit 8 A/B<br>
				The High Cross Centre<br>
				London<br>
				N15 4QN
			</address>
			<p class="sm:my-4 my-2 pt-2 block sm:hidden">&copy; GAS Production Hire Ltd <?php echo date_i18n( 'Y' ); ?></p>
		</div>
		<div class="col-span-5 sm:col-span-1 mx-4 order-3 sm:order-none">
			<ul class="sm:my-4 my-2">
				<li><a href="/info-contact/">Info & Contact</a></li>
				<li><a href="/careers/">Careers</a></li>
				<li><a href="/privacy-policy/">Privacy Policy</a></li>
				<li><a href="/cookie-policy/">Cookie Policy</a></li>
			</ul>
		</div>
		<div class="col-start-3 lg:col-start-4 xl:col-start-6 2xl:col-start-8 col-end-6 lg:col-end7 xl:col-end-9 2xl:col-end-11 2xl:col-span-3 flex flex-col justify-end mx-4 order-2 sm:order-none text-base">
			<?php
			// Add widget area for footer newsletter form
			if ( is_active_sidebar( 'footer-newsletter' ) ) {
				dynamic_sidebar( 'footer-newsletter' );
			}
			?>
			<p class="sm:my-4 my-2 hidden sm:block text-right text-base sm:text-lg">&copy; GAS Production Hire Ltd <?php echo date_i18n( 'Y' ); ?></p>
		</div>
	</div>
</div>
