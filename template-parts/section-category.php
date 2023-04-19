<?php $full_height = $args['full-height'] ?? true; ?>

<section id="section-category" class="<?php echo $full_height ? 'h-screen ' : ''; ?>!overflow-x-hidden bg-black flex flex-col justify-center">
    <div class="flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-full pt-24 lg:pt-0">
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
                'slug'  => 'camera-digital',
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
            <div class="lg:w-[33.33333vw] w-full lg:h-[33.33333vw] h-1/2">
                <a href="<?php echo esc_attr($category_link); ?>" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div class="card-zoom">
                        <div class="card-zoom-image bg-<?php echo $category['class']; ?>"></div>
                        <h1 class="card-zoom-text"><?php echo $category['title']; ?></h1>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>