<?php
/**
 * Helper functions related to customizer and options.
 *
 * @package poultry_farm
 */

if ( ! function_exists( 'poultry_farm_get_global_layout_options' ) ) :

	/**
	 * Returns global layout options.
	 *
	 * @since 1.0.0 
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_global_layout_options() {

		$choices = array(
			'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'poultry-farm' ),
			'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'poultry-farm' ),
			'three-columns' => esc_html__( 'Three Columns', 'poultry-farm' ),
			'four-columns' => esc_html__( 'Four Columns', 'poultry-farm' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'poultry-farm' ),
		);
		$output = apply_filters( 'poultry_farm_filter_layout_options', $choices );
		return $output;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_archive_layout_options' ) ) :

	/**
	 * Returns archive layout options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_archive_layout_options() {

		$choices = array(
			'full'    => esc_html__( 'Full Post', 'poultry-farm' ),
			'excerpt' => esc_html__( 'Post Excerpt', 'poultry-farm' ),
		);
		$output = apply_filters( 'poultry_farm_filter_archive_layout_options', $choices );
		if ( ! empty( $output ) ) {
			ksort( $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_image_sizes_options' ) ) :

	/**
	 * Returns image sizes options.
	 *
	 * @since 1.0.0
	 *
	 * @param bool  $add_disable True for adding No Image option.
	 * @param array $allowed Allowed image size options.
	 * @return array Image size options.
	 */
	function poultry_farm_get_image_sizes_options( $add_disable = true, $allowed = array(), $show_dimension = true ) {

		global $_wp_additional_image_sizes;
		$get_intermediate_image_sizes = get_intermediate_image_sizes();
		$choices = array();
		if ( true === $add_disable ) {
			$choices['disable'] = esc_html__( 'No Image', 'poultry-farm' );
		}
		$choices['thumbnail'] = esc_html__( 'Thumbnail', 'poultry-farm' );
		$choices['medium']    = esc_html__( 'Medium', 'poultry-farm' );
		$choices['large']     = esc_html__( 'Large', 'poultry-farm' );
		$choices['full']      = esc_html__( 'Full (original)', 'poultry-farm' );

		if ( true === $show_dimension ) {
			foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
				$choices[ $_size ] = $choices[ $_size ] . ' (' . get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
			}
		}

		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {
			foreach ( $_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key;
				if ( true === $show_dimension ){
					$choices[ $key ] .= ' ('. $size['width'] . 'x' . $size['height'] . ')';
				}
			}
		}

		if ( ! empty( $allowed ) ) {
			foreach ( $choices as $key => $value ) {
				if ( ! in_array( $key, $allowed ) ) {
					unset( $choices[ $key ] );
				}
			}
		}

		return $choices;

	}

endif;


if ( ! function_exists( 'poultry_farm_get_image_alignment_options' ) ) :

	/**
	 * Returns image options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_image_alignment_options() {

		$choices = array(
			'none'   => _x( 'None', 'alignment', 'poultry-farm' ),
			'left'   => _x( 'Left', 'alignment', 'poultry-farm' ),
			'center' => _x( 'Center', 'alignment', 'poultry-farm' ),
			'right'  => _x( 'Right', 'alignment', 'poultry-farm' ),
		);
		return $choices;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_featured_slider_transition_effects' ) ) :

	/**
	 * Returns the featured slider transition effects.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_featured_slider_transition_effects() {

		$choices = array(
			'fade'       => _x( 'fade', 'transition effect', 'poultry-farm' ),
			'fadeout'    => _x( 'fadeout', 'transition effect', 'poultry-farm' ),
			'none'       => _x( 'none', 'transition effect', 'poultry-farm' ),
			'scrollHorz' => _x( 'scrollHorz', 'transition effect', 'poultry-farm' ),
		);
		$output = apply_filters( 'poultry_farm_filter_featured_slider_transition_effects', $choices );

		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_featured_slider_content_options' ) ) :

	/**
	 * Returns the featured slider content options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_featured_slider_content_options() {

		$choices = array(
			'home-page' => esc_html__( 'Static Front Page Only', 'poultry-farm' ),
			'disabled'  => esc_html__( 'Disabled', 'poultry-farm' ),
		);
		$output = apply_filters( 'poultry_farm_filter_featured_slider_content_options', $choices );
		if ( ! empty( $output ) ) {
			ksort( $output );
		}
		return $output;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_featured_slider_type' ) ) :

	/**
	 * Returns the featured slider type.
	 *
	 * @since 1.0.0
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_featured_slider_type() {

		$choices = array(
			'featured-page' => __( 'Featured Pages', 'poultry-farm' ),
		);

		$output = apply_filters( 'poultry_farm_filter_featured_slider_type', $choices );

		if ( ! empty( $output ) ) {
			ksort( $output );
		}

		return $output;

	}

endif;

if ( ! function_exists( 'poultry_farm_get_numbers_dropdown_options' ) ) :

	/**
	 * Returns numbers dropdown options.
	 *
	 * @since 1.0.0
	 *
	 * @param int $min Min.
	 * @param int $max Max.
	 * @param string $prefix Prefix.
	 * @param string $suffix Suffix.
	 *
	 * @return array Options array.
	 */
	function poultry_farm_get_numbers_dropdown_options( $min = 1, $max = 4, $prefix = '', $suffix = '' ) {

		$output = array();

		if ( $min <= $max ) {
			for ( $i = $min; $i <= $max; $i++ ) {
				$string = $prefix . $i . $suffix;
				$output[ $i ] = $string;
			}
		}

		return $output;

	}

endif;