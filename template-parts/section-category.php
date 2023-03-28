<section id="section-category" class="h-screen !overflow-x-hidden bg-black flex flex-col justify-center">
    <div class="flex flex-col lg:flex-row justify-center items-center lg:h-2/3 h-full self-center w-full pt-24 lg:pt-0">
        <?php
        $categories = array(
            array(
                'title' => 'Lighting',
                'class' => 'lighting',
            ),
            array(
                'title' => 'Camera & Digital',
                'class' => 'camera_digital',
            ),
            array(
                'title' => 'Production',
                'class' => 'production',
            ),
        );
        ?>

        <?php foreach ($categories as $category) : ?>
            <div class="lg:w-[33.33333vw] w-full lg:h-[33.33333vw] h-1/2 m-1">
                <a href="#" class="h-full mx-auto 2xl:mt-0 2xl:translate-y-0 flex flex-col justify-center">
                    <div class="card-zoom">
                        <div class="card-zoom-image bg-<?php echo $category['class']; ?>"></div>
                        <h1 class="card-zoom-text"><?php echo $category['title']; ?></h1>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</section>