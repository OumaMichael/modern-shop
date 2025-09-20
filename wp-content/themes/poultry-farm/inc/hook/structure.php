<?php
/**
 * Theme functions related to structure.
 *
 * This file contains structural hook functions.
 *
 * @package poultry_farm
 */

if ( ! function_exists( 'poultry_farm_doctype' ) ) :
	/**
	 * Doctype Declaration.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_doctype() {
	?><!DOCTYPE html> <html <?php language_attributes(); ?>><?php
	}
endif;

add_action( 'poultry_farm_action_doctype', 'poultry_farm_doctype', 10 );


if ( ! function_exists( 'poultry_farm_head' ) ) :
	/**
	 * Header Codes.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_head() {
	?>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php
	}
endif;
add_action( 'poultry_farm_action_head', 'poultry_farm_head', 10 );

if ( ! function_exists( 'poultry_farm_page_start' ) ) :
	/**
	 * Page Start.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_page_start() {
	?>
    <div id="page" class="hfeed site">
    <?php
	}
endif;
add_action( 'poultry_farm_action_before', 'poultry_farm_page_start' );

if ( ! function_exists( 'poultry_farm_page_end' ) ) :
	/**
	 * Page End.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_page_end() {
	?></div><!-- #page --><?php
	}
endif;

add_action( 'poultry_farm_action_after', 'poultry_farm_page_end' );

if ( ! function_exists( 'poultry_farm_content_start' ) ) :
	/**
	 * Content Start.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_content_start() {
	?><?php if(!is_page_template( 'home-page-template.php' )) { echo '<div id="content" class="site-content">'; } ?><?php if(!is_page_template( 'home-page-template.php' )) { echo '<div class="container">'; } ?><div class="inner-wrapper"><?php
	}
endif;
add_action( 'poultry_farm_action_before_content', 'poultry_farm_content_start' );


if ( ! function_exists( 'poultry_farm_content_end' ) ) :
	/**
	 * Content End.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_content_end() {
	?></div><!-- .inner-wrapper --></div><!-- .container --><?php if(!is_page_template( 'home-page-template.php' )) { echo '</div>'; } ?><!-- #content --><?php
	}
endif;
add_action( 'poultry_farm_action_after_content', 'poultry_farm_content_end' );


if ( ! function_exists( 'poultry_farm_header_start' ) ) :
	/**
	 * Header Start.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_header_start() {
		?><header id="masthead" class="site-header" role="banner"><?php
	}
endif;
add_action( 'poultry_farm_action_before_header', 'poultry_farm_header_start' );

if ( ! function_exists( 'poultry_farm_header_end' ) ) :
	/**
	 * Header End.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_header_end() {
	?></div><!-- .container --></header><!-- #masthead --><?php
	}
endif;
add_action( 'poultry_farm_action_after_header', 'poultry_farm_header_end' );



if ( ! function_exists( 'poultry_farm_footer_start' ) ) :
	/**
	 * Footer Start.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_footer_start() {
		$poultry_farm_footer_status = apply_filters( 'poultry_farm_filter_footer_status', true );
		if ( true !== $poultry_farm_footer_status ) {
			return;
		}
	?><footer id="colophon" class="site-footer" role="contentinfo"><div class="container"><?php
	}
endif;
add_action( 'poultry_farm_action_before_footer', 'poultry_farm_footer_start' );


if ( ! function_exists( 'poultry_farm_footer_end' ) ) :
	/**
	 * Footer End.
	 *
	 * @since 1.0.0
	 */
	function poultry_farm_footer_end() {
		$poultry_farm_footer_status = apply_filters( 'poultry_farm_filter_footer_status', true );
		if ( true !== $poultry_farm_footer_status ) {
			return;
		}
		$poultry_farm_enable_cursor_dot_outline = poultry_farm_get_option('poultry_farm_enable_cursor_dot_outline');
		if ($poultry_farm_enable_cursor_dot_outline) { ?>
			<!-- Custom cursor -->
			<div class="cursor-point-outline"></div>
			<div class="cursor-point"></div>
			<!-- .Custom cursor -->
		<?php } ?>
		</div><!-- .container --></footer><!-- #colophon --><?php
	}
endif;
add_action( 'poultry_farm_action_after_footer', 'poultry_farm_footer_end' );
