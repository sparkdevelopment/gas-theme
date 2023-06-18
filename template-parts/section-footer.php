<div class="bg-black h-full md:h-1/3 flex flex-col justify-end">
	<div class="sm:grid sm:grid-cols-12 flex flex-col-reverse justify-between gap-4 text-white text-base sm:text-md sm:mx-8 mx-4 font-light leading-6">
		<div class="col-span-12 md:col-span-2">
			<?php if ( has_custom_logo() ) : ?>
			<div class="w-full">
				<div class="pt-1 sm:pb-4 w-full">
					<div class="flex justify-between items-center">
						<div class="js-footer-logo sm:ml-1 xl:ml-4 sm:w-auto">
							<div><?php the_custom_logo(); ?></div>
						</div>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<div class="flex flex-col col-span-5 md:col-span-2">
			<p class="sm:my-4 my-2">
				<a href="mailto:office@gashire.co.uk">office@gashire.co.uk</a><br>
				<a href="tel:+442033972757">+44 (0)20 3397 2757</a>
			</p>
			<address class="sm:mb-6 sm:mt-0 my-2 not-italic">
				GAS Production Hire<br>
				Unit 8 A/B<br>
				The High Cross Centre<br>
				London<br>
				N15 4QN
			</address>
			<p class="sm:my-4 my-2 pt-2 block sm:hidden">&copy; GAS Production Hire Ltd <?php echo date_i18n( 'Y' ); ?></p>
		</div>
		<div class="col-span-6 md:col-span-2">
			<ul class="sm:my-4 my-2">
				<li><a href="/contact-info/">Contact & Info</a></li>
				<li><a href="/careers/">Careers</a></li>
				<li><a href="/privacy-policy/">Privacy Policy</a></li>
				<li><a href="/cookie-policy/">Cookie Policy</a></li>
			</ul>
		</div>
		<div class="md:col-start-9 md:col-end-13 col-span-12 md:col-span-4 flex flex-col justify-end">
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
