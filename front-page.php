<?php get_header(); ?>

<div class="w-full m-0 docSlider font-sans">
    <section id="0" class="h-screen !overflow-x-hidden bg-black flex flex-col justify-between">
        <div class="absolute top-0 left-0 xl:mt-4 xl:ml-4 mt-1 ml-1 z-50">
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
        <div class="bg-cover bg-center lg:h-[85vh] h-[50vh] gas-mask sm:[-webkit-mask-size:125%] lg:[-webkit-mask-size:175%] [-webkit-mask-size:150%] [-webkit-mask-position:bottom]" style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-hero.png');"></div>
        <div class="lg:hidden text-white h-[20vh] mx-10 md:mx-20 my-[5vh] text-2xl md:text-4xl text-center">Mollit excepteur enim aliqua non. Excepteur consectetur id officia ut laborum esse cupidatat adipisicing.</div>
        <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="" class="h-[9vh] mx-auto mt-[2vh] mb-[1vh] motion-safe:animate-bounce ![animation-delay:3.5s]">
    </section>

    <section id="1" class="h-screen !overflow-x-hidden bg-black flex flex-column !w-[110vw]">
        <div class="flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-full -mx-[5vw]">
            <div class="lg:w-1/3 w-1/2 lg:h-[55vh] h-1/3 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/light.jpg');" class="w-full h-full bg-contain bg-center gas-mask mask-center max-h-[35vw]"></div>
                    <p class="font-theme-heading text-white text-center font-light text-3xl xl:text-5xl 2xl:text-5xl m-2">Lighting</p>
                </a>
            </div>
            <div class="lg:w-1/3 w-1/2 lg:h-[55vh] h-1/3 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/camera.jpg');" class="w-full h-full bg-contain bg-center gas-mask mask-center max-h-[35vw]"></div>
                    <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2">Camera & Digital</p>
                </a>
            </div>
            <div class="lg:w-1/3 w-1/2 lg:h-[55vh] h-1/3 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/coffee.jpg');" class="w-full h-full bg-contain bg-center gas-mask mask-center max-h-[35vw]"></div>
                    <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2">Production</p>
                </a>
            </div>
    </section>

    <section id="2" class="h-screen !overflow-x-hidden bg-black flex lg:flex-row flex-col-reverse items-center">
        <div class="lg:w-[40vw] w-full lg:h-full h-[47.5vh] md:h-[40vh] font-theme-heading font-normal text-white lg:ml-12 xl:ml-52 xl:mr-12 lg:mr-8 lg:text-right text-center flex">
            <div class="m-auto">
                <h2 class="block text-3xl lg:text-5xl xl:text-7xl 2xl:text-7xl font-light lg:p-6 xl:p-2 px-4">The action behind the cameras</h2>
                <p class="block text-lg lg:text-2xl xl:text-3xl 2xl:text-4xl font-light lg:p-6 xl:p-2 px-4">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
            </div>
        </div>
        <div class="lg:w-[60vw] w-full h-[52.5vh] md:h-[60vh] lg:h-full overflow-hidden">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/GAS Family.jpg');"
            class="h-full bg-cover bg-center gas-mask mask-center image-mask -mt-[10vh] lg:mt-0 lg:-mr-40 image-mask [-webkit-mask-size:125%] [-webkit-mask-position:bottom!important] lg:[-webkit-mask-position:center!important]"></div>
        </div>
    </section>

    <section id="3" class="h-screen !overflow-x-hidden bg-white flex lg:flex-row flex-col">
        <div class="lg:w-[60vw] w-full lg:h-full h-[52.5vh] overflow-hidden">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/studio.jpg');"
            class="h-full bg-cover bg-center gas-mask mask-center image-mask -mt-[10vh] lg:mt-0 lg:-ml-40 image-mask [-webkit-mask-size:125%] [-webkit-mask-position:bottom!important] lg:[-webkit-mask-position:center!important]"></div>
        </div>
        <div class="lg:w-[40vw] w-full lg:h-full h-[47.5vh] font-theme-heading font-normal text-black lg:mr-12 xl:mr-52 xl:ml-12 lg:ml-8 lg:text-left text-center flex -mt-[5vh] lg:mt-0">
            <div class="m-auto text-left">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/studios-logo.png" class="w-auto h-[80px] 2xl:max-h-[120px] sm:-ml-1 2xl:-ml-2">
                <p class="block text-lg lg:text-2xl xl:text-3xl 2xl:text-4xl font-light lg:py-6 xl:py-8 px-4">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
                <p class="block text-lg lg:text-2xl xl:text-3xl 2xl:text-4xl font-normal lg:py-6 xl:py-8 px-4 text-center lg:text-left">Find out more <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-black.svg" class="-rotate-90 w-5 inline ml-4"></p>
            </div>
        </div>
    </section>

    <section id="4" class="h-screen !overflow-hidden bg-black flex flex-column text-white text-center font-theme-heading font-normal">
        <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/9E1585E1AAD72EB4.png');" class="absolute bg-[length:325%] bg-[30%_top] w-full h-[90vh] top-[10vh] overflow-hidden">
            <div class="sm:w-[75vw] md:w-[80vw] lg:w-[55vw] xl:w-[57.5vw] mx-auto font-light">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/white-seal.svg"
                class="w-48 mx-auto -rotate-12 sm:mt-10 md:mt-8 mt-6 2xl:w-60">
                <h2 class="text-2xl sm:text-3xl md:text-3xl lg:text-3xl 2xl:text-6xl sm:p-4 md:p-4 p-3">Trust us, we've got it covered</h2>
                <p class="text-md sm:text-md md:text-lg lg:text-xl 2xl:text-4xl p-2">Constantly evolving, ever-improving, it’s our job to prepare for changing tastes in photography, and adapt to whatever the industry needs. Across every part of our business, GAS guarantees that we’ll:</p>
                <p class="text-md sm:text-md md:text-lg lg:text-xl 2xl:text-4xl sm:mt-3 md:mt-3 mt-2 p-2">Offer solutions to problems yet to happen,<br>Push ourselves to improve a client’s production,<br>Be professional but fun, always putting the job first,<br>Be brutally honest but totally fair,<br>Get it right whatever it takes.</p>
            </div>
        </div>
    </section>

    <section id="5" class="h-screen !overflow-x-hidden bg-black text-white max-w-full">
        <div class="flex flex-col h-full">
            <div class="mx-auto w-full sm:h-3/4 h-1/2 md:mt-12 sm:mt-2 mt-10">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ricky-gervais.jpg"
                class="z-0 gas-mask mask-85 mask-top absolute left-[0%] md:left-[5%] xl:left-[20%] w-[130%] sm:w-[65%] md:w-[63%] xl:w-[46%] 2xl:w-[50%] max-w-[770px] 2xl:max-w-[50%] -ml-[15%] sm:ml-0 top-[20%] sm:top-[22.5%] md:top-[5%] overflow-hidden">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/rami-malek.jpg"
                class="z-10 gas-mask mask-85 mask-top absolute left-[45%] sm:left-[45%] md:left-[41%] xl:left-[47%] w-[65%] sm:w-[52.5%] md:w-[52%] xl:w-[39%] 2xl:w-[35%] xl:top-[30%] md:top-[27.5%] sm:top-[25%] top-[50%] max-w-[650px] 2xl:max-w-[35%]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/hapaca.svg"
                class="z-20 absolute left-[5%] sm:left-[50%] 2xl:left-[55%] xl:w-[25%] w-[80%] sm:w-[30%] md:w-[35%] top-[1%] sm:top-[6%] md:top-[11%] max-w-none">
            </div>
            <div class="sm:w-[90vw] md:w-[34vw] 2xl:w-[50vw] w-[90vw] sm:h-1/4 h-1/2 mx-auto font-theme-heading text-md sm:text-xl 2xl:text-4xl font-light text-center flex flex-col md:justify-around justify-end">
                <div class="my-[2.5%] md:my-[5%]">Hapaca backdrops dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                <div class="font-normal sm:my-[2.5%] md:my-[5%]">Find out more<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" class="-rotate-90 w-4 inline ml-6"></div>
            </div>
        </div>
    </section>

    <section id="6" class="h-screen !overflow-x-hidden">
        <div class="bg-[#3e3e3e] h-1/2">
            <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl text-white text-center py-10 sm:py-4 absolute w-full block">Just a few of the brands we work with</p>
            <div class="owl-carousel h-full !flex flex-col justify-center">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Conde Nast Logo White.svg" class="item h-[25vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Dazed Logo White.svg" class="item h-[25vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Made Logo White.svg" class="item h-[25vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Mulberry Logo White.svg" class="item h-[25vh] px-3 2xl:px-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Vogue Logo White.svg" class="item h-[25vh] px-3 2xl:px-12">
            </div>
        </div>
        <div class="bg-[#2f2f2f] h-1/2">
            <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-4xl text-white text-center py-10 sm:py-4 absolute w-full block">See what we're up to on Instagram</p>
            <div class="flex justify-around h-full items-center flex-wrap pt-[20vw] p-[10vw] sm:p-0">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post2.jpeg" class="w-[20vw] h-auto max-w-[300px] xl:max-w-[400px] basis-[40%] p-[2.5vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post1.jpeg" class="w-[20vw] h-auto max-w-[300px] xl:max-w-[400px] basis-[40%] p-[2.5vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post3.jpeg" class="w-[20vw] h-auto max-w-[300px] xl:max-w-[400px] basis-[40%] p-[2.5vw]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post4.jpeg" class="w-[20vw] h-auto max-w-[300px] xl:max-w-[400px] basis-[40%] p-[2.5vw]">
            </div>
        </div>
        <div class="bg-black h-full md:h-1/2 flex flex-col justify-between">
            <?php if (has_custom_logo()) { ?>
                <div class="mx-0 w-full">
                    <div class="pt-1 pb-4 w-full">
                        <div class="flex justify-between items-center">
                            <div class="ml-1 xl:ml-4">
                                <div class="sm:w-auto max-w-[75%] xl:max-w-[90%]">
                                    <?php the_custom_logo(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="sm:grid sm:grid-cols-12 flex flex-col-reverse justify-between gap-4 text-white text-md sm:text-xl 2xl:text-2xl sm:mx-8 mx-4 font-light leading-6">
                <div class="flex flex-col col-span-6 md:col-span-3 justify-between">
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
                <div class="col-span-6 md:col-span-3">
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
                <div class="md:col-start-8 md:col-end-13 col-span-12 md:col-span-5 flex flex-col justify-end">
                    <div class="m-auto w-full">
                        <h3 class="text-xl sm:text-2xl 2xl:text-3xl font-bold mb-4">Sign up for our newsletter</h3>
                        <form class="grid grid-cols-8 w-full">
                            <div class="col-span-6 lg:col-span-5">
                                <input class="w-full bg-[#2f2f2f] text-white placeholder:text-white text-sm sm:text-2xl lg:text-2xl 2xl:text-3xl sm:py-3 sm:px-4 py-1 px-2" type="text" placeholder="Enter email address">
                            </div>
                            <div class="col-span-2 lg:col-span-3">
                                <button class="w-full bg-gray-300 text-black text-sm sm:text-2xl lg:text-2xl 2xl:text-3xl sm:py-3 sm:px-4 py-1 px-2 font-bold">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="text-right text-white sm:mb-6 text-sm sm:text-md 2xl:text-2xl mt-4">Designed by <strong>SoreThumbStudio</strong>&reg;</div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>

<script>
    var lethargy = new Lethargy();
    docSlider.init({
        pager: false
    });
    jQuery(document).ready(function($) {
        var owl = $('.owl-carousel');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
            autoHeight: true,
            items: 4,
            stagePadding: 150,
            responsiveClass:true,
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
