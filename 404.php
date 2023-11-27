<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package TailPress
 * @since TailPress 1.0.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body class="antialiased">
	<div class="md:flex min-h-screen">
		<div class="w-full md:w-1/2 flex items-center justify-center">
			<div class="max-w-sm m-8">
				<div class="text-5xl md:text-15xl text-gray-800 border-primary border-b">404</div>
				<div class="w-16 h-1 bg-purple-light my-3 md:my-6"></div>
				<p class="text-gray-800 text-2xl md:text-3xl font-light mb-8"><?php esc_html_e( 'Sorry, the page you are looking for could not be found.', 'tailpress' ); ?></p>
				<a href="<?php echo esc_attr( get_bloginfo( 'url' ) ); ?>" class="bg-primary px-4 py-2 rounded text-white">
					<?php esc_html_e( 'Go Home', 'tailpress' ); ?>
				</a>
			</div>
		</div>
	</div>
</body>
</html>
