</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<?php $full_height = $args['full-height'] ?? true; ?>

<footer id="colophon" class="site-footer bg-black <?php echo $full_height ? 'h-[50vh] ' : ''; ?>flex flex-col hidden" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
</footer>

</div>

<div class="fixed bottom-0 left-0 w-full bg-[#202020] text-white p-6 flex justify-between items-center transition-all duration-500 transform font-sans text-2xl" id="cookie-bar">
  <p class="inline-block mr-4 font-light">This website uses cookies. By continuing to browse the site, you are agreeing to our <a href="https://www.whatarecookies.com/" class="underline">use of cookies</a></p>
  <button class="text-gray-200 py-2 px-4 font-bold" id="accept-btn">Accept</button>
</div>


<?php wp_footer(); ?>

</body>

</html>