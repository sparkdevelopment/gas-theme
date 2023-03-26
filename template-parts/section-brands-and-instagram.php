<section id="section-brands-and-instagram" class="h-screen overflow-x-hidden">
    <div class="bg-[#3e3e3e] h-1/2 relative">
        <p class="text-xl sm:text-2xl lg:text-3xl 2xl:text-3xl text-white text-center font-light py-4 md:py-12 sm:py-4 absolute w-full">Just a few of the brands we work with</p>
        <div class="owl-carousel h-full !flex flex-col justify-center pt-20 item">
            <!-- Carousel items -->
            <?php
            $brands = ['Conde_Nast_Logo_White', 'Dazed_Logo_White', 'Made_Logo_White', 'Mulberry_Logo_White', 'Vogue_Logo_White'];
            foreach ($brands as $brand) : ?>
                <img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/<?php echo urlencode($brand); ?>.svg" class="item h-1/4 md:h-15vh px-3 2xl:px-12">
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
    <div class="bg-black h-full md:h-1/2 flex flex-col justify-between">
        <?php if (has_custom_logo()) : ?>
            <div class="w-full">
                <div class="pt-1 sm:pb-4 w-full">
                    <div class="flex justify-between items-center">
                        <div class="sm:ml-1 xl:ml-4">
                            <div class="sm:w-auto max-w-75 xl:max-w-90">
                                <?php the_custom_logo(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="sm:grid sm:grid-cols-12 flex flex-col-reverse justify-between gap-4 text-white text-base sm:text-xl 2xl:text-2xl sm:mx-8 mx-4 font-light leading-6">
            <div class="text-right text-white sm:mb-6 text-sm sm:text-base 2xl:text-2xl mt-2 sm:hidden col-span-1">Designed by <strong>SoreThumbStudio</strong>&reg;</div>
            <div class="flex flex-col col-span-5 md:col-span-3 justify-between">
                <p class="sm:my-6 my-2">
                    <a href="mailto:office@gashireco.uk">office@gashireco.uk</a><br>
                    <a href="tel:+442033972757">+44 (0)20 3397 2757</a>
                </p>
                <address class="sm:my-6 my-2 not-italic">
                    GAS Production Hire<br>
                    Unit G, Sutherland House<br>
                    Sutherland Road<br>
                    Walthamstow<br>
                    London<br>
                    E17 6BU
                </address>
                <p class="sm:my-6 my-2 pt-2 block sm:hidden">&copy; GAS Production Hire Ltd <?php echo date_i18n('Y'); ?></p>
            </div>
            <div class="col-span-6 md:col-span-3">
                <ul class="sm:my-6 my-2">
                    <li><a href="#">Price List & Account Form</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Cookie Policy</a></li>
                </ul>
                <p class="sm:my-6 my-2 pt-8 hidden sm:block">&copy; GAS Production Hire Ltd <?php echo date_i18n('Y'); ?></p>
            </div>
            <div class="md:col-start-8 md:col-end-13 col-span-12 md:col-span-5 flex flex-col justify-end">
                <div class="m-auto w-full mt-0">
                    <h3 class="font-bold mb-4 sm:mt-6 mt-2">Sign up for our newsletter</h3>
                    <form class="grid grid-cols-8 w-full">
                        <div class="col-span-6 lg:col-span-5">
                            <input class="w-full bg-gray-900 text-white placeholder:text-white sm:py-2 sm:px-3 px-1" type="text" placeholder="Enter email address">
                        </div>
                        <div class="col-span-2 lg:col-span-3">
                            <button class="w-full bg-gray-300 text-black sm:py-2 sm:px-3 px-1 font-bold">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="text-right text-white sm:mb-6 text-xs 2xl:text-xl mt-4 hidden sm:block">Designed by <strong>SoreThumbStudio</strong>®</div>
            </div>
        </div>

    </div>

</section>