<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poultry_farm
 */

?>
<?php
	/**
	 * Hook - poultry_farm_action_doctype.
	 *
	 * @hooked poultry_farm_doctype -  10
	 */
	do_action( 'poultry_farm_action_doctype' );
?>
<head>
	<?php
	/**
	 * Hook - poultry_farm_action_head.
	 *
	 * @hooked poultry_farm_head -  10
	 */
	do_action( 'poultry_farm_action_head' );
	?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php do_action( 'wp_body_open' ); ?>

	<?php 
	$poultry_farm_show_preloader = poultry_farm_get_option( 'poultry_farm_show_preloader_setting' );
        if ( true === $poultry_farm_show_preloader ) : ?>
			<div id="preloader" class="loader-head">
				<div class="preloader">
				    <div class="spinner"></div>
				    <div class="spinner-2"></div>
				</div>
			</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook - poultry_farm_action_before.
	 *
	 * @hooked poultry_farm_page_start - 10
	 * @hooked poultry_farm_skip_to_content - 15
	 */
	do_action( 'poultry_farm_action_before' );
	?>

    <?php
	  /**
	   * Hook - poultry_farm_action_before_header.
	   *
	   * @hooked poultry_farm_header_start - 10
	   */
	  do_action( 'poultry_farm_action_before_header' );
	?>
		<?php
		/**
		 * Hook - poultry_farm_action_header.
		 *
		 * @hooked poultry_farm_site_branding - 10
		 */
		do_action( 'poultry_farm_action_header' );
		?>
    <?php
	  /**
	   * Hook - poultry_farm_action_after_header.
	   *
	   * @hooked poultry_farm_header_end - 10
	   */
	  do_action( 'poultry_farm_action_after_header' );
	?>

	<?php
	/**
	 * Hook - poultry_farm_action_before_content.
	 *
	 * @hooked poultry_farm_content_start - 10
	 */
	do_action( 'poultry_farm_action_before_content' );
	?>

	<!-- <?php
	  /**
	   * Hook - poultry_farm_action_content.
	   */
	  do_action( 'poultry_farm_action_content' );
	?> -->
