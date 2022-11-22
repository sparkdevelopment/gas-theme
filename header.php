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
				<div class="py-2 w-full">
					<div class="flex justify-between items-center">
						<div class="ml-4">
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

						<div class="mr-10 text-white">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
								<svg viewBox="0 0 20 20" class="inline-block w-10 h-10" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
										<g id="icon-shape">
											<path d="M0,3.5 L20,3.5 L20,5 L0,5 L0,3 Z M0,9.5 L20,9.5 L20,11 L0,11 L0,9 Z M0,15.5 L20,15.5 L20,17 L0,17 L0,15 Z" id="Combined-Shape"></path>
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
							'container_class' => 'hidden absolute w-1/2 bg-black text-white h-screen text-[3.25rem] leading-none right-0 top-0 px-52 pt-44 font-light
													after:content-["\00d7"] after:absolute after:right-12 after:top-6 after:text-[5.25rem]',
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