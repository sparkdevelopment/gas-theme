<?php
use Phpfastcache\Helper\Psr16Adapter;

$ig_caching = true;

try {
    // Check if file /home/secure/ig_credentials.php exists
    $credentials_file = '/home/gashirewebadmin/secure/ig_credentials.php';
    // $credentials_file = get_stylesheet_directory(  ) . '/ig_credentials.php';
    if ( file_exists( $credentials_file ) ) {
        // If it does, include it
        error_log( 'IG credentials file exists');
        include_once $credentials_file;
        $instagram = new \InstagramScraper\Instagram( new \GuzzleHttp\Client() );
        $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), GAS_IG_UN, GAS_IG_PW, new Psr16Adapter('Files'));
        $instagram->login();
        $instagram->saveSession();
    } else {
        // If it doesn't, use unauthenticated client
        error_log( 'IG credentials file does not exist');
        $instagram = new \InstagramScraper\Instagram( new \GuzzleHttp\Client() );
    }
    $cache     = new Psr16Adapter( 'Files' );
    $ig_media  = $ig_caching ? $cache->get( 'ig_media' ) : null;
    if ( is_null( $ig_media ) ) {
        error_log( 'IG media cache miss');
        try {
            $ig_media = $instagram->getMedias( 'gasproductionhire', 4 );
            $cache->set( 'ig_media', $ig_media, 3600 );
        } catch ( \Exception $e ) {
            error_log( $e->getMessage() );
            $ig_media = array();
        }
    }
} catch ( \Exception $e ) {
    $ig_media = array();
}

function get_ig_media_image( $media, $cache = true ) {
	$img_url = $media->getImageHighResolutionUrl();
	$cache   = new Psr16Adapter( 'Files' );
	$image   = $cache ? $cache->get( 'ig_media_image_' . $media->getId() ) : null;
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
				<img src="<?php echo get_ig_media_image( $media, $ig_caching ); ?>" class="max-h-full w-auto basis-[40%] md:basis-[25%] mx-auto p-[1rem]">
			<?php endforeach; ?>
		</div>
	</div>

	<?php get_template_part( 'template-parts/section', 'footer' ); ?>

</section>
