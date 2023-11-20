<?php
/**
 * Callback function for the options page.
 */

/**
 * Callback function for the options page.
 * This function is responsible for rendering the options page content and handling form submissions.
 * Only users with the 'manage_options' capability can access this page.
 * If the settings are updated, a success message is displayed.
 * The options page consists of multiple tabs, each containing different settings sections.
 * The active tab and corresponding settings section are displayed based on user selection.
 * The form is submitted to 'options.php' for processing.
 * jQuery is used to handle tab navigation.
 */
function gas_options_page_callback() {
	global $gas_registered_sections;

	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	if ( isset( $_GET['settings-updated'] ) ) {
		add_settings_error( 'gas_options', 'gas_options', __( 'Settings Saved', 'gas' ), 'updated' );
	}

	settings_errors( 'gas_options' );

	// Check if global sections are set and is an array
	if ( ! isset( $gas_registered_sections ) || ! is_array( $gas_registered_sections ) ) {
		echo 'No settings sections have been defined.';
		return;
	}
	?>
	<div class="wrap">
		<h1><?php echo get_admin_page_title(); ?></h1>
		<form method="post" action="options.php" class="validate">
			<?php settings_fields( 'gas_options' ); ?>

			<h2 class="nav-tab-wrapper">
				<?php foreach ( $gas_registered_sections as $section_id => $section_label ) : ?>
					<a href="#<?php echo esc_attr( $section_id ); ?>" class="nav-tab"><?php echo esc_html( $section_label ); ?></a>
				<?php endforeach; ?>
			</h2>

			<?php foreach ( $gas_registered_sections as $section_id => $section_label ) : ?>
				<div id="<?php echo esc_attr( $section_id ); ?>" class="tab-content">
					<?php do_settings_sections( "gas_options_$section_id" ); ?>
				</div>
			<?php endforeach; ?>

			<?php submit_button(); ?>
		</form>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('.nav-tab').first().addClass('nav-tab-active');
			$('.tab-content').first().addClass('active');

			$('.nav-tab').click(function(e) {
				e.preventDefault();
				$('.nav-tab').removeClass('nav-tab-active');
				$('.tab-content').removeClass('active');

				$(this).addClass('nav-tab-active');
				$($(this).attr('href')).addClass('active');
			});
		});
	</script>
	<style>
		.nav-tab-wrapper { margin-bottom: 20px; }
		.nav-tab { cursor: pointer; }
		.tab-content { display: none; }
		.tab-content.active { display: block; }
	</style>
	<?php
}
