<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('tailpress_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col relative">

		<?php do_action('tailpress_header'); ?>

		<header class="absolute top-0 left-0 z-40 w-full">

			<div class="mx-0 w-full">
				<div class="py-1 xl:py-4 w-full">
					<div class="flex justify-between items-center">
						<div class="ml-1 xl:ml-4 [filter:opacity(0)]">
							<?php if (has_custom_logo()) { ?>
								<div class="sm:w-auto max-w-[75%]">
									<?php the_custom_logo(); ?>
								</div>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo('url'); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo('name'); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo('description'); ?>
								</p>

							<?php } ?>
						</div>

						<div class="mr-6 xl:mr-12 text-white z-10 [filter:drop-shadow(0_0_10px_#000)]">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 18 18" class="inline-block w-9 h-9 nav-hamburger" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="	M0,0  L18,0  L18,3  L0,3  L0,0  Z
														M0,7  L18,7  L18,10 L0,10 L0,7  Z
														M0,14 L18,14 L18,17 L0,17 L0,14 Z
													" id="Combined-Shape"></path>
										</g>
									</g>
								</svg>
								<svg class="inline-block w-10 h-10 hidden nav-cross z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-x">
											<path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
										</g>
									</g>
								</svg>
							</a>
						</div>
					</div>

					<?php
					wp_nav_menu(
						array(
							'container_id'    => 'primary-menu',
							'container_class' => 'hidden absolute w-1/2 bg-black text-white h-screen text-[3.25rem] leading-none right-0 top-0 px-52 pt-44 font-light',
							'menu_class'      => 'flex-col lg:flex lg:-mx-4',
							'theme_location'  => 'primary',
							'li_class'        => 'lg:mx-4 lg:my-2',
							'fallback_cb'     => false,
						)
					);
					?>
				</div>
			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('tailpress_content_start'); ?>

			<main>