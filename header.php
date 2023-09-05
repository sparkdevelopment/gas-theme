<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php $hide_nav = $args['hide_nav'] ?? false; ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '595449329467379');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src=https://www.facebook.com/tr?id=595449329467379&ev=PageView&noscript=1
    /></noscript>
    <!-- End Meta Pixel Code -->
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased js' ); ?>>

	<?php do_action( 'tailpress_site_before' ); ?>

	<div id="page" class="min-h-screen flex flex-col relative">

		<?php do_action( 'tailpress_header' ); ?>

		<?php if ( ! $hide_nav ) { ?>
		<header class="fixed top-0 left-0 z-40 w-full transition-all duration-500 bg-[rgba(0.5,0.5,0.5,0.0)] bg-blend-color">

			<div class="mx-0 w-full">
				<div class="w-full">
					<div class="flex justify-between items-center">
						<div class="h-24 js-header-logo sm:w-auto max-w-[75%] md:max-w-[35%] xl:max-w-[10%]">
							<?php if ( has_custom_logo() ) { ?>
								<div class="md:w-60 h-full items-center md:flex hidden">
									<?php the_custom_logo(); ?>
								</div>
								<div class="h-full md:hidden flex">
									<a href="<?php echo get_bloginfo( 'url' ); ?>">
										<img class="h-full" src="<?php echo get_template_directory_uri(); ?>/resources/img/mobile-logo.svg">
									</a>
								</div>
							<?php } else { ?>
								<a href="<?php echo get_bloginfo( 'url' ); ?>" class="font-extrabold text-lg uppercase">
									<?php echo get_bloginfo( 'name' ); ?>
								</a>

								<p class="text-sm font-light text-gray-600">
									<?php echo get_bloginfo( 'description' ); ?>
								</p>

							<?php } ?>
						</div>

						<div class="mr-4 md:mr-8 text-white flex flex-col-reverse md:flex-row items-end flex-wrap gap-4 md:gap-10 text-3xl">
							<?php // Telephone number ?>
							<a class="nav-tel block text-lg md:text-3xl" href="tel:020 3397 2757">020 3397 2757</a>

							<div class="flex gap-8 items-center">

								<?php // Search ?>
								<a href="#" aria-label="Toggle search" id="search-toggle">
									<img src="<?php echo get_template_directory_uri(); ?>/resources/img/search.svg" alt="Search" class="w-8 h-8 js-search-icon">
								</a>

								<?php // Menu ?>
								<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle" class="z-20">
									<svg viewBox="0 0 18 18" class="inline-block w-6 md:w-8 h-6 md:h-8 nav-hamburger" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g stroke="none" stroke-width="2" fill="currentColor" fill-rule="evenodd">
											<g id="icon-shape">
												<path d="M0,0 L18,0 L18,2 L0,2 L0,0 Z M0,7 L18,7 L18,9 L0,9 L0,7 Z M0,14 L18,14 L18,16 L0,16 L0,14 Z"></path>
											</g>
										</g>
									</svg>

									<svg class="w-6 md:w-8 h-6 md:h-8 hidden nav-cross z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
										<g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
											<g id="icon-x">
												<path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
											</g>
										</g>
									</svg>
								</a>

							</div>
							<?php
							wp_nav_menu(
								array(
									'container_id'    => 'primary-menu',
									'container_class' => 'absolute w-full md:w-1/2 lg:w-1/3 xl:w-1/4 bg-black text-white h-screen md:h-[66.6vh] text-[2rem] leading-none right-0 top-0 px-7 sm:px-10 md:px-18 lg:px-10 xl:px-12 pt-44 font-light menu-slide z-10',
									'menu_class'      => 'flex-col lg:flex lg:-mx-4',
									'theme_location'  => 'primary',
									'li_class'        => 'mx-2 lg:mx-4 my-4 lg:my-2',
									'fallback_cb'     => false,
								)
							);
							?>

						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="opacity-0 fixed top-0 left-0 backdrop-blur-sm w-full h-full z-50 transition-opacity pointer-events-none bg-[rgba(0,0,0,0.75)]" id="search-form">
			<?php get_template_part('template-parts/section', 'search'); ?>
		</div>
		<?php } ?>

		<div id="content" class="site-content flex-grow">

			<?php do_action( 'tailpress_content_start' ); ?>

			<main>
