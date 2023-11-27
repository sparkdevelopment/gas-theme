<?php
/**
 * The template for displaying search results pages.
 * Template Name: Search Page
 *
 * @package Gas
 */

?>

<?php get_header( null, array( 'hide_nav' => true ) ); ?>

<?php get_template_part( 'template-parts/section', 'search' ); ?>
<?php get_template_part( 'template-parts/section', 'brands-and-instagram' ); ?>

<?php
get_footer();
