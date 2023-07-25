<?php
$background_image = get_option('studios_image');
$background_image_url = wp_get_attachment_url($background_image);
?>

<section id="section-studio" class="h-screen bg-white flex lg:flex-row flex-col justify-between">
        <div class="lg:w-[75vw] w-full lg:h-full h-[60vh] overflow-hidden">
        <div style="background-image: url('<?php echo $background_image_url; ?>');" class="h-full bg-cover bg-center lg:-ml-60 [-webkit-mask-size:175%!important] md:[-webkit-mask-size:125%!important] lg:[-webkit-mask-size:200%!important] [-webkit-mask-position:65%_100%!important] lg:[-webkit-mask-position:98%_95%!important]"></div>
    </div>
    <div class="lg:w-[25vw] w-full lg:h-full h-[40vh] font-theme-heading text-black lg:mr-12 xl:mr-40 2xl:mr-40 xl:ml-4 lg:ml-2 lg:text-left text-center flex">
        <div class="m-auto text-left">
            <img src="<?php echo get_theme_file_uri(); ?>/resources/img/studios-logo.png" class="fade-in w-auto max-h-[8vh] 2xl:max-h-[120px] sm:-ml-1 2xl:-ml-2">
            <p class="fade-in block text-[3.8vmin] md:text-regular lg:text-lg xl:text-xl 2xl:text-2xl font-light lg:py-2 xl:py-3 px-4"><?php echo get_option( 'studios_text' );?></p>
            <a class="fade-in block text-[4vmin] md:text-regular lg:text-lg xl:text-xl 2xl:text-2xl font-normal px-4 my-2 lg:my-0" href="https://gasstudios.co.uk" target="_blank">Find out more <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-black.svg" class="-rotate-90 w-2 lg:w-5 inline ml-4"></a>
        </div>
    </div>
</section>
