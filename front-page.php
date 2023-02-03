<?php get_header(); ?>

<div class="w-full m-0 docSlider font-sans">
    <section id="0" class="h-screen !overflow-x-hidden bg-black flex flex-col justify-between">
        <div>
            <!-- <div class="absolute top-0 left-0 xl:mt-4 xl:ml-4 mt-1 ml-1 z-50">
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
            <div class="absolute top-0 right-0 mr-6 xl:mr-12 mt-6 xl:mt-12 text-white z-10 [filter:drop-shadow(0_0_10px_#000)]">
                <a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">
                    <svg viewBox="0 0 18 18" class="inline-block w-9 h-9 nav-hamburger" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g stroke="none" stroke-width="1" fill="currentColor" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="	M0,0  L18,0  L18,2  L0,2  L0,0  Z
                                            M0,7  L18,7  L18,9  L0,9  L0,7  Z
                                            M0,14 L18,14 L18,16 L0,16 L0,14 Z
                                        " id="Combined-Shape"></path>
                            </g>
                        </g>
                    </svg>
                    <svg class="w-9 h-9 hidden nav-cross z-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
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
                    'container_class' => 'hidden absolute w-full md:w-1/2 bg-black text-white h-screen text-[3.25rem] leading-none right-0 top-0 px-8 sm:px-12 md:px-20 lg:px-40 xl:px-52 pt-44 font-light z-[1]',
                    'menu_class'      => 'flex-col lg:flex lg:-mx-4',
                    'theme_location'  => 'primary',
                    'li_class'        => 'lg:mx-4 lg:my-2',
                    'fallback_cb'     => false,
                )
            );
            ?> -->
        <div class="bg-cover bg-center lg:h-[85vh] h-[50vh] gas-mask [-webkit-mask-size:175%] sm:[-webkit-mask-size:125%] md:[-webkit-mask-size:150%] lg:[-webkit-mask-size:175%] [-webkit-mask-position:65%_100%]" style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-hero.png');"></div>
    </div>
        <div class="lg:hidden flex items-center text-white h-[20vh] mx-5 md:mx-20 my-[5vh] font-light text-2xl md:text-4xl text-center">Mollit excepteur enim aliqua non. Excepteur consectetur id officia ut laborum esse cupidatat adipisicing.</div>
        <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="" class="h-[7vh] mx-auto mt-[2vh] mb-[1vh] bouncing-item ![animation-delay:3.5s]">
    </section>

    <section id="1" class="h-screen !overflow-x-hidden bg-black flex flex-column">
        <div class="flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-full">
            <div class="lg:w-1/3 w-1/2 lg:h-[65vh] h-1/2 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/light.jpg');" class="group w-full h-full bg-gray-500 hover:bg-white transition-colors bg-cover bg-center max-h-[35vw] flex flex-col justify-center bg-blend-multiply">
                        <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2 group-hover:opacity-0 transition-opacity">Lighting</p>
                    </div>
                </a>
            </div>
            <div class="lg:w-1/3 w-1/2 lg:h-[65vh] h-1/2 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/camera.jpg');" class="group w-full h-full bg-gray-500 hover:bg-white transition-colors bg-cover bg-center max-h-[35vw] flex flex-col justify-center bg-blend-multiply">
                        <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2 group-hover:opacity-0 transition-opacity">Camera & Digital</p>
                    </div>
                </a>
            </div>
            <div class="lg:w-1/3 w-1/2 lg:h-[65vh] h-1/2 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/coffee.jpg');" class="group w-full h-full bg-gray-500 hover:bg-white transition-colors bg-cover bg-center max-h-[35vw] flex flex-col justify-center bg-blend-multiply">
                        <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2 group-hover:opacity-0 transition-opacity">Production</p>
                    </div>
                </a>
            </div>
    </section>

    <section id="2" class="h-screen !overflow-x-hidden bg-black flex lg:flex-row flex-col-reverse items-center">
        <div class="lg:w-[25vw] w-full lg:h-full h-[47.5vh] md:h-[40vh] font-theme-heading font-normal text-white lg:ml-12 xl:ml-40 2xl:ml-40 xl:mr-12 lg:mr-8 lg:text-right text-center flex">
            <div class="m-auto mb-[10vh]">
                <h2 class="fade-in block text-2xl sm:text-3xl md:text-3xl lg:text-3xl 2xl:text-5xl font-light p-2 lg:p-6 xl:p-2 px-4">The action behind the cameras</h2>
                <p class="fade-in block text-base lg:text-2xl xl:text-2xl 2xl:text-2xl font-light lg:p-6 xl:p-2 px-4">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
            </div>
        </div>
        <div class="lg:w-[75vw] w-full h-[52.5vh] md:h-[60vh] lg:h-full overflow-hidden">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/GAS Family.jpg');" class="h-full bg-cover bg-center gas-mask mask-center image-mask md:-mt-[10vh] lg:mt-0 lg:-mr-60 image-mask [-webkit-mask-size:150%!important] md:[-webkit-mask-size:125%!important] lg:[-webkit-mask-size:175%!important] [-webkit-mask-position:65%_100%!important] lg:[-webkit-mask-position:0%_15%!important]"></div>
        </div>
    </section>

    <section id="3" class="h-screen !overflow-x-hidden bg-white flex lg:flex-row flex-col">
        <div class="lg:w-[75vw] w-full lg:h-full h-[52.5vh] overflow-hidden">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/studio.jpg');"     class="h-full bg-cover bg-center gas-mask mask-center image-mask md:mt-[10vh] lg:mt-0 lg:-ml-60 image-mask [-webkit-mask-size:150%!important] md:[-webkit-mask-size:125%!important] lg:[-webkit-mask-size:200%!important] [-webkit-mask-position:65%_100%!important] lg:[-webkit-mask-position:98%_95%!important]"></div>
        </div>
        <div class="lg:w-[25vw] w-full lg:h-full h-[47.5vh] md:h-[40vh] font-theme-heading font-normal text-black lg:mr-12 xl:mr-40 2xl:mr-40 xl:ml-4 lg:ml-2 lg:text-left text-center flex md:-mt-[5vh] lg:mt-0">
            <div class="m-auto mb-[10vh] text-left">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/studios-logo.png" class="fade-in w-auto max-h-[80px] 2xl:max-h-[120px] sm:-ml-1 2xl:-ml-2">
                <p class="fade-in block text-base sm:text-lg md:text-xl lg:text-2xl xl:text-2xl 2xl:text-2xl font-light lg:py-2 xl:py-3 px-4">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
                <p class="fade-in block text-base sm:text-lg md:text-xl lg:text-2xl xl:text-2xl 2xl:text-2xl font-normal lg:py-2 xl:py-3 px-4 text-center lg:text-left">Find out more <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-black.svg" class="-rotate-90 w-5 inline ml-4"></p>
            </div>
        </div>
    </section>

    <section id="4" class="h-screen !overflow-hidden bg-black flex flex-col text-white text-center font-theme-heading font-normal">
        <div class="flex m-auto justify-evenly w-full h-[50vh] items-center">
            <div class="w-32 h-32 bg-white"></div>
            <div class="w-32 h-32 bg-white"></div>
            <div class="w-32 h-32 bg-white"></div>
            <div class="w-32 h-32 bg-white"></div>
            <div class="w-32 h-32 bg-white"></div>
        </div>
        <div class="sm:w-[75vw] md:w-[80vw] lg:w-[55vw] xl:w-[57.5vw] mx-auto font-light h-[50vh]">
            <!-- <img src="<?php echo get_theme_file_uri(); ?>/resources/img/white-seal.svg" class="w-48 mx-auto -rotate-12 mt-6 sm:mt-10 md:mt-8 lg:mt-16 2xl:w-60"> -->
            <h2 class="fade-in text-2xl sm:text-3xl md:text-3xl lg:text-3xl 2xl:text-5xl sm:p-4 md:p-4 p-3 w-[65%] sm:w-[45%] mx-auto">Trust us, we've got it covered</h2>
            <p class="fade-in text-base sm:text-lg md:text-xl lg:text-xl 2xl:text-2xl p-2">Constantly evolving, ever-improving, it’s our job to prepare for changing tastes in photography, and adapt to whatever the industry needs. Across every part of our business, GAS guarantees that we’ll:</p>
            <p class="fade-in text-base sm:text-lg md:text-xl lg:text-xl 2xl:text-2xl sm:mt-3 md:mt-3 mt-2 p-2">Offer solutions to problems yet to happen,<br>Push ourselves to improve a client’s production,<br>Be professional but fun, always putting the job first,<br>Be brutally honest but totally fair,<br>Get it right whatever it takes.</p>
        </div>
    </section>

    <section id="5" class="h-screen !overflow-hidden bg-black text-white max-w-full">
        <div class="flex flex-col h-full">
            <div class="mx-auto w-full sm:h-3/4 h-1/2 md:mt-12 sm:mt-2 mt-10">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ricky-gervais.jpg" class="z-0 gas-mask mask-85 mask-top absolute left-[0%] md:left-[5%] xl:left-[20%] w-[130%] sm:w-[65%] md:w-[63%] xl:w-[46%] 2xl:w-[50%] max-w-[770px] 2xl:max-w-[50%] -ml-[15%] sm:ml-0 top-[20%] sm:top-[22.5%] md:top-[5%] overflow-hidden">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/rami-malek.jpg" class="z-10 gas-mask mask-85 mask-top absolute left-[45%] sm:left-[45%] md:left-[41%] xl:left-[47%] w-[65%] sm:w-[52.5%] md:w-[52%] xl:w-[39%] 2xl:w-[35%] xl:top-[30%] md:top-[27.5%] sm:top-[40%] top-[55%] max-w-[650px] 2xl:max-w-[35%]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/hapaca.svg" class="z-20 absolute left-[5%] sm:left-[50%] 2xl:left-[55%] xl:w-[25%] w-[80%] sm:w-[30%] md:w-[35%] top-[1%] sm:top-[6%] md:top-[11%] max-w-none">
            </div>
            <div class="sm:w-[90vw] md:w-[34vw] 2xl:w-[50vw] w-[90vw] sm:h-1/4 h-1/2 mx-auto font-theme-heading text-base sm:text-lg md:text-xl lg:text-xl 2xl:text-2xl font-light text-center flex flex-col md:justify-around justify-end">
                <div class="fade-in my-[2.5%] md:my-[5%]">Hapaca backdrops dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                <div class="fade-in font-normal sm:my-[2.5%] md:my-[5%]">Find out more<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" class="-rotate-90 w-4 inline ml-6"></div>
            </div>
        </div>
    </section>

    <section id="6" class="h-screen !overflow-x-hidden">
        <div class="bg-[#3e3e3e] h-1/2">
            <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-3xl text-white text-center font-light py-4 md:py-12 sm:py-4 absolute w-full block">Just a few of the brands we work with</p>
            <div class="owl-carousel h-full !flex flex-col justify-center pt-20">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Conde Nast Logo White.svg" class="item h-[25vh] md:h-[15vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Dazed Logo White.svg" class="item h-[25vh] md:h-[15vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Made Logo White.svg" class="item h-[25vh] md:h-[15vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Mulberry Logo White.svg" class="item h-[25vh] md:h-[15vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Vogue Logo White.svg" class="item h-[25vh] md:h-[15vh] px-3 2xl:px-12">
            </div>
        </div>
        <div class="bg-[#2f2f2f] h-1/2">
            <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-3xl text-white text-center font-light py-4 md:py-12 sm:py-4 absolute w-full block">See what we're up to on Instagram</p>
            <div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center pt-[3rem] px-[4vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post1.jpeg" class="max-h-full w-auto basis-[40%] mx-auto md:basis-[25%] p-[4vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post2.jpeg" class="max-h-full w-auto basis-[40%] mx-auto md:basis-[25%] p-[4vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post3.jpeg" class="max-h-full w-auto basis-[40%] mx-auto md:basis-[25%] p-[4vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post4.jpeg" class="max-h-full w-auto basis-[40%] mx-auto md:basis-[25%] p-[4vw]">
            </div>
        </div>
        <div class="bg-black h-full md:h-1/2 flex flex-col justify-between">
            <?php if (has_custom_logo()) { ?>
                <div class="mx-0 w-full">
                    <div class="pt-1 sm:pb-4 pb-0 w-full">
                        <div class="flex justify-between items-center">
                            <div class="sm:ml-1 xl:ml-4">
                                <div class="sm:w-auto max-w-[75%] xl:max-w-[90%]">
                                    <?php the_custom_logo(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="sm:grid sm:grid-cols-12 flex flex-col-reverse justify-between gap-4 text-white text-base sm:text-xl 2xl:text-2xl sm:mx-8 mx-4 font-light leading-6">
                <div class="text-right text-white sm:mb-6 text-sm sm:text-base 2xl:text-2xl mt-2 sm:hidden col-span-1">Designed by <strong>SoreThumbStudio</strong>&reg;</div>
                <div class="flex flex-col col-span-5 md:col-span-3 justify-between">
                    <p class="sm:my-6 my-2">
                        <a href="mailto:office@gashireco.uk">office@gashireco.uk</a><br>
                        <a href="tel:+442033972757">+44 (0)20 3397 2757</a>
                    </p>
                    <p class="sm:my-6 my-2">
                        GAS Production Hire<br>
                        Unit G, Sutherland House<br>
                        Sutherland Road<br>
                        Walthamstow<br>
                        London<br>
                        E17 6BU
                    </p>
                    <p class="sm:my-6 my-2 pt-[0.5rem] block sm:hidden">&copy; GAS Production Hire Ltd <?php echo date_i18n('Y'); ?></p>
                </div>
                <div class="col-span-6 md:col-span-3">
                    <ul class="sm:my-6 my-2">
                        <li><a href="#">Price List & Account Form</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                    <p class="sm:my-6 my-2 pt-[2rem] hidden sm:block">&copy; GAS Production Hire Ltd <?php echo date_i18n('Y'); ?></p>
                </div>
                <div class="md:col-start-8 md:col-end-13 col-span-12 md:col-span-5 flex flex-col justify-end">
                    <div class="m-auto w-full mt-0">
                        <h3 class="font-bold mb-4 sm:mt-6 mt-2">Sign up for our newsletter</h3>
                        <form class="grid grid-cols-8 w-full">
                            <div class="col-span-6 lg:col-span-5">
                                <input class="w-full bg-[#2f2f2f] text-white placeholder:text-white sm:py-2 sm:px-3 px-1" type="text" placeholder="Enter email address">
                            </div>
                            <div class="col-span-2 lg:col-span-3">
                                <button class="w-full bg-gray-300 text-black sm:py-2 sm:px-3 px-1 font-bold">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-right text-white sm:mb-6 text-xs 2xl:text-xl mt-4 hidden sm:block">Designed by <strong>SoreThumbStudio</strong>&reg;</div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>

<script>
    var lethargy = new Lethargy();
    let fade_in_elements = document.querySelectorAll('.fade-in');
    let window_height = window.innerHeight;
    docSlider.init({
        pager: false,
        beforeChange: function() {
            fade_in_elements.forEach(function(element) {
                let element_position = element.getBoundingClientRect().top;
                if (element_position < window_height) {
                    element.classList.remove('fade-in--visible');
                }
            });
        },
        afterChange: function(index) {
            fade_in_elements.forEach(function(element) {
                let element_position = element.getBoundingClientRect().top;
                if (element_position < window_height) {
                    element.classList.add('fade-in--visible');
                }
            });
            if (index == 6) {
                document.querySelector('header').classList.add('header--scrolled');
            } else {
                document.querySelector('header').classList.remove('header--scrolled');
            }
        }
    });
    jQuery(document).ready(function($) {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplaySpeed: 5000,
            autoplayHoverPause: true,
            autoHeight: true,
            items: 4,
            slideTransition: 'linear',
            stagePadding: 150,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 100,
                },
                640: {
                    items: 2,
                    stagePadding: 50,
                },
                768: {
                    items: 2,
                    stagePadding: 75,
                },
                1024: {
                    items: 3,
                    stagePadding: 100,
                }
            }
        })
    });
</script>
<?php
