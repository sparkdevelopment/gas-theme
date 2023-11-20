<?php
/**
 * Contains helper functions for the gas theme.
 *
 * @since 1.0.0
 *
 * @package gas
 */

/**
 * Retrieves the URL of a PDF attachment or the permalink of a page based on the provided option name.
 *
 * @param string $option_name The name of the option containing the PDF and page IDs.
 * @return string The URL of the PDF attachment or the permalink of the page. Returns an empty string if neither is found.
 */
function get_pdf_or_page_link( $option_name ) {
	$option  = get_option( $option_name );
	$pdf_id  = $option['pdf'] ?? 0;
	$page_id = $option['page'] ?? 0;

	if ( $pdf_id ) {
		return wp_get_attachment_url( $pdf_id );
	} elseif ( $page_id ) {
		return get_permalink( $page_id );
	} else {
		return '';
	}
}
