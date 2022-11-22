</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="site-footer bg-black sm:py-12 py-4" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
	<?php if (has_custom_logo()) { ?>
		<div class="sm:w-auto max-w-[50%] sm:m-0 m-auto">
		<?php the_custom_logo(); ?>
		</div>
	<?php } ?>
	<div class="sm:grid sm:grid-cols-4 flex flex-col-reverse gap-4 text-white sm:text-xl text-md sm:mx-8 mx-4 sm:mt-24 mt-4">
		<div>
			<p class="sm:my-6 my-2">
				GAS Production Hire<br>
				Unit G, Sutherland House<br>
				Sutherland Road<br>
				Walthamstow<br>
				London<br>
				E17 6BU
			</p>
			<p class="sm:my-6 my-2">
				<a href="mailto:office@gashireco.uk">office@gashireco.uk</a><br>
				<a href="tel:+442033972757">+44 (0)20 3397 2757</a>
			</p>
			<p class="sm:my-6 my-2 pt-[2rem] block sm:hidden">&copy; GAS Production Hire Ltd <?php echo date_i18n('Y'); ?></p>
		</div>
		<div>
			<ul class="sm:my-6 my-2">
				<li><a href="#">Cookie Policy</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms and Conditions</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Price List & Account Form</a></li>
			</ul>
			<p class="sm:my-6 my-2 pt-[2rem] hidden sm:block">&copy; GAS Production Hire Ltd <?php echo date_i18n('Y'); ?></p>
		</div>
		<div class="col-span-2 flex flex-col">
			<div class="m-auto w-full">
				<h3 class="sm:text-3xl text-xl font-bold mb-4">Sign up for our newsletter</h3>
				<form class="grid grid-cols-4 w-full">
					<div class="col-span-3">
						<input class="w-full bg-gray-800 text-white sm:text-3xl text-sm sm:p-4 p-2" type="text" placeholder="Enter email address">
					</div>
					<div class="col-span-1">
						<button class="w-full bg-gray-300 text-black sm:text-3xl text-sm sm:p-4 p-2 font-bold">Subscribe</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="text-right text-white sm:mb-6 mr-4 sm:text-xl text-sm mt-4">Designed by <strong>SoreThumbStudio</strong>&reg;</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>