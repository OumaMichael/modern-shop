<?php
/**
 * Default theme options.
 *
 * @package poultry_farm
 */

if ( ! function_exists( 'poultry_farm_get_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function poultry_farm_get_default_theme_options() {

		$defaults = array();

		//General Option
        $defaults['poultry_farm_show_scroll_to_top']          = true;
        $defaults['poultry_farm_show_preloader_setting']      = false;
        $defaults['poultry_farm_show_data_sticky_setting']    = false;
		$defaults['poultry_farm_enable_cursor_dot_outline'] = false;

		// Typography
		$defaults['poultry_farm_body_font_family']         = '';
		$defaults['poultry_farm_h1_font_family']          	= '';
		$defaults['poultry_farm_h1_font_size']         	= '';
		$defaults['poultry_farm_h2_font_family']          	= '';
		$defaults['poultry_farm_h2_font_size']         	= '';
		$defaults['poultry_farm_h3_font_family']          	= '';
		$defaults['poultry_farm_h3_font_size']         	= '';
		$defaults['poultry_farm_h4_font_family']          	= '';
		$defaults['poultry_farm_h4_font_size']         	= '';
		$defaults['poultry_farm_h5_font_family']          	= '';
		$defaults['poultry_farm_h5_font_size']         	= '';
		$defaults['poultry_farm_h6_font_family']          	= '';
		$defaults['poultry_farm_h6_font_size']         	= '';

		// Site title And tagline Option

		$defaults['poultry_farm_site_title_font_size']         = '';
		$defaults['poultry_farm_site_tagline_font_size']         = '';
		$defaults['poultry_farm_site_title_color'] = '#92232A';

		// Global Color
		$defaults['poultry_farm_first_color']          = '#92232A';

        //Post Option
        $defaults['poultry_farm_show_post_date_setting']         		 = true;
        $defaults['poultry_farm_show_post_heading_setting']      		 = true;
        $defaults['poultry_farm_show_post_content_setting']       		 = true;
        $defaults['poultry_farm_show_post_admin_setting']         		 = true;
        $defaults['poultry_farm_show_post_categories_setting']    		 = true;
        $defaults['poultry_farm_show_post_comments_setting']    	 	 = true;
        $defaults['poultry_farm_show_post_featured_image_setting']   	 = true;
        $defaults['poultry_farm_show_post_tags_setting']    			 = true;
		$defaults['poultry_farm_enable_post_navigation'] 				= true;

		// Related Post
		$defaults['poultry_farm_enable_related_post'] 					= true;
		$defaults['poultry_farm_enable_related_post_image'] 					= true;

		// Header.
		$defaults['poultry_farm_show_title']            = true;
		$defaults['poultry_farm_show_tagline']          = false;
	
		// Layout.
		$defaults['poultry_farm_global_layout']           = 'right-sidebar';
		$defaults['poultry_farm_archive_layout']          = 'excerpt';
		$defaults['poultry_farm_archive_image']           = 'large';
		$defaults['poultry_farm_archive_image_alignment'] = 'center';
		$defaults['poultry_farm_single_image']            = 'large';

		// Home Page.
		$defaults['poultry_farm_home_content_status'] = true;
		
		// 404 page
		$defaults['poultry_farm_404_page_title']  = esc_html__( 'Oops! That page can&rsquo;t be found.', 'poultry-farm' );
		$defaults['poultry_farm_404_page_text']  = esc_html__( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'poultry-farm' );

		// No Result
		$defaults['poultry_farm_no_result_title']  = esc_html__( 'Nothing Found', 'poultry-farm' );
		$defaults['poultry_farm_no_result_text']  = esc_html__( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'poultry-farm' );

		// Footer.
		$defaults['poultry_farm_copyright_text']        = esc_html__( 'Copyright &copy; All rights reserved.', 'poultry-farm' );
		$defaults['poultry_farm_copyright_background_color'] = '#92232A';
		$defaults['poultry_farm_copyright_text_color'] = '#fff';
		
		// Pass through filter.
		$defaults = apply_filters( 'poultry_farm_filter_default_theme_options', $defaults );
		return $defaults;
	}

endif;
