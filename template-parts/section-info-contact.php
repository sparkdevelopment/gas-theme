    <section id="plain-content" class="bg-black text-white h-screen pt-32 pb-8 px-12 mx-auto">
    <div class="grid grid-cols-5 h-full">
        <div class="col-span-2 flex flex-col justify-center">
            <div>
                <h1 class="text-5xl my-4 font-bold"><?php the_title(); ?></h1>
                <div class="text-2xl">
                    <a href="tel:020 3397 2757" class="block font-light mt-8">T: 020 3397 2757</a>
                    <a href="mailto:office@gashire.co.uk?subject=Enquiry from website" class="block font-light mb-8">E: office@gashire.co.uk</a>
                </div>
                <div class="my-8">
                    <a target="_blank" href="<?php echo get_theme_file_uri(); ?>/resources/misc/GAS Price List_MAY11_v1.pdf" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">Price List</a>
                    <a target="_blank" href="<?php echo get_theme_file_uri(); ?>/resources/misc/GAS-ACCOUNT APPLICATION form.pdf" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">Account Form</a>
                    <a target="_blank" href="<?php echo get_theme_file_uri(); ?>/resources/misc/GAS t&cs.pdf" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">T&Cs</a>
                </div>
                <div class="text-lg space-y-4"><?php the_content(); ?></div>
            </div>
        </div>
        <div class="col-span-3" id="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.1136966028457!2d-0.06400072275254409!3d51.584479571831!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761dd04279fd17%3A0x20afb4de9d3fbbee!2sGAS%20Production%20Hire!5e0!3m2!1sen!2suk!4v1683020235505!5m2!1sen!2suk"
                width="800"
                height="600"
                style="border:0;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="mx-auto w-full h-full"
            >
            </iframe>
        </div>
    </div>
</section>
