<?php
/**
 * Theme Customizer Functions
 *
 * @package Bulmapress
 */

if ( ! function_exists( 'bulmapress_customize_register' ) ) {
	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function bulmapress_customize_register( $wp_customize ) {
		$wp_customize->remove_section("colors");
		$wp_customize->remove_section("background_image");

		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    /**
     * Homepage Banner Customizer
     */

    // Create section for banner
    $wp_customize->add_section( 'viame_home_banner' , array(
      'title'      => 'Homepage Banner',
      'priority'   => 100,
    ) );

    //Main Headline
    $wp_customize->add_setting( 'main_headline_text' , array(
      'default'     => 'Welcome to ' . get_bloginfo('name'),
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'viame_banner_main_headline', array(
    	'label'      => 'Main Headline',
    	'section'    => 'viame_home_banner',
    	'settings'   => 'main_headline_text',
    ) );

    //Sub Headline
    $wp_customize->add_setting( 'sub_headline_text' , array(
      'default'     => get_bloginfo('description'),
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'viame_banner_sub_headline', array(
    	'label'      => 'Sub Headline',
    	'section'    => 'viame_home_banner',
    	'settings'   => 'sub_headline_text',
    ) );

    //Button 1
    $wp_customize->add_setting( 'cta_1_text' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'viame_cta_1_text', array(
    	'label'      => 'Button 1 label',
    	'section'    => 'viame_home_banner',
    	'settings'   => 'cta_1_text',
    ) );

    $wp_customize->add_setting( 'cta_1_link' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'viame_cta_1_link', array(
    	'label'      => 'Button 1 URL',
    	'section'    => 'viame_home_banner',
    	'settings'   => 'cta_1_link',
    ) );

    //Button 2
    $wp_customize->add_setting( 'cta_2_text' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'viame_cta_2_text', array(
      'label'      => 'Button 2 label',
      'section'    => 'viame_home_banner',
      'settings'   => 'cta_2_text',
    ) );

    $wp_customize->add_setting( 'cta_2_link' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'viame_cta_2_link', array(
      'label'      => 'Button 2 URL',
      'section'    => 'viame_home_banner',
      'settings'   => 'cta_2_link',
    ) );

    //Banner Image
    $wp_customize->add_setting( 'viame_banner_image' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
        'label'             => __('Hero Image', 'name-theme'),
        'section'           => 'viame_home_banner',
        'settings'          => 'viame_banner_image',
    )));

    /**
     * Homepage Alert Customizer
     */

    // Create section for Alert Section
    $wp_customize->add_section( 'viame_home_banner_alert' , array(
      'title'      => 'Homepage Banner Alert',
      'priority'   => 100,
    ) );

    // Main Headline
    $wp_customize->add_setting( 'alert_headline' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'alert_headline_control', array(
    	'label'      => 'Alert Headline',
    	'section'    => 'viame_home_banner_alert',
    	'settings'   => 'alert_headline',
    ) );

    //Sub Headline
    $wp_customize->add_setting( 'alert_text' , array(
      'default'     => get_bloginfo('description'),
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'alert_text_control', array(
    	'label'      => 'Alert Sub Headline',
    	'section'    => 'viame_home_banner_alert',
    	'settings'   => 'alert_text',
    ) );

    //Button 1
    $wp_customize->add_setting( 'alert_cta_text' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'alert_cta_text_control', array(
    	'label'      => 'Link text',
    	'section'    => 'viame_home_banner_alert',
    	'settings'   => 'alert_cta_text',
    ) );

    $wp_customize->add_setting( 'alert_cta_link' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'alert_cta_link_control', array(
    	'label'      => 'Link URL',
    	'section'    => 'viame_home_banner_alert',
    	'settings'   => 'alert_cta_link',
    ) );

    /**
     * Footer Text
     */

    // Create section for Footer Text
    $wp_customize->add_section( 'viame_footer' , array(
      'title'      => 'Footer Text',
      'priority'   => 100,
    ) );

    //Main Headline
    $wp_customize->add_setting( 'viame_footer_text' , array(
      'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( 'footer_text_control', array(
    	'label'      => 'Footer Text',
    	'section'    => 'viame_footer',
    	'settings'   => 'viame_footer_text',
      'type'       => 'textarea'
    ) );
	}
}
add_action( 'customize_register', 'bulmapress_customize_register' );

if ( ! function_exists( 'bulmapress_customize_preview_js' ) ) {
	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 */
	function bulmapress_customize_preview_js() {
		wp_enqueue_script( 'bulmapress_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
	}
}
add_action( 'customize_preview_init', 'bulmapress_customize_preview_js' );
