<?php $full_height = $args['full-height'] ?? true; ?>

<section id="section-category" class="<?php echo $full_height ? 'h-screen ' : ''; ?>!overflow-x-hidden bg-black flex flex-col justify-center">
    <div class="relative flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-full pb-8 lg:pb-12">
        <?php
        $categories = array(
            array(
                'title' => 'Lighting',
                'class' => 'lighting',
                'slug'  => 'lighting',
            ),
            array(
                'title' => 'Camera & Digital',
                'class' => 'camera_digital',
                'slug'  => 'camera',
            ),
            array(
                'title' => 'Production',
                'class' => 'production',
                'slug'  => 'production',
            ),
        );
        ?>

        <?php foreach ($categories as $category) : ?>
            <?php $category_link = get_term_link($category['slug'], 'product_category'); ?>
            <?php if (is_wp_error($category_link)) $category_link = '#'; ?>
            <?php if(is_front_page()): ?>
            <div class="lg:w-[33.33333vw] w-full lg:h-[33.33333vw] h-1/2">
            <?php else: ?>
            <div class="lg:w-[25vw] w-full lg:h-[25vw] h-1/2">
            <?php endif; ?>
                <a href="<?php echo esc_attr($category_link); ?>" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div class="card-zoom min-h-[150px]">
                        <div class="card-zoom-image bg-<?php echo $category['class']; ?>"></div>
                        <h1 class="card-zoom-text"><?php echo $category['title']; ?></h1>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <?php if(is_front_page()): ?>
    <!-- <div class="text-center mr-8 text-white text-3xl hidden lg:block">Bringing order to the chaos of shoots</div> -->
    <img src="<?php echo get_theme_file_uri(); ?>/resources/img/arrow-white.svg" alt="Arrow pointing down" class="hidden lg:block absolute bottom-0 w-full h-[7vh] mx-auto mt-[2vh] mb-[1vh] bouncing-item ![animation-delay:3.5s]">
    <?php endif; ?>
</section>