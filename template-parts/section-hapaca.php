<?php
$background_image = get_option('hapaca_image');
$background_image_url = wp_get_attachment_url($background_image);
?>

<section id="section-hapaca" class="h-screen bg-black flex lg:flex-row flex-col-reverse text-white max-w-full justify-between">
    <div class="lg:w-[25vw] w-full lg:h-full h-[40vh] font-theme-heading lg:mr-12 xl:mr-40 2xl:mr-40 xl:ml-4 lg:ml-2 lg:text-left text-center flex">
        <div class="m-auto text-left">
    <a href="https://hapacastudio.com/" target="_blank"><img src="<?php echo get_theme_file_uri(); ?>/resources/img/hapaca.svg" class="fade-in block invert w-auto max-h-[8vh] 2xl:max-h-[120px] sm:-ml-1 2xl:-ml-2 px-4 my-4"></a>
            <p class="fade-in block text-[3.5vmin] md:text-regular lg:text-lg xl:text-xl 2xl:text-2xl font-light lg:py-2 xl:py-3 px-4"><?php echo get_option( 'hapaca_text' );?></p>
            <a class="fade-in block text-[3.8vmin] md:text-regular lg:text-lg xl:text-xl 2xl:text-2xl font-normal px-4 my-2 lg:my-0" href="https://hapacastudio.com/" target="_blank">Find out more <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" class="-rotate-90 w-2 lg:w-5 inline ml-4"></a>
        </div>
    </div>
    <div class="lg:w-auto w-full lg:h-full h-[60vh] overflow-hidden aspect-square">
        <div style="background-image: url('<?php echo $background_image_url; ?>');" class="h-full bg-cover bg-left-top"></div>
    </div>
</section>
