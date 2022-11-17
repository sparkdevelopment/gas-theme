<?php get_header(); ?>

<div class="w-full m-0 docSlider">
    <section id="0" class="h-screen bg-black">
        <div
            class="bg-cover bg-center h-[85vh] gas-mask"
            style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-hero.png'); -webkit-mask-position: bottom; -webkit-mask-size: 125%;"
        ></div>
        <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="" class="h-[12vh] mx-auto mt-[1vh]">
    </section>
    <section id="1" class="h-screen bg-black flex flex-column !w-[130vw]">
        <div class="flex flex-row justify-center items-center h-1/3 self-center w-full -mx-[15vw]">
            <div class="w-1/3 h-[40vh] m-1">
                <a href="#" class="h-full block max-w-md mx-auto">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/light.jpg');" class="w-full h-full bg-cover bg-center gas-mask"></div>
                    <p class="font-theme-heading text-white text-center font-bold text-lg m-2">Lighting</p>
                </a>
            </div>
            <div class="w-1/3 h-[40vh] m-1">
                <a href="#" class="h-full block max-w-md mx-auto">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/camera.jpg');" class="w-full h-full bg-cover bg-center gas-mask"></div>
                    <p class="font-theme-heading text-white text-center font-bold text-lg m-2">Camera & Digital</p>
                </a>
            </div>
            <div class="w-1/3 h-[40vh] m-1">
                <a href="#" class="h-full block max-w-md mx-auto">
                    <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/home-category-buttons/coffee-machine.jpg');" class="w-full h-full bg-cover bg-center gas-mask"></div>
                    <p class="font-theme-heading text-white text-center font-bold text-lg m-2">Production</p>
                </a>
            </div>
    </section>
    <section id="2" class="h-screen bg-black flex flex-row">
        <div class="w-2/5 font-theme-heading font-normal text-white ml-52 mt-60 mr-12 text-right">
            <h2 class="text-5xl p-8">The action behind the cameras</h2>
            <p class="text-xl p-8">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
        </div>
        <div class="w-3/5">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/group-camera.jpg');" class="h-[70vh] bg-cover bg-center gas-mask mt-[20vh] mb-[10vh] -mr-40"></div>
        </div>
    </section>
    <section id="3" class="h-screen bg-white flex flex-row">
        <div class="w-3/5">
            <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/studio.jpg');" class="h-[80vh] bg-cover bg-center gas-mask  mt-[10vh] mb-[10vh] -ml-40"></div>
        </div>
        <div class="w-2/5 font-theme-heading font-normal text-black mr-52 mt-60 ml-12 text-left">
            <img src="<?php echo get_theme_file_uri(); ?>/resources/img/studios-logo.png" class="w-auto h-[50px] -ml-3">
            <p class="text-xl py-8">Service commitment and crew message ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
        </div>
    </section>
    <section id="4" class="h-screen bg-black flex flex-column text-white text-center font-theme-heading font-normal">
        <div style="background-image: url('<?php echo get_theme_file_uri(); ?>/resources/img/9E1585E1AAD72EB4.png');" class="absolute bg-[length:325%] bg-[30%_top] w-full h-[90vh] top-[10vh] overflow-hidden">
            <div class="w-[34vw] mx-auto">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/white-seal.svg" class="w-32 mx-auto -rotate-12 mt-20">
                <h2 class="text-5xl p-8">Trust us, we've got it covered</h2>
                <p class="text-lg">Constantly evolving, ever-improving, it’s our job to prepare for changing tastes in photography, and adapt to whatever the industry needs. Across every part of our business, GAS guarantees that we’ll:</p>
                <p class="text-lg mt-6 text-blue-300">Offer solutions to problems yet to happen,<br>Push ourselves to improve a client’s production,<br>Be professional but fun, always putting the job first,<br>Be brutally honest but totally fair,<br>Get it right whatever it takes.</p>
            </div>
        </div>
    </section>
    <section id="5" class="h-screen bg-black text-white">
        <div class="flex flex-col h-full">
            <div class="mx-auto w-full h-2/3 mt-12">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ricky-gervais.jpg" class="z-0  gas-mask mask-85 mask-top absolute max-w-none left-[20%] w-[41%]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/rami-malek.jpg"    class="z-10 gas-mask mask-85 mask-top absolute max-w-none left-[47%] w-[34%] top-[30%]">
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/hapaca.svg"        class="z-20                           absolute max-w-none left-[50%] w-[20%] top-[14%]">
            </div>
            <div class="w-[34vw] h-1/3 mx-auto font-theme-heading text-lg text-center flex flex-col justify-end">
                <div>Hapaca backdrops dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</div>
                <div class="font-bold mt-[5%] mb-[5%]">Find out more<img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" class="-rotate-90 w-3 inline ml-4"></div>
            </div>
        </div>
    </section>
    <section id="6" class="h-screen"></section>
</div>

<script>
    var lethargy = new Lethargy();
    docSlider.init({
        pager: false
    });
</script>
<?php
get_footer();
