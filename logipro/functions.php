<?php
/**
 * LogiPro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package LogiPro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function logipro_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on LogiPro, use a find and replace
		* to change 'logipro' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'logipro', get_template_directory() . '/languages' );

   //Theme Support

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

   /**
    * Custom Field Activate
    */

    add_theme_support('custom-field');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu_1' => esc_html__( 'Primary', 'logipro' ),
			'menu_2' => esc_html__( 'Secondary', 'logipro' ),
		)
	);
	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'logipro_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'logipro_setup' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function logipro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'logipro_content_width', 640 );
}
add_action( 'after_setup_theme', 'logipro_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function logipro_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'logipro' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'logipro' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name' 			=> esc_html__('Footer Area One', 'logipro'),
			'id'  			=> 'footer-1',
			'description'   => esc_html__('Add Widget Here', 'logipro'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));
	register_sidebar(
		array(
			'name' 			=> esc_html__('Footer Area Two', 'logipro'),
			'id'  			=> 'footer-2',
			'description'   => esc_html__('Add Widget Here', 'logipro'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));	
	register_sidebar(
		array(
			'name' 			=> esc_html__('Footer Area Three', 'logipro'),
			'id'  			=> 'footer-3',
			'description'   => esc_html__('Add Widget Here', 'logipro'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		));		
}
add_action( 'widgets_init', 'logipro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function logipro_scripts() {

   // load css
   wp_enqueue_style('bootstrap-style',get_template_directory_uri().'/assets/css/bootstrap.min.css',array());
   wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css',array());
   wp_enqueue_style('morris',get_template_directory_uri().'/assets/css/morris.css',array());
   wp_enqueue_style('font-awesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array());
   wp_enqueue_style('icon-font',get_template_directory_uri().'/assets/css/icon-font.css',array());
   wp_enqueue_style('google-apis','https://fonts.googleapis.com/css?family=Fira+Sans:400,400i,500,500i,600,600i,700,700i');
   wp_enqueue_style('carousel',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array());   
   wp_enqueue_style('owl-theme',get_template_directory_uri().'/assets/css/owl.theme.default.css',array());   
   wp_enqueue_style('colorbox',get_template_directory_uri().'/assets/css/colorbox.css',array());   
   wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css',array());
   wp_enqueue_style('responsive',get_template_directory_uri().'/assets/css/responsive.css',array());   

	wp_enqueue_style( 'logipro-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'logipro-style', 'rtl', 'replace' );

   // load js
	wp_enqueue_script( 'logipro-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

   wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.js',array(),false,true);
   wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/assets/js/bootstrap.min.js',array('jquery'),false,true);
   wp_enqueue_script('owl.carousel.min', get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),false,true);
   wp_enqueue_script('jquery.counterup.min', get_template_directory_uri().'/assets/js/jquery.counterup.min.js',array('jquery'),false,true);
   wp_enqueue_script('waypoints.min', get_template_directory_uri().'/assets/js/waypoints.min.js',array('jquery'),false,true);
   wp_enqueue_script('jquery.colorbox', get_template_directory_uri().'/assets/js/jquery.colorbox.js',array('jquery'),false,true);
   wp_enqueue_script('easy-pie-chart', get_template_directory_uri().'/assets/js/easy-pie-chart.js',array('jquery'),false,true);
   wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js',array('jquery'),false,false);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'logipro_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * admin page theme options
 */
require_once get_template_directory().'/inc/theme_options.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * TGM Plugin 
 */
require_once get_template_directory() . '/inc/logipro_activation.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//Service Custom Post Type Example

add_action('init', "service_custom_post_type_logipro");

function service_custom_post_type_logipro(){

   $labels = array(
              'name' => _x('Services', 'post type general name'),
              'singular_name' => _x('service', 'post type singular name'),
              'menu_name' => _x('Services', 'admin menu'),
              'name_admin_bar' => _x('service', 'add new on admin bar'),
              'add_new' => _x('Add New', ''),
              'add_new_item' => __('Add New Service'),
              'edit_item' => __('Edit Service'),
              'new_item' => __('New Service'),
              'all_items' => __('All Service'),
              'view_item' => __('View Service'),
              'search_items' => __('Search Services'),
              'not_found' => __('No Services found'),
              'not_found_in_trash' => __('No Services found in Trash'),
              'parent_item_colon' => __('Parent Services:'),

         );

$args = array(
               'hierarchical' => true,
               'labels' => $labels,
               'public' => true,
               'publicly_queryable' => true,
               'description' => __('Description.'),
               'show_ui' => true,
               'show_in_menu' => true,
               'show_in_nav_menus' => true,
               'query_var' => true,
               'rewrite' => true,
               'query_var' => true,
               'rewrite' => array('slug' => 'service'),
               'capability_type' => 'post',
               'has_archive' => true,
               'menu_position' => 22,
               "show_in_rest" => true,
               'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', 'page-attributes', 'custom-fields','excerpt' )
      );

               register_post_type('service', $args);
}

//Team custom post type

add_action('init', "member_custom_post_type_logipro");

function member_custom_post_type_logipro(){

	$labels = array(
		'name' 				=> _x('Members', 'Post Type General Name', 'logipro'),
		'singular_name' 	=> _x('Member', 'Post Type Singular Name' ,'logipro'),
		'add_new'			=> __('New Member', 'logipro'),
		'add_new_item'		=> __('Add New Member', 'logipro'),
		'edit_item'			=> __('Edit Member', 'logipro'),
		'view_item'			=> __('View Member', 'logipro'),
		'search_item'		=> __('Search Member', 'logipro'),
		'not_found'			=> __('No Member Found', 'logipro'),
		'not_found_in_trash'=> __('No Member Found in Trash', 'logipro'),
	);

	$args =array(
		'labels' 		=> $labels,
		'has_archive' 	=> true,
		'public'	 	=> true,
		'hierarchical'  => true,
		'supports' =>array(
			'title',
			'editor',
			'custom_fields',
			'excerpt',
			'thumbnail',
			'page_attributes'
		),
		'rewrite' => array('slug', 'members'),
		'show_in_rest' =>true,
		'menu_position' => 22,
		'menu_icon' => 'dashicons-groups',
	);

    register_post_type('member', $args);
}

/**
 * Project
 */

 add_action('init', 'logipro_project');

function logipro_project(){
	$labels = array(
		'name' 				=> _x('Projects', 'Post Type General Name', 'logipro'),
		'singular_name' 	=> _x('Project', 'Post Type Singular Name' ,'logipro'),
		'add_new'			=> __('New Project', 'logipro'),
		'add_new_item'		=> __('Add New Project', 'logipro'),
		'edit_item'			=> __('Edit Project', 'logipro'),
		'view_item'			=> __('View Project', 'logipro'),
		'search_item'		=> __('Search Project', 'logipro'),
		'not_found'			=> __('No Project Found', 'logipro'),
		'not_found_in_trash'=> __('No Project Found in Trash', 'logipro'),
	);
	$args =array(
		'labels' 		=> $labels,
		'has_archive' 	=> true,
		'public'	 	=> true,
		'hierarchical'  => true,
		'supports' =>array(
			'title',
			'editor',
			'custom_fields',
			'excerpt',
			'thumbnail',
			'page_attributes'
		),
		'rewrite' => array(
			'slug' => 'project'
		),
		'show_in_rest' =>true,
		'menu_icon' => 'dashicons-list-view',
	);
	register_post_type('project',$args);
}

// Create Texonomy

function project_register_taxonomy() {    
      
    // Projects
    $labels = array(
        'name' => __( 'Project Categories' , 'logipro' ),
        'singular_name' => __( 'Project Category', 'logipro' ),
        'search_items' => __( 'Search Project Categories' , 'logipro' ),
        'all_items' => __( 'All Project Categories' , 'logipro' ),
        'edit_item' => __( 'Edit Project Category' , 'logipro' ),
        'update_item' => __( 'Update Project Categories' , 'logipro' ),
        'add_new_item' => __( 'Add New Project Category' , 'logipro' ),
        'new_item_name' => __( 'New Project Category' , 'logipro' ),
        'menu_name' => __( 'Project Categories' , 'logipro' ),
    );
      
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'sort' => true,
        'args' => array( 'orderby' => 'term_order' ),
        'rewrite' => array( 'slug' => 'project_category' ),
        'show_admin_column' => true,
        'show_in_rest' => true,  
		'supports' => array('title','thumbnail'),
    );
      
    register_taxonomy( 'project_categories', array( 'project' ), $args);
      
}
add_action( 'init', 'project_register_taxonomy' );

/**
 * Client
 */
add_action('init', 'custom_post_client');

function custom_post_client(){
	$labels = array(
		'name' 				=> _x('Clients', 'Post Type General Name', 'logipro'),
		'singular_name' 	=> _x('Client', 'Post Type Singular Name' ,'logipro'),
		'add_new'			=> __('New Client', 'logipro'),
		'add_new_item'		=> __('Add New Client', 'logipro'),
		'edit_item'			=> __('Edit Client', 'logipro'),
		'view_item'			=> __('View Client', 'logipro'),
		'search_item'		=> __('Search Client', 'logipro'),
		'not_found'			=> __('No Client Found', 'logipro'),
		'not_found_in_trash'=> __('No Client Found in Trash', 'logipro'),
	);
	$args =array(
		'labels' 		=> $labels,
		'has_archive' 	=> true,
		'public'	 	=> true,
		'hierarchical'  => true,
		'supports' =>array(
			'title',
			'editor',
			'custom_fields',
			'excerpt',
			'thumbnail',
			'page_attributes'
		),
		'rewrite' => array('slug', 'clients'),
		'show_in_rest' =>true,
		'menu_icon' => 'dashicons-groups',
	);
	register_post_type('client',$args);
}

// Create Texonomy

function client_register_taxonomy() {    
      
    // books
    $labels = array(
        'name' => __( 'Categories' , 'logipro' ),
        'singular_name' => __( 'Category', 'logipro' ),
        'search_items' => __( 'Search Categories' , 'logipro' ),
        'all_items' => __( 'All Categories' , 'logipro' ),
        'edit_item' => __( 'Edit Category' , 'logipro' ),
        'update_item' => __( 'Update Categories' , 'logipro' ),
        'add_new_item' => __( 'Add New Category' , 'logipro' ),
        'new_item_name' => __( 'New Category' , 'logipro' ),
        'menu_name' => __( 'Categories' , 'logipro' ),
    );
      
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'sort' => true,
        'args' => array( 'orderby' => 'term_order' ),
        'rewrite' => array( 'slug' => 'client_categories' ),
        'show_admin_column' => true,
        'show_in_rest' => true
  
    );
      
    register_taxonomy( 'client_categories', array( 'client' ), $args);
      
}
add_action( 'init', 'client_register_taxonomy' );





