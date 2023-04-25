</main>

<?php do_action('tailpress_content_end'); ?>

</div>

<?php do_action('tailpress_content_after'); ?>

<?php $full_height = $args['full-height'] ?? true; ?>

<footer id="colophon" class="site-footer bg-black <?php echo $full_height ? 'h-[50vh] ' : ''; ?>flex flex-col hidden" role="contentinfo">
	<?php do_action('tailpress_footer'); ?>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>