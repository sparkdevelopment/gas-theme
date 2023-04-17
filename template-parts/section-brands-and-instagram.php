<section id="section-brands-and-instagram" class="h-screen overflow-x-hidden">
    <div class="bg-[#3e3e3e] h-1/2 relative">
        <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-3xl text-white text-center font-light py-4 md:py-12 sm:py-4 absolute w-full">Just a few of the brands we work with</p>
        <div class="owl-carousel h-full !flex flex-col justify-center pt-20 item">
            <!-- Carousel items -->
            <?php
            $brands = ['Conde_Nast_Logo_White', 'Dazed_Logo_White', 'Made_Logo_White', 'Mulberry_Logo_White', 'Vogue_Logo_White'];
            foreach ($brands as $brand) : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/<?php echo urlencode($brand); ?>.svg" class="item md:h-15vh px-3 2xl:px-12">
            <?php endforeach; ?>
        </div>
    </div>
    <div class="bg-[#2f2f2f] h-1/2 relative">
        <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-3xl text-white text-center font-light py-4 md:py-12 sm:py-4 absolute w-full">See what we're up to on Instagram</p>
        <!-- <div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center pt-12 px-4"> -->
        <div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center pt-[3rem] px-[4vw]">
            <!-- Instagram posts -->
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post<?php echo $i; ?>.jpeg" class="max-h-full w-auto basis-[40%] md:basis-[25%] mx-auto p-[4vw]">
            <?php endfor; ?>
        </div>
    </div>

    <?php get_template_part('template-parts/section', 'footer'); ?>

</section>