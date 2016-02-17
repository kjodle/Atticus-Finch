<?php
/**
 * Atticus Finch Theme Customizer
 *
 * @package Atticus Finch
 */


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function atticus_finch_customize_preview_js() {
	wp_enqueue_script( 'atticus_finch_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'atticus_finch_customize_preview_js' );


// Add some Customizer stuff
// developer.wordpress.org/themes/advanced-topics/customizer-api/
add_action( 'customize_register', 'atticus_finch_customize_register', 11 );
function atticus_finch_customize_register( $wp_customize ) {

// Add postMessage support for site title and description for the Theme Customizer
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


$wp_customize->add_panel( 'atticusfinch', array(
	'title' => __( 'Atticus Finch Theme Options', 'atticus-finch' ),
	'description' => __( 'The Atticus Finch theme has many options. Vist the theme\'s <a href="http://www.example.com/">home page</a> for complete instructions.', 'atticus-finch' ),
	'priority' => 05, 
) );


// Widget Areas
	$wp_customize->add_section( 'atticus_finch_widget_areas', array(
		'title'          => __( 'Widget Areas', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 30,
		'description'    => __( 'Select which action hook widget areas you would like to activate.', 'atticus-finch' ),
		'panel' => 'atticusfinch',
	) );


	$wp_customize->add_setting( 'atticus_finch_before_header', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_header', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Header', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_top_menu', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_top_menu', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Top Menu', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_social_media', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_social_media', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Social Media', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_primary_menu', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_primary_menu', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Primary Menu', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_header', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_header', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Header', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_container_top', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_container_top', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Top of Container', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_post_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_post_title', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Post Title', 'atticus-finch' ),
	) );

/*
 * We've removed this action hook, but let's leave this control in place
 * in case we find a use for it later.
	$wp_customize->add_setting( 'atticus_finch_before_post_content', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_post_content', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Post Content', 'atticus-finch' ),
	) );
*/


	$wp_customize->add_setting( 'atticus_finch_post_top', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_post_top', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Top of Post', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_post_bottom', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_post_bottom', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Bottom of Post', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_post_content', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_post_content', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Post Content', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_post_meta', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_post_meta', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Post Meta', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_post_meta', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_post_meta', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Post Meta', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_comments', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_comments', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Comments', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_comments', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_comments', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Comments', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_comment_form', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_comment_form', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Comment Form', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_comment_form', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_comment_form', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Comment Form', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_container_bottom', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_container_bottom', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Bottom of Container', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_before_footer_menu', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_before_footer_menu', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Before Footer Menu', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_footer_top', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_footer_top', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Top of Footer', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_footer_bottom', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_footer_bottom', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'Bottom of Footer', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_after_footer', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_after_footer', array(
		'section'  => 'atticus_finch_widget_areas',
		'type'     => 'checkbox',
		'label'    => __( 'After Footer', 'atticus-finch' ),
	) );


// Post Format Title Options
	$wp_customize->add_section( 'atticus_finch_post_format_title_options', array(
		'title'          => __( 'Post Format Title Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 10,
		'description'    => __('Select whether titles should appear for various post formats.', 'atticus-finch'),
		'panel' => 'atticusfinch',
	) );

	$wp_customize->add_setting( 'atticus_finch_aside_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_aside_title', array(
		'section'  => 'atticus_finch_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for asides', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_link_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_link_title', array(
		'section'  => 'atticus_finch_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for links', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_quote_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_quote_title', array(
		'section'  => 'atticus_finch_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for quotes', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_status_title', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_status_title', array(
		'section'  => 'atticus_finch_post_format_title_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display title for statuses', 'atticus-finch' ),
	) );


// Post Format Excerpt Options
	$wp_customize->add_section( 'atticus_finch_post_format_excerpt_options', array(
		'title'          => __( 'Post Format Excerpt Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 20,
		'description'    => __('By default, the aside, link, quote, and statu post format will display full content on the home page. You can choose to show excerpts instead.', 'atticus-finch'),
		'panel' => 'atticusfinch',
	) );

	$wp_customize->add_setting( 'atticus_finch_aside_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_aside_excerpt', array(
		'section'  => 'atticus_finch_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for asides', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_link_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_link_excerpt', array(
		'section'  => 'atticus_finch_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for links', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_quote_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_quote_excerpt', array(
		'section'  => 'atticus_finch_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for quotes', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_status_excerpt', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_status_excerpt', array(
		'section'  => 'atticus_finch_post_format_excerpt_options',
		'type'     => 'checkbox',
		'label'    => __( 'Display excerpt for statuses', 'atticus-finch' ),
	) );


	$default_readmore = __( '&hellip;read more&hellip;', 'atticus-finch' );
	$wp_customize->add_setting( 'atticus_finch_readmore', array(
		'type'               => 'theme_mod',
		'transport'          => 'postMessage',
		'default'            => $default_readmore,
		'sanitize_callback'  => 'atticus_finch_sanitize_text',
	) );

	$wp_customize->add_control( 'atticus_finch_readmore', array(
		'section'     => 'atticus_finch_post_format_excerpt_options',
		'type'        => 'text',
		'label'       => __( 'Text for &lsquo;read more&rsquo; link (in all excerpts)', 'atticus-finch'),
	) );


// Copyright Information
	$wp_customize->add_section( 'atticus_finch_copyright', array(
		'title'          => __( 'Copyright Information', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 50,
		'description'    => __( 'Copyright information will appear in the footer, and at the bottom of printed pages. (Make sure you have not disabled this function under "Miscellaneous Options")', 'atticus-finch' ),
		'panel'          => 'atticusfinch',
	) );

	$wp_customize->add_setting( 'atticus_finch_copyright', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize'       => 'html',
	) );

$default_copyright = '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" id="cc-button" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.';

	$wp_customize->add_control( 'atticus_finch_copyright', array(
		'section'  => 'atticus_finch_copyright',
		'default'  => $default_copyright,
		'type'     => 'textarea',
		'label'    => __( 'Enter your copyright information. (HTML is allowed.)', 'atticus-finch' ),
	) );


// Custom CSS Information
	$wp_customize->add_section( 'atticus_finch_custom_css', array(
		'title'          => __( 'Custom CSS', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 60,
		'description'    => __( 'Custom CSS is appended to the &lt;head&gt; of your document. If you need to enter more than a few lines, use a child theme.', 'atticus-finch' ),
		'panel'          => 'atticusfinch',
	) );

	$wp_customize->add_setting( 'atticus_finch_ccss', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_css',
	) );


	$wp_customize->add_control( 'atticus_finch_ccss', array(
		'section'  => 'atticus_finch_custom_css',
		'default'  => '',
		'type'     => 'textarea',
		'label'    => __( 'Enter custom CSS here', 'atticus-finch' ),
	) );


// Print Options
	$wp_customize->add_section( 'atticus_finch_print', array (
		'title'          => __( 'Print Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 40,
		'panel'          => 'atticusfinch',
	) );


	$wp_customize->add_setting( 'atticus_finch_print_url', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_print_url', array(
		'section'      => 'atticus_finch_print',
		'type'         => 'checkbox',
		'label'        => __( 'Print URL information at end of post', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_print_copyright', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_print_copyright', array(
		'section'      => 'atticus_finch_print',
		'type'         => 'checkbox',
		'label'        => __( 'Print copyright information at end of post', 'atticus-finch' ),
	) );


// Social Media Options
	$wp_customize->add_section( 'atticus_finch_social_media', array(
		'title'          => __( 'Social Media Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 90,
		'panel'          => 'atticusfinch',
	) );

	$wp_customize->add_setting( 'atticus_finch_rss', array(
		'type'               => 'theme_mod',
		'transport'          => 'postMessage',
		'sanintize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_rss', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'checkbox',
		'label'             => __( 'Display link to RSS feed', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_twitter', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_twitter', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter Twitter URL', 'atticus-finch'),
	) );


	$wp_customize->add_setting( 'atticus_finch_twitter2', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_twitter2', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter second Twitter URL', 'atticus-finch'),
	) );


	$wp_customize->add_setting( 'atticus_finch_facebook', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_facebook', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter Facebook URL', 'atticus-finch'),
	) );


	$wp_customize->add_setting( 'atticus_finch_instagram', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_instagram', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter Instagram URL', 'atticus-finch'),
	) );


	$wp_customize->add_setting( 'atticus_finch_youtube', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_youtube', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter YouTube URL', 'atticus-finch'),
	) );


	$wp_customize->add_setting( 'atticus_finch_pinterest', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_pinterest', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter Pinterest Profile URL', 'atticus-finch'),
	) );


	$wp_customize->add_setting( 'atticus_finch_amazon', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize'          => 'html',
	) );

	$wp_customize->add_control( 'atticus_finch_amazon', array(
		'section'           => 'atticus_finch_social_media',
		'type'              => 'text',
		'label'             => __( 'Enter Amazon Wish List URL', 'atticus-finch'),
	) );




// Mobile Menu Options
	$wp_customize->add_section( 'atticus_finch_mobile_menu_options', array(
		'title'          => __( 'Mobile Menu Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 110,
		'description'    => __('Menu settings for mobile appearance. <b>Note:</b> The breakpoint settings will override the "mobile breakpoint" setting.', 'atticus-finch'),
		'panel' => 'atticusfinch',
	) );

	// Top Menu Options
	$wp_customize->add_setting( 'atticus_finch_top_menu_name', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_text',
	) );

	$wp_customize->add_control( 'atticus_finch_top_menu_name', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'text',
		'label'    => __( 'Mobile display name for top menu', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_top_menu_type', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_mobile_menu_type',
		'default'           => 'select',
	) );

	$wp_customize->add_control( 'atticus_finch_top_menu_type', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'select',
		'choices'  => array(
			'select' => 'Select Menu',
			'dropdown' => 'Flat Menu',
			'multitoggle' => 'Dropdown Menu',
		),
		'label'    => __( 'Display the top menu as', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_top_menu_breakpoint', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_int',
		'default'           => 640,
	) );

	$wp_customize->add_control( 'atticus_finch_top_menu_breakpoint', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'integer',
		'label'    => __( 'Breakpoint to display top menu as mobile', 'atticus-finch' ),
	) );

	// Main Menu Options
	$wp_customize->add_setting( 'atticus_finch_main_menu_name', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_text',
	) );

	$wp_customize->add_control( 'atticus_finch_main_menu_name', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'text',
		'label'    => __( 'Mobile display name for main menu', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_main_menu_type', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_mobile_menu_type',
		'default'           => 'select',
	) );

	$wp_customize->add_control( 'atticus_finch_main_menu_type', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'select',
		'choices'  => array(
			'select' => 'Select Menu',
			'dropdown' => 'Flat Menu',
			'multitoggle' => 'Dropdown Menu',
		),
		'label'    => __( 'Display the menu menu as', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_main_menu_breakpoint', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_int',
		'default'           => 640,
	) );

	$wp_customize->add_control( 'atticus_finch_main_menu_breakpoint', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'integer',
		'label'    => __( 'Breakpoint to display main menu as mobile', 'atticus-finch' ),
	) );

	// Footer Menu Options
	$wp_customize->add_setting( 'atticus_finch_footer_menu_name', array(
		'type'           => 'theme_mod',
		'transport'      => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_text',
	) );

	$wp_customize->add_control( 'atticus_finch_footer_menu_name', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'text',
		'label'    => __( 'Mobile display name for footer menu', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_footer_menu_type', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_mobile_menu_type',
		'default'           => 'select',
	) );

	$wp_customize->add_control( 'atticus_finch_footer_menu_type', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'select',
		'choices'  => array(
			'select' => 'Select Menu',
			'dropdown' => 'Flat Menu',
			'multitoggle' => 'Dropdown Menu',
		),
		'label'    => __( 'Display the footer menu as', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_footer_menu_breakpoint', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'sanitize_callback' => 'atticus_finch_sanitize_int',
		'default'           => 640,
	) );

	$wp_customize->add_control( 'atticus_finch_footer_menu_breakpoint', array(
		'section'  => 'atticus_finch_mobile_menu_options',
		'type'     => 'integer',
		'label'    => __( 'Breakpoint to display footer menu as mobile', 'atticus-finch' ),
	) );


// Mobile Options Options
	$wp_customize->add_section( 'atticus_finch_mobile', array(
		'title'          => __( 'Mobile Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 100,
		'panel'          => 'atticusfinch',
		'description'    => 'Fine-tune your mobile appearance',
	) );

	$wp_customize->add_setting( 'atticus_finch_mobile_breakpoint', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'default'           => '640',
		'sanitize_callback' => 'atticus_finch_sanitize_int',
	) );

	$wp_customize->add_control( 'atticus_finch_mobile_breakpoint', array(
		'section'   => 'atticus_finch_mobile',
		'type'      => 'text',
		'label'     => __( 'Breakpoint to display mobile version of theme', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_post_top_link', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'default'           => '0',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_post_top_link', array(
		'section'   => 'atticus_finch_mobile',
		'type'      => 'checkbox',
		'label'     => __( 'Display \'Return to Top\' link after post content', 'atticus-finch' ),
	) );

	$wp_customize->add_setting( 'atticus_finch_footer_top_link', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'default'           => '0',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_footer_top_link', array(
		'section'   => 'atticus_finch_mobile',
		'type'      => 'checkbox',
		'label'     => __( 'Display \'Return to Top\' link before footer content', 'atticus-finch' ),
	) );


// Miscellaneous Options
	$wp_customize->add_section( 'atticus_finch_misc', array(
		'title'          => __( 'Miscellaneous Options', 'atticus-finch' ),
		'capability'     => 'edit_theme_options',
		'priority'       => 200,
		'panel'          => 'atticusfinch',
	) );

	$wp_customize->add_setting( 'atticus_finch_display_copyright', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'default'           => '1',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_display_copyright', array(
		'section'   => 'atticus_finch_misc',
		'type'      => 'checkbox',
		'label'     => __( 'Display copyright information in footer', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_display_credits', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'default'           => '1',
		'sanitize_callback' => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_display_credits', array(
		'section'   => 'atticus_finch_misc',
		'type'      => 'checkbox',
		'label'     => __( 'Display developer credits in footer', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_edit_post_link', array(
		'type'               => 'theme_mod',
		'transport'          => 'postMessage',
		'default'            => '1',
		'sanitize_callback'  => 'atticus_finch_sanitize_checkbox',
	) );

	$wp_customize->add_control( 'atticus_finch_edit_post_link', array(
		'section'     => 'atticus_finch_misc',
		'type'        => 'checkbox',
		'label'       => __( 'Display "Edit this post" link if user is logged in', 'atticus-finch' ),
	) );


	$wp_customize->add_setting( 'atticus_finch_excerpt_length', array(
		'type'              => 'theme_mod',
		'transport'         => 'postMessage',
		'default'           => '20',
		'sanitize_callback' => 'atticus_finch_sanitize_excerpt',
	) );

	$wp_customize->add_control( 'atticus_finch_excerpt_length', array(
		'section'   => 'atticus_finch_misc',
		'type'      => 'text',
		'label'     => __( 'Excerpt length in number of words (maximum = 100)', 'atticus-finch' ),
	) );

// Preview some of our options 
/*
if ( $wp_customize->is_preview() && ! is_admin() )
	add_action( 'wp_footer', 'atticus_finch_customize_preview', 21);

function themename_customize_preview() {
    ?>
    <script type="text/javascript">
    ( function( $ ){
    wp.customize('setting_name',function( value ) {
        value.bind(function(to) {
            $('.posttitle').css('color', to ? to : '' );
        });
    });
    } )( jQuery )
    </script>
    <?php 
}
*/

} // End register function


// Sanitizer Functions

function atticus_finch_sanitize_checkbox( $input ) {
	if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

function atticus_finch_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function atticus_finch_sanitize_excerpt( $input ) {
	$input = absint( $input );
	if ( $input > 100 ) { $input = 100; }
	return $input;
}

function atticus_finch_sanitize_html( $input ) {
	wp_kses($input,
		array(),
		array(
			'http' => array(),
			'https' => array(),
		)
	);
}

function atticus_finch_sanitize_mobile_menu_type( $input ){
	$valid = array(
		'select' => 'Select Menu',
		'dropdown' => 'Flat Menu',
		'multitoggle' => 'Dropdown Menu',
	);
	if ( array_key_exists( $input, $valid ) ) {
		return $input;
	} else {
		return '';
	}
}

function atticus_finch_sanitize_int( $input ){
	if( is_numeric( $input) ) {
		return intval( $input );
	}
}

function atticus_finch_sanitize_css( $input ) {
//	wp_filter_nohtml_kses( $input );
	strip_tags( $input );
	return $input;
}