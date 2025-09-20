<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package poultry_farm
 */

	/**
	 * Hook - poultry_farm_action_after_content.
	 *
	 * @hooked poultry_farm_content_end - 10
	 */
	do_action( 'poultry_farm_action_after_content' );
?>

	<?php
	/**
	 * Hook - poultry_farm_action_before_footer.
	 *
	 * @hooked poultry_farm_add_footer_bottom_widget_area - 5
	 * @hooked poultry_farm_footer_start - 10
	 */
	do_action( 'poultry_farm_action_before_footer' );
	?>
    <?php
	  /**
	   * Hook - poultry_farm_action_footer.
	   *
	   * @hooked poultry_farm_footer_copyright - 10
	   */
	  do_action( 'poultry_farm_action_footer' );
	?>
	<?php
	/**
	 * Hook - poultry_farm_action_after_footer.
	 *
	 * @hooked poultry_farm_footer_end - 10
	 */
	do_action( 'poultry_farm_action_after_footer' );
	?>

<?php
	/**
	 * Hook - poultry_farm_action_after.
	 *
	 * @hooked poultry_farm_page_end - 10
	 * @hooked poultry_farm_footer_goto_top - 20
	 */
	do_action( 'poultry_farm_action_after' );
?>

<?php wp_footer(); ?>
</body>
</html>
