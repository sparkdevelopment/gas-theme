<section id="section-brands-and-instagram" class="h-screen bg-black flex flex-col justify-between md:!pt-24">

    <div class="h-1/2 lg:h-1/5 relative">
        <div class="owl-carousel h-full !flex flex-col justify-center item">
            <!-- Carousel items -->
            <?php
            $brands = ['Conde_Nast_Logo_White', 'Dazed_Logo_White', 'Mulberry_Logo_White', 'Vogue_Logo_White'];
            foreach ($brands as $brand) : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/<?php echo urlencode($brand); ?>.svg" class="item md:h-15vh px-3 2xl:px-12">
            <?php endforeach; ?>
        </div>
    </div>

    <div class="h-1/2 lg:h-2/5 relative">
        <!-- <div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center pt-12 px-4"> -->
        <div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center px-0">
            <!-- Instagram posts -->
            <?php for ($i = 1; $i <= 4; $i++) : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/ig-posts/post<?php echo $i; ?>.jpeg" class="max-h-full w-auto basis-[40%] md:basis-[25%] mx-auto p-[1rem]">
            <?php endfor; ?>
        </div>
    </div>

    <?php get_template_part('template-parts/section', 'footer'); ?>

</section>