<?php

  $poultry_farm_color_palette_css = '';

	// Global Color

	$poultry_farm_first_color = poultry_farm_get_option('poultry_farm_first_color', '#92232A' );

	if($poultry_farm_first_color != false){
		$poultry_farm_color_palette_css .=':root {';
			$poultry_farm_color_palette_css .='--primary-color: '.esc_attr($poultry_farm_first_color).'!important;';
		$poultry_farm_color_palette_css .='}';
	}

	// Copyright Text Color
	$poultry_farm_copyright_text_color = poultry_farm_get_option('poultry_farm_copyright_text_color');
	$poultry_farm_color_palette_css .='#colophon a , #colophon{';
	$poultry_farm_color_palette_css .='color: '.esc_attr($poultry_farm_copyright_text_color);
	$poultry_farm_color_palette_css .='}';

	// Copyright Background Color
	$poultry_farm_copyright_background_color = poultry_farm_get_option('poultry_farm_copyright_background_color');
	$poultry_farm_color_palette_css .='#colophon{';
	$poultry_farm_color_palette_css .='background: '.esc_attr($poultry_farm_copyright_background_color) ;
	$poultry_farm_color_palette_css .='}';


	// Site title And tagline Option
	$poultry_farm_site_title_font_size = poultry_farm_get_option('poultry_farm_site_title_font_size');
	$poultry_farm_site_title_color = poultry_farm_get_option('poultry_farm_site_title_color');
	$poultry_farm_color_palette_css .='.site-title>a , .site-title {';
	$poultry_farm_color_palette_css .='font-size: '.esc_attr($poultry_farm_site_title_font_size).'px;';
	$poultry_farm_color_palette_css .='color: '.esc_attr($poultry_farm_site_title_color).';';
	$poultry_farm_color_palette_css .='}';
	
	$poultry_farm_site_tagline_font_size = poultry_farm_get_option('poultry_farm_site_tagline_font_size');
	if($poultry_farm_site_tagline_font_size != false){
		$poultry_farm_color_palette_css .='.site-description {';
			$poultry_farm_color_palette_css .='font-size: '.esc_attr($poultry_farm_site_tagline_font_size).'px;';
		$poultry_farm_color_palette_css .='}';
	}