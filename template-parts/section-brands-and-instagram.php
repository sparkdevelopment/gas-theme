<?php
use Phpfastcache\Helper\Psr16Adapter;
try {
    // Check if file /home/secure/ig_credentials.php exists
    if ( file_exists( '/home/gashirewebadmin/secure/ig_credentials.php' ) ) {
        // If it does, include it
        error_log( 'IG credentials file exists');
        include_once '/home/secure/ig_credentials.php';
        $instagram = new \InstagramScraper\Instagram( new \GuzzleHttp\Client() );
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $gas_ig_un, $gas_ig_pw, new Psr16Adapter('Files'));
    } else {
        // If it doesn't, use unauthenticated client
        error_log( 'IG credentials file does not exist');
        $instagram = new \InstagramScraper\Instagram( new \GuzzleHttp\Client() );
    }
    $cache     = new Psr16Adapter( 'Files' );
    $ig_media  = $cache->get( 'ig_media' );
    if ( is_null( $ig_media ) ) {
        error_log( 'IG media cache miss');
        $ig_media = $instagram->getMedias( 'gasproductionhire', 4 );
        $cache->set( 'ig_media', $ig_media, 3600 );
    }
} catch ( \Exception $e ) {
    $ig_media = array();
}

function get_ig_media_image( $media ) {
	$img_url = $media->getImageHighResolutionUrl();
	$cache   = new Psr16Adapter( 'Files' );
	$image   = $cache->get( 'ig_media_image_' . $media->getId() );
	if ( is_null( $image ) ) {
		$image = base64_encode( file_get_contents( $img_url ) );
		$cache->set( 'ig_media_image_' . $media->getId(), $image, 3600 );
	}
	$src = 'data:image/jpeg;base64,' . $image;
	return $src;
}
?>

<section id="section-brands-and-instagram" class="h-screen bg-black flex flex-col justify-between !pt-24">

	<div class="h-1/2 lg:h-1/5 relative">
		<div class="owl-carousel h-full !flex flex-col justify-center item">
			<!-- Carousel items -->
			<?php
			$brands = array( 'Conde_Nast_Logo_White', 'Dazed_Logo_White', 'Mulberry_Logo_White', 'Vogue_Logo_White' );
			foreach ( $brands as $brand ) :
				?>
				<img src="<?php echo get_theme_file_uri(); ?>/resources/img/carousel-logos/<?php echo urlencode( $brand ); ?>.svg" class="item md:h-15vh px-3 2xl:px-12">
			<?php endforeach; ?>
		</div>
	</div>

	<div class="h-1/2 lg:h-2/5 relative">
		<!-- <div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center pt-12 px-4"> -->
		<div class="grid grid-cols-2 grid-rows-2 md:grid-cols-4 md:grid-rows-1 h-full items-center px-0">
			<!-- Instagram posts -->
			<?php foreach ( $ig_media as $media ) : ?>
				<img src="<?php echo get_ig_media_image( $media ); ?>" class="max-h-full w-auto basis-[40%] md:basis-[25%] mx-auto p-[1rem]">
			<?php endforeach; ?>
		</div>
	</div>

	<?php get_template_part( 'template-parts/section', 'footer' ); ?>

</section>
