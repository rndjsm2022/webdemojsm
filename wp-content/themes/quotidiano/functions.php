<?php

/*-----------------------------------------------------------------------------------*/
/* Enqueu scripts */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('quotidiano_enqueue_scripts')) {

	function quotidiano_enqueue_scripts() {

		wp_deregister_style( 'avventura-lite-style' );
		wp_deregister_style( 'avventura-lite-' . esc_attr(get_theme_mod('avventura_lite_skin', 'orange')) );

		wp_deregister_style('slick');
		wp_deregister_script('slick');

		wp_enqueue_style( 'avventura-lite-parent-style' , get_template_directory_uri() . '/style.css' ); 

		wp_enqueue_style(
			'quotidiano-' . esc_attr(get_theme_mod('avventura_lite_skin', 'orange')),
			get_stylesheet_directory_uri() . '/assets/skins/' . esc_attr(get_theme_mod('avventura_lite_skin', 'orange')) . '.css',
			array( 'quotidiano-style' ),
			'1.0.0'
		); 

		wp_enqueue_style( 'quotidiano-style' , get_stylesheet_directory_uri() . '/style.css' ); 

		$googleFontsArgs = array(
			'family' =>	str_replace('|', '%7C','Merriweather:300,300i,400,400i,700,700i,900,900i'),
			'subset' =>	'latin,latin-ext'
		);
		
		wp_deregister_style('google-fonts');
		wp_enqueue_style('google-fonts', add_query_arg ( $googleFontsArgs, "https://fonts.googleapis.com/css" ), array(), '1.0.0' );

	}
	
	add_action( 'wp_enqueue_scripts', 'quotidiano_enqueue_scripts', 999);

}

/*-----------------------------------------------------------------------------------*/
/* Replace hooks */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('quotidiano_replace_hooks')) {

	function quotidiano_replace_hooks() {
		
		remove_action('avventura_lite_slick_slider', 'avventura_lite_slick_slider_function');
		remove_action('avventura_lite_top_sidebar', 'avventura_lite_top_sidebar_function');
		remove_action('avventura_lite_thumbnail', 'avventura_lite_thumbnail_function');
		remove_action('post_class', 'avventura_lite_post_class');

	}
	
	add_action('init','quotidiano_replace_hooks');

}

/*-----------------------------------------------------------------------------------*/
/* Exclude sticky posts on home */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('quotidiano_is_featured_posts_on_archive')) {

	function quotidiano_is_featured_posts_on_archive() {
		
		if (
			is_author() ||
			is_category() ||
			is_tag() ||
			is_tax('post_format')
		) :
		
			return true;
			
		else :

			return false;

		endif;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Exclude sticky posts on home */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('quotidiano_exclude_featured_posts_on_home')) {

	function quotidiano_exclude_featured_posts_on_home($query) {
		
		if ( 
			(
				$query->is_home() && 
				$query->is_main_query()
			) ||
			( 
				$query->is_archive() &&
				$query->is_main_query() &&
				quotidiano_is_featured_posts_on_archive() == true &&
				strstr(avventura_lite_setting('quotidiano_featured_posts','layout-1'), 'layout' ) == true
			)			
		){ 
			$query->set( 'offset', 4 );
		}
			
		return $query;

	}
	
	add_action('pre_get_posts', 'quotidiano_exclude_featured_posts_on_home', 99999);

}

/*-----------------------------------------------------------------------------------*/
/* Exclude sticky posts on home */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('quotidiano_get_categories')) {

	function quotidiano_get_categories() {

		$args = array(
			'taxonomy' => 'category',
			'hide_empty' => true,
		);

		foreach ( get_terms($args) as $cat) {
			$return[$cat->term_id] = $cat->name;
		}
		
		return $return;

	}

}

/*-----------------------------------------------------------------------------------*/
/* Customize register */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('quotidiano_customize_register')) {

	function quotidiano_customize_register( $wp_customize ) {

		$wp_customize->remove_control( 'avventura_lite_header_layout');
		$wp_customize->remove_section( 'slideshow_section');
		$wp_customize->remove_control( 'avventura_lite_home');
		$wp_customize->remove_control( 'avventura_lite_category_layout');
		$wp_customize->remove_control( 'avventura_lite_search_layout');

		$wp_customize->add_setting( 'quotidiano_featured_posts', array(
			'default' => 'layout-1',
			'sanitize_callback' => 'quotidiano_select_sanitize',
		));

		$wp_customize->add_control( 'quotidiano_featured_posts' , array(
			'priority' => 9,
			'type' => 'select',
			'section' => 'layouts_section',
			'label' => esc_html__('Feaured post grid','quotidiano'),
			'description' => esc_html__('To enable the feaured post grid on homepage and archive pages, please select one of available layouts.','quotidiano'),
			'choices'  => array (
			   'disable' => esc_html__( 'Disable','quotidiano'),
			   'layout-1' => esc_html__( 'Layout 1','quotidiano'),
			   'layout-2' => esc_html__( 'Layout 2','quotidiano'),
			   'layout-3' => esc_html__( 'Layout 3','quotidiano'),
			   'layout-4' => esc_html__( 'Layout 4','quotidiano'),
			),
		));
		
		$wp_customize->add_panel( 'quotidiano_postblock_panel', array(
			'title' => esc_html__( 'Quotidiano Post Blocks', 'quotidiano' ),
			'description' => esc_html__( 'Quotidiano Post Block', 'quotidiano' ),
			'priority' => 13,
		));
		
		$wp_customize->add_section('quotidiano_postblock_1', array(
			'title' => esc_html__( 'Quotidiano postBlock 1', 'quotidiano' ),
			'panel' => 'quotidiano_postblock_panel',
		));
	
		$wp_customize->add_setting( 'quotidiano_postblock_1_category', array(
			'default' => 1,
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_1_category' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_1',
			'label' => esc_html__('Category','quotidiano'),
			'description' => esc_html__('Please select the category of this postblock.','quotidiano'),
			'choices'  => quotidiano_get_categories(),
		));
		
		$wp_customize->add_setting( 'quotidiano_postblock_1_layout', array(
			'default' => 'module-1',
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_1_layout' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_1',
			'label' => esc_html__('Layout','quotidiano'),
			'description' => esc_html__('Please select the layout of this postblock.','quotidiano'),
			'choices'  => array (
			   'disable' => esc_html__( 'Disable','quotidiano'),
			   'module-1' => esc_html__( 'Module 1','quotidiano'),
			   'module-2' => esc_html__( 'Module 2','quotidiano'),
			   'module-3' => esc_html__( 'Module 3','quotidiano'),
			   'module-4' => esc_html__( 'Module 4','quotidiano'),
			),
		));

		$wp_customize->add_section('quotidiano_postblock_2', array(
			'title' => esc_html__( 'Quotidiano postBlock 2', 'quotidiano' ),
			'panel' => 'quotidiano_postblock_panel',
		));
	
		$wp_customize->add_setting( 'quotidiano_postblock_2_category', array(
			'default' => 1,
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_2_category' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_2',
			'label' => esc_html__('Category','quotidiano'),
			'description' => esc_html__('Please select the category of this postblock.','quotidiano'),
			'choices'  => quotidiano_get_categories(),
		));
		
		$wp_customize->add_setting( 'quotidiano_postblock_2_layout', array(
			'default' => 'disable',
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_2_layout' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_2',
			'label' => esc_html__('Layout','quotidiano'),
			'description' => esc_html__('Please select the layout of this postblock.','quotidiano'),
			'choices'  => array (
			   'disable' => esc_html__( 'Disable','quotidiano'),
			   'module-1' => esc_html__( 'Module 1','quotidiano'),
			   'module-2' => esc_html__( 'Module 2','quotidiano'),
			   'module-3' => esc_html__( 'Module 3','quotidiano'),
			   'module-4' => esc_html__( 'Module 4','quotidiano'),
			),
		));

		$wp_customize->add_section('quotidiano_postblock_3', array(
			'title' => esc_html__( 'Quotidiano postBlock 3', 'quotidiano' ),
			'panel' => 'quotidiano_postblock_panel',
		));
	
		$wp_customize->add_setting( 'quotidiano_postblock_3_category', array(
			'default' => 1,
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_3_category' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_3',
			'label' => esc_html__('Category','quotidiano'),
			'description' => esc_html__('Please select the category of this postblock.','quotidiano'),
			'choices'  => quotidiano_get_categories(),
		));
		
		$wp_customize->add_setting( 'quotidiano_postblock_3_layout', array(
			'default' => 'disable',
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_3_layout' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_3',
			'label' => esc_html__('Layout','quotidiano'),
			'description' => esc_html__('Please select the layout of this postblock.','quotidiano'),
			'choices'  => array (
			   'disable' => esc_html__( 'Disable','quotidiano'),
			   'module-1' => esc_html__( 'Module 1','quotidiano'),
			   'module-2' => esc_html__( 'Module 2','quotidiano'),
			   'module-3' => esc_html__( 'Module 3','quotidiano'),
			   'module-4' => esc_html__( 'Module 4','quotidiano'),
			),
		));

		$wp_customize->add_section('quotidiano_postblock_4', array(
			'title' => esc_html__( 'Quotidiano postBlock 4', 'quotidiano' ),
			'panel' => 'quotidiano_postblock_panel',
		));
	
		$wp_customize->add_setting( 'quotidiano_postblock_4_category', array(
			'default' => 1,
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_4_category' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_4',
			'label' => esc_html__('Category','quotidiano'),
			'description' => esc_html__('Please select the category of this postblock.','quotidiano'),
			'choices'  => quotidiano_get_categories(),
		));
		
		$wp_customize->add_setting( 'quotidiano_postblock_4_layout', array(
			'default' => 'disable',
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_postblock_4_layout' , array(
			'type' => 'select',
			'section' => 'quotidiano_postblock_4',
			'label' => esc_html__('Layout','quotidiano'),
			'description' => esc_html__('Please select the layout of this postblock.','quotidiano'),
			'choices'  => array (
			   'disable' => esc_html__( 'Disable','quotidiano'),
			   'module-1' => esc_html__( 'Module 1','quotidiano'),
			   'module-2' => esc_html__( 'Module 2','quotidiano'),
			   'module-3' => esc_html__( 'Module 3','quotidiano'),
			   'module-4' => esc_html__( 'Module 4','quotidiano'),
			),
		));

		$wp_customize->add_setting( 'quotidiano_enable_related_posts', array(
			'default' => 'on',
			'sanitize_callback' => 'quotidiano_select_sanitize',

		));

		$wp_customize->add_control( 'quotidiano_enable_related_posts' , array(
			'type' => 'select',
			'section' => 'settings_section',
			'label' => esc_html__('Related posts','quotidiano'),
			'description' => esc_html__('Do you want to display the related posts at the end of each article?','quotidiano'),
			'choices'  => array (
			   'off' => esc_html__( 'No','quotidiano'),
			   'on' => esc_html__( 'Yes','quotidiano'),
			),
		));
		
		function quotidiano_select_sanitize ($value, $setting) {
		
			global $wp_customize;
					
			$control = $wp_customize->get_control( $setting->id );
				 
			if ( array_key_exists( $value, $control->choices ) ) {
					
				return $value;
					
			} else {
					
				return $setting->default;
					
			}
			
		}
		
	}
	
	add_action( 'customize_register', 'quotidiano_customize_register', 11 );

}

/*-----------------------------------------------------------------------------------*/
/* Theme setup */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('quotidiano_theme_setup')) {

	function quotidiano_theme_setup() {

		load_child_theme_textdomain( 'quotidiano', get_stylesheet_directory() . '/languages' );
		
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/functions/function-style.php' );

		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/post/main-article.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/post/small-article.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/post/hero-article.php' );

		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/modules/module-1.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/modules/module-2.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/modules/module-3.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/modules/module-4.php' );

		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/featured-posts.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/media.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/post-blocks.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/related-posts.php' );
		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/templates/top-section.php' );

		require_once( trailingslashit( get_stylesheet_directory() ) . 'core/sidebars/top-sidebar.php' );

		remove_theme_support( 'custom-logo');

		$defaults = array( 'header-text' => array( 'site-title', 'site-description' ));
		add_theme_support( 'custom-logo', $defaults );

		add_image_size( 'quotidiano_small_image', 120, 100, TRUE ); 
		add_image_size( 'quotidiano_medium_image', 337, 225, TRUE ); 
		add_image_size( 'quotidiano_large_image', 423, 370, TRUE ); 

		if ( !get_theme_mod('avventura_lite_logo_font_size') )
			set_theme_mod( 'avventura_lite_logo_font_size', '60px' );

		if ( !get_theme_mod('avventura_lite_logo_description_top_margin') )
			set_theme_mod( 'avventura_lite_logo_description_top_margin', '25px' );

	}

	add_action( 'after_setup_theme', 'quotidiano_theme_setup', 999);

}

/*-----------------------------------------------------------------------------------*/
/* Widgets init */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('quotidiano_widgets_init')) {

	function quotidiano_widgets_init() {

		register_sidebar(array(
		
			'name' => esc_html__('Banner widget area','quotidiano'),
			'id'   => 'quotidiano-banner-widget-area',
			'description'   => esc_html__('This widget area will be shown near the logo (Recommended for the image widget).', 'quotidiano'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><article class="no-padding">',
			'after_widget'  => '</article></div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));

	}

	add_action( 'widgets_init', 'quotidiano_widgets_init' );

}

/*-----------------------------------------------------------------------------------*/
/* Post class */
/*-----------------------------------------------------------------------------------*/

if (!function_exists('quotidiano_post_class')) {

	function quotidiano_post_class($classes) {

		if ( !avventura_lite_is_single() ) {

			if ( 
				is_home() ||
				is_archive() ||
				is_search() 
			
			) {

				$classes[] = 'post-container';

			}

		} else if ( avventura_lite_is_single() && avventura_lite_is_woocommerce_active('is_cart') ) {

			$classes[] = 'post-container col-md-12 woocommerce_cart_page';

		} else if ( avventura_lite_is_single() && !avventura_lite_is_woocommerce_active('is_product') ) {

			$classes[] = 'post-container col-md-12';

		} else if ( is_page() ) {

			$classes[] = 'full';

		}

		return $classes;

	}

	add_filter('post_class', 'quotidiano_post_class');

}

?>