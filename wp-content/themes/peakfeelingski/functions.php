<?php

/**
 * Set max content width
 */

if (! isset($content_width))
	$content_width = 800;

if (! function_exists('peakfeelingski_setup')):

function peakfeelingski_setup() {
	/**
	 * Make theme available for translation.
	 * Translations can be placed in the /languages/ directory.
	 */
	load_theme_textdomain( 'peakfeelingski', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to <head>.
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for post thumbnails and featured images.
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * Add support for two custom navigation menus.
	 */
	register_nav_menus( array(
		'primary'   => __( 'Primary Menu', 'peakfeelingski' ),
		'secondary' => __('Secondary Menu', 'peakfeelingski' )
	) );

	/**
	 * Enable support for the following post formats:
	 * aside, gallery, quote, image, and video
	 */
	add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

	add_theme_support( 'custom-background' );

	$defaults = array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => false,
		'video-active-callback'  => 'is_front_page',
	);
	add_theme_support( 'custom-header', $defaults );

	add_theme_support( 'custom-logo', array(
		'height'      => 500,
		'width'       => 500,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array( 'site-title', 'site-description' ),
	) );

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

	add_theme_support( 'title-tag' );

	add_theme_support('widgets');

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
	);


}





endif; // peakfeelingski_setup
add_action( 'after_setup_theme', 'peakfeelingski_setup' );

/**
 * load stylesheets
 */
function load_stylesheets() {
	wp_register_style('bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css',
		array(), false, 'all');
	wp_enqueue_style('bootstrap');

	wp_register_style('maincss', get_template_directory_uri() . '/assets/css/main.css',
		[], false, 'all');
	wp_enqueue_style('maincss');

    wp_register_style('magnificcss', get_template_directory_uri() . '/assets/css/magnific.css',
        [], false, 'all');
    wp_enqueue_style('magnificcss');


}

add_action('wp_enqueue_scripts', 'load_stylesheets');

/**
 * load js
 */

function loadjs() {

	wp_enqueue_script('jquery');


	wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], false, true);
	wp_enqueue_script('bootstrap');

    wp_register_script('magnificjs', get_template_directory_uri() . '/assets/js/magnific.js', ['jquery'], 1, true);
    wp_enqueue_script('magnificjs');

	wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', [], 1, true);
	wp_enqueue_script('mainjs');


}
add_action('wp_enqueue_scripts', 'loadjs');


/**
 * Image source
 */
if ( !defined('theme_img_path')) {
	define('theme_img_path', get_stylesheet_directory_uri() .'/assets/images');
}

/**
 * ACF Settings
 */

function my_acf_load_field( $field ) {

    // make required
    $field['required'] = true;


    // customize instructions with icon
    $field['instructions'] = '<i class="help" title="Instructions here"></i>';


    // customize wrapper element
    $field['wrapper']['id'] = 'my-custom-id';
    $field['wrapper']['data-jsify'] = '123';
    $field['wrapper']['title'] = 'Text here';


    // return
    return $field;

}

add_filter('acf/load_field/name=event', 'my_acf_load_field');

// Add options pages for ACF


if(function_exists('acf_add_options_page'))
{
    acf_add_options_page(
        array(
            'page-title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-tools'
        )
    );

    acf_add_options_sub_page(
        array(
            'page-title' => 'Contact Settings',
            'menu_title' => 'Contact',
            'parent_slug' => 'website-settings',
        )
    );

    acf_add_options_sub_page(
        array(
            'page-title' => 'Design Settings',
            'menu_title' => 'Design',
            'parent_slug' => 'website-settings',
        )
    );
}
