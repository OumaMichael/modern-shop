<?php
/**
 * Customizer partials.
 *
 * @package poultry_farm
 */

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poultry_farm_customize_partial_blogname() {

	bloginfo( 'name' );

}

/**
 * Render the site title for the selective refresh partial.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poultry_farm_customize_partial_blogdescription() {

	bloginfo( 'description' );

}

/**
 * Partial for copyright text.
 *
 * @since 1.0.0
 *
 * @return void
 */
function poultry_farm_render_partial_copyright_text() {

	$poultry_farm_copyright_text = poultry_farm_get_option( 'poultry_farm_copyright_text' );
	$poultry_farm_copyright_text = apply_filters( 'poultry_farm_filter_copyright_text', $poultry_farm_copyright_text );
	if ( ! empty( $poultry_farm_copyright_text ) ) {
		$poultry_farm_copyright_text = wp_kses_data( $poultry_farm_copyright_text );
	}
	echo $poultry_farm_copyright_text;

}
