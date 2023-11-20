<section id="plain-content" class="bg-black text-white h-screen pt-28 md:pt-32 pb-4 md:pb-8 px-6 md:px-12 mx-auto">
	<div class="grid grid-cols-5 h-full">
		<div class="col-span-5 md:col-span-2 flex flex-col justify-center">
			<div>
				<h1 class="text-2xl sm:text-3xl md:text-4xl my-4 font-bold"><?php the_title(); ?></h1>
				<div class="text-md md:text-lg md:text-xl md:mr-24">
					We are located in the High Cross centre in South Tottenham, across the road from our studios and within walking distance to both Tottenham Hale and Seven Sisters stations for the Victoria line, Overground and National Rail.
				</div>
				<div class="text-md sm:text-xl md:text-2xl flex md:flex-col gap-8 md:gap-2 my-4 md:my-0">
					<a href="tel:020 3397 2757" class="block font-light md:mt-8">T: 020 3397 2757</a>
					<a href="mailto:office@gashire.co.uk?subject=Enquiry from website" class="block font-light md:mb-8">E: office@gashire.co.uk</a>
				</div>
				<div class="my-8 hidden md:block">
					<a target="_blank" href="<?php echo get_pdf_or_page_link( 'gas_price_list_link' ); ?>" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">Price List</a>
					<a target="_blank" href="<?php echo get_pdf_or_page_link( 'gas_account_form_link' ); ?>" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">Account Form</a>
					<a target="_blank" href="<?php echo get_pdf_or_page_link( 'gas_tnc_link' ); ?>" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">T&Cs</a>
				</div>
				<div class="text-lg space-y-4"><?php the_content(); ?></div>
			</div>
		</div>
		<div class="col-span-5 md:col-span-3 grayscale" id="contact-map">
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
		<div class="col-span-5 my-8 md:hidden flex flex-row gap-2 justify-between">
			<a target="_blank" href="<?php echo get_pdf_or_page_link( 'gas_price_list_link' ); ?>" class="bg-white text-black py-2 w-auto sm:w-1/3 text-center block rounded-3xl text-md font-light h-fit px-4">Price List</a>
			<a target="_blank" href="<?php echo get_pdf_or_page_link( 'gas_account_form_link' ); ?>" class="bg-white text-black py-2 w-auto sm:w-1/3 text-center block rounded-3xl text-md font-light h-fit px-4">Account Form</a>
			<a target="_blank" href="<?php echo get_pdf_or_page_link( 'gas_tnc_link' ); ?>" class="bg-white text-black py-2 w-auto sm:w-1/3 text-center block rounded-3xl text-md font-light h-fit px-4">T&Cs</a>
		</div>
	</div>
</section>
