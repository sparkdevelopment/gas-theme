<?php
/**
 * Registers the info contact section.
 *
 * @since 1.0.0
 * @return void
 * @package Gas
 */

$gas_price_list_link    = esc_attr( get_pdf_or_page_link( 'gas_price_list_link' ) );
$gas_account_form_link  = esc_attr( get_pdf_or_page_link( 'gas_account_form_link' ) );
$gas_tnc_link           = esc_attr( get_pdf_or_page_link( 'gas_tnc_link' ) );
$gas_info_contact_text  = esc_html( get_option( 'gas_info_contact_text' ) );
$gas_info_contact_tel   = esc_html( get_option( 'gas_info_contact_tel' ) );
$gas_info_contact_email = esc_html( get_option( 'gas_info_contact_email' ) );

?>
<section id="plain-content" class="bg-black text-white h-screen pt-28 md:pt-32 pb-4 md:pb-8 px-6 md:px-12 mx-auto">
	<div class="grid grid-cols-5 h-full">
		<div class="col-span-5 md:col-span-2 flex flex-col justify-center">
			<div>
				<h1 class="text-2xl sm:text-3xl md:text-4xl my-4 font-bold"><?php the_title(); ?></h1>
				<div class="text-md md:text-lg md:text-xl md:mr-24"><?php echo esc_html( $gas_info_contact_text ); ?></div>
				<div class="text-md sm:text-xl md:text-2xl flex md:flex-col gap-8 md:gap-2 my-4 md:my-0">
					<a href="tel:<?php echo esc_attr( $gas_info_contact_tel ); ?>" class="block font-light md:mt-8">T: <?php echo esc_html( $gas_info_contact_tel ); ?></a>
					<a href="mailto:<?php echo esc_attr( $gas_info_contact_email ); ?>?subject=Enquiry from website" class="block font-light md:mb-8">E: <?php echo esc_html( $gas_info_contact_email ); ?></a>
				</div>
				<div class="my-8 hidden md:block">
					<a target="_blank" href="<?php echo esc_attr( $gas_price_list_link ); ?>" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">Price List</a>
					<a target="_blank" href="<?php echo esc_attr( $gas_account_form_link ); ?>" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">Account Form</a>
					<a target="_blank" href="<?php echo esc_attr( $gas_tnc_link ); ?>" class="bg-white text-black py-2 w-48 text-center block rounded-3xl text-md font-light my-8">T&Cs</a>
				</div>
				<div class="text-lg space-y-4"><?php the_content(); ?></div>
			</div>
		</div>
		<div class="col-span-5 md:col-span-3 grayscale" id="contact-map">
			<iframe
				src="<?php echo esc_attr( get_option( 'gas_info_contact_map_url' ) ); ?>"
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
			<a target="_blank" href="<?php echo esc_attr( $gas_price_list_link ); ?>" class="bg-white text-black py-2 w-auto sm:w-1/3 text-center block rounded-3xl text-md font-light h-fit px-4">Price List</a>
			<a target="_blank" href="<?php echo esc_attr( $gas_account_form_link ); ?>" class="bg-white text-black py-2 w-auto sm:w-1/3 text-center block rounded-3xl text-md font-light h-fit px-4">Account Form</a>
			<a target="_blank" href="<?php echo esc_attr( $gas_tnc_link ); ?>" class="bg-white text-black py-2 w-auto sm:w-1/3 text-center block rounded-3xl text-md font-light h-fit px-4">T&Cs</a>
		</div>
	</div>
</section>
