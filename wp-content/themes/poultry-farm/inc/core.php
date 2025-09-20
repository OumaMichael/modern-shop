<?php
/**
 * Core functions.
 *
 * @package poultry_farm
 */

if ( ! function_exists( 'poultry_farm_get_option' ) ) :

	/**
	 * Get theme option
	 *
	 * @since 1.0.0
	 *
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function poultry_farm_get_option( $key ) {

		$poultry_farm_default_options = poultry_farm_get_default_theme_options();

		if ( empty( $key ) ) {
			return;
		}

		$poultry_farm_theme_options = (array)get_theme_mod( 'theme_options' );
		$poultry_farm_theme_options = wp_parse_args( $poultry_farm_theme_options, $poultry_farm_default_options );

		$poultry_farm_value = null;

		if ( isset( $poultry_farm_theme_options[ $key ] ) ) {
			$poultry_farm_value = $poultry_farm_theme_options[ $key ];
		}

		return $poultry_farm_value;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_options' ) ) :

	/**
	 * Get all theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Theme options.
	 */
  function poultry_farm_get_options() {

    $poultry_farm_default_options = poultry_farm_get_default_theme_options();
    $poultry_farm_theme_options = (array)get_theme_mod( 'theme_options' );
    $poultry_farm_theme_options = wp_parse_args( $poultry_farm_theme_options, $poultry_farm_default_options );
    return $poultry_farm_theme_options;

  }

endif;

if( ! function_exists( 'poultry_farm_exclude_category_in_blog_page' ) ) :

  /**
   * Exclude category in blog page.
   *
   * @since 1.0
   */
  function poultry_farm_exclude_category_in_blog_page( $query ) {

    if( $query->is_home && $query->is_main_query()   ) {
      $poultry_farm_exclude_categories = poultry_farm_get_option( 'exclude_categories' );
      if ( ! empty( $poultry_farm_exclude_categories ) ) {
        $cats = explode( ',', $poultry_farm_exclude_categories );
        $cats = array_filter( $cats, 'is_numeric' );
        $poultry_farm_string_exclude = '';
        if ( ! empty( $cats ) ) {
          $poultry_farm_string_exclude = '-' . implode( ',-', $cats);
          $query->set( 'cat', $poultry_farm_string_exclude );
        }
      }
    }
    return $query;
  }

endif;

add_filter( 'pre_get_posts', 'poultry_farm_exclude_category_in_blog_page' );
