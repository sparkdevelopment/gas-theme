<?php get_header(); ?>

<div class="w-full m-0 docSlider font-family">
    <section id="0" class="h-screen bg-black">
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
        <div class="bg-cover bg-center lg:h-[85vh] h-[55vh] gas-mask sm:[-webkit-mask-size:125%] lg:[-webkit-mask-size:175%] [-webkit-mask-size:150%] [-webkit-mask-position:bottom]"
            style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-hero.png');"></div>
        <div class="lg:hidden text-white h-[20vh] mx-10 md:mx-20 my-[5vh] text-2xl md:text-4xl text-center">Mollit excepteur enim aliqua non. Excepteur consectetur id officia ut laborum esse cupidatat adipisicing.</div>
        <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="" class="h-[9vh] mx-auto mt-[3vh] motion-safe:animate-bounce ![animation-delay:3.5s]">
    </section>
    <section id="1" class="h-screen bg-black flex flex-column !w-[110vw]">
        <div class="flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-full -mx-[5vw]">
            <div class="lg:w-1/3 w-1/2 lg:h-[55vh] h-1/3 m-1">
                <a href="#" class="h-full block mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/light.jpg');" class="w-full h-full bg-contain bg-center gas-mask mask-center max-h-[35vw]"></div>
                    <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2">Lighting</p>
                </a>
            </div>
            <div class="lg:w-1/3 w-1/2 lg:h-[55vh] h-1/3 m-1">
                <a href="#" class="h-full block mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/camera.jpg');" class="w-full h-full bg-contain bg-center gas-mask mask-center max-h-[35vw]"></div>
                    <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2">Camera & Digital</p>
                </a>
            </div>
            <div class="lg:w-1/3 w-1/2 lg:h-[55vh] h-1/3 m-1">
                <a href="#" class="h-full block mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/coffee.jpg');" class="w-full h-full bg-contain bg-center gas-mask mask-center max-h-[35vw]"></div>
                    <p class="font-theme-heading text-white text-center font-light text-3xl 2xl:text-5xl m-2">Production</p>
                </a>
            </div>
    </section>
    <section id="2" class="h-screen bg-black flex lg:flex-row flex-col-reverse">
        <div class="lg:w-1/3 w-full lg:h-full h-[45vh] font-theme-heading text-white xl:ml-52 lg:ml-12 xl:mr-12 lg:mr-8 lg:text-right text-center flex">
            <div class="m-auto">
                <h2 class="block lg:text-6xl xl:text-7xl font-light text-4xl lg:p-6 xl:p-8 p-4">The action behind the cameras</h2>
                <p class="block lg:text-2xl xl:text-3xl font-light text-2xl lg:p-6 xl:p-8 p-4">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
            </div>
        </div>
        <div class="lg:w-2/3 w-full lg:h-full h-[55vh] overflow-hidden">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/GAS Family.jpg');"
            class="h-full bg-cover bg-center gas-mask lg:mask-center lg:-mr-40 sm:[-webkit-mask-size:125%] lg:[-webkit-mask-size:175%] [-webkit-mask-size:150%] [-webkit-mask-position:bottom]"></div>
        </div>
    </section>
    <section id="3" class="h-screen bg-white flex sm:flex-row flex-col">
        <div class="sm:w-1/3 w-full sm:h-full h-1/3">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/studio.jpg');" class="h-full bg-cover bg-center gas-mask mask-center sm:-ml-40"></div>
        </div>
        <div class="sm:w-2/3 w-full sm:h-full h-2/3 font-theme-heading font-normal text-black sm:mr-52 sm:ml-12 sm:text-left text-center flex">
            <div class="m-auto text-center">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/studios-logo.png" class="w-auto h-[50px] sm:-ml-3 m-auto">
                <p class="sm:text-2xl text-xl sm:py-8 py-4">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
            </div>
        </div>
    </section>
    <section id="4" class="h-screen bg-black flex flex-column text-white text-center font-theme-heading font-normal">
        <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/9E1585E1AAD72EB4.png');" class="absolute bg-[length:325%] bg-[30%_top] w-full h-[90vh] top-[10vh] overflow-hidden">
            <div class="sm:w-[75vw] md:w-[55vw] lg:w-[35vw] mx-auto">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/white-seal.svg" class="w-48 mx-auto -rotate-12 sm:mt-20 mt-6">
                <h2 class="sm:text-5xl text-2xl sm:p-8 p-3">Trust us, we've got it covered</h2>
                <p class="sm:text-xl text-md p-2">Constantly evolving, ever-improving, it’s our job to prepare for changing tastes in photography, and adapt to whatever the industry needs. Across every part of our business, GAS guarantees that we’ll:</p>
                <p class="sm:text-xl text-md sm:mt-6 mt-2 p-2">Offer solutions to problems yet to happen,<br>Push ourselves to improve a client’s production,<br>Be professional but fun, always putting the job first,<br>Be brutally honest but totally fair,<br>Get it right whatever it takes.</p>
            </div>
        </div>
    </section>
    <section id="5" class="h-screen bg-black text-white">
        <div class="flex flex-col h-full">
            <div class="mx-auto w-full sm:h-2/3 h-1/2 sm:mt-12 mt-10">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ricky-gervais.jpg" class="z-0  gas-mask mask-85 mask-top absolute max-w-none sm:left-[20%] left-[0%] sm:w-[46%] w-[80%]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/rami-malek.jpg" class="z-10 gas-mask mask-85 mask-top absolute max-w-none sm:left-[47%] left-[35%] sm:w-[39%] w-[65%] sm:top-[30%] top-[25%]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/hapaca.svg" class="z-20                           absolute max-w-none sm:left-[50%] left-[50%] sm:w-[25%] w-[45%] sm:top-[14%] top-[8%]">
            </div>
            <div class="sm:w-[34vw] w-full sm:h-1/3 h-1/2 mx-auto font-theme-heading text-xl text-center flex flex-col sm:justify-end justify-center">
                <div>Hapaca backdrops dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                <div class="font-bold mt-[5%] mb-[5%]">Find out more<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" class="-rotate-90 w-3 inline ml-4"></div>
            </div>
        </div>
    </section>
    <section id="6" class="h-screen">
        <div class="bg-gray-700 border-y-2 border-gray-700">
            <p class="sm:text-2xl text-xl text-white text-center sm:my-10 my-4">Just a few of the brands we work with</p>
            <div class="owl-carousel my-10">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Conde Nast Logo White.svg" class="item h-[10vh]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Dazed Logo White.svg" class="item h-[10vh]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Made Logo White.svg" class="item h-[10vh]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Mulberry Logo White.svg" class="item h-[10vh]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/Vogue Logo White.svg" class="item h-[10vh]">
            </div>
        </div>
        <div class="bg-gray-800 border-y-2 border-blue-500">
            <p class="sm:text-2xl text-xl text-white text-center sm:my-10 my-4">See what we're up to on Instagram</p>
            <div class="flex justify-around sm:my-10 my-4">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post2.jpeg" class="w-[20vw] h-[20vw] max-h-[300px] max-w-[300px]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post1.jpeg" class="w-[20vw] h-[20vw] max-h-[300px] max-w-[300px]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post3.jpeg" class="w-[20vw] h-[20vw] max-h-[300px] max-w-[300px]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post4.jpeg" class="w-[20vw] h-[20vw] max-h-[300px] max-w-[300px]">
            </div>
        </div>
        <div><?php get_footer(); ?></div>
    </section>
</div>

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
            items: 5,
            stagePadding: 150,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 100,
                },
                600: {
                    items: 3,
                    stagePadding: 50,
                },
                1000: {
                    items: 5,
                    stagePadding: 150,
                }
            }
        })
    });
</script>
<?php
