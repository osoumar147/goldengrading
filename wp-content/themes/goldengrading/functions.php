<?php

if ( is_user_logged_in() ) {
	//add_filter('show_admin_bar', '__return_true');
}

function my_theme_setup() {
// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'testing-theme' ),
		)
	);
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
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'testing-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'testing-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Logo', 'testing-theme' ),
			'id'            => 'footer-logo',
			'description'   => esc_html__( 'Add widgets here.', 'testing-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'testing-theme' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'testing-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'testing-theme' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'testing-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'testing-theme' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'testing-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Copyright', 'testing-theme' ),
			'id'            => 'copyright-text',
			'description'   => esc_html__( 'Add widgets here.', 'testing-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'my_theme_widgets_init' );
/*Enqueue scripts and styles*/
function my_theme_scripts() {
	wp_enqueue_style( 'testing-theme-style', get_stylesheet_uri());
	wp_enqueue_style( 'animate-css', get_template_directory_uri(). '/assets/css/animate.css');
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri(). '/assets/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style( 'slick-theme-style', get_template_directory_uri(). '/assets/css/slick-theme.css');
	wp_enqueue_style( 'slick-style', get_template_directory_uri(). '/assets/css/slick.css');
	wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/js/jquery.js');
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
	
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/assets/js/theme.js');
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
add_theme_support( 'post-thumbnails', apply_filters( 'pagelines_post-thumbnails', array('post') ) );

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	'page_title' => 'Theme General Settings',
	'menu_title' => 'Theme Settings',
	'menu_slug' => 'theme-general-settings',
	'capability' => 'edit_posts',
	'redirect' => false
	));

	acf_add_options_sub_page(array(
	'page_title' => 'Theme Header Settings',
	'menu_title' => 'Header',
	'parent_slug' => 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
	'page_title' => 'Theme Footer Settings',
	'menu_title' => 'Footer',
	'parent_slug' => 'theme-general-settings',
	));

}




//Register CPT for custom post
//function custom_post_type() {
//	$labels = array(
//		'name' => __( 'Services'),
//		'singular_name' => __( 'Service'),
//		'menu_name' => __( 'Our Services'),
//		'parent_item_colon' => __( 'Parent Services'),
//		'all_items' => __( 'All Services'),
//		'view_item' => __( 'View' ),
//		'add_new_item' => __( 'Add New '),
//		'add_new' => __( 'Add New'),
//		'edit_item' => __( 'Edit '),
//		'update_item' => __( 'Update'),
//		'search_items' => __( 'Search' ),
//		'not_found' => __( 'Not Found'),
//		'not_found_in_trash' => __( 'Not found in Trash'),
	//);
//	$args = array(
//		'label' => __( 'Services' ),
//		'description' => __( 'Services Updates and Changes' ),
//		'labels' => $labels,
//		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','page-attributes','common','services-categories' ),
//		'taxonomies' => array( 'services-categories'),
//		'hierarchical' => true,
//		'public' => true,
//		'show_ui' => true,
//		'show_in_menu' => true,
//		'show_in_nav_menus' => true,
//	    'show_in_admin_bar' => true,
//		'menu_position' => 2,
//		'show_in_rest' => true,
//	);
//	register_post_type( 'services', $args );
//}
//add_action( 'init', 'custom_post_type', 0 );

//Register custom taxonomy for custom post categories
//function create_my_taxonomies() {
//	$labels= array(
//		'name' => 'Service Categories',
//		'add_new_item' => 'Add New',
//		'new_item_name' => 'New',
//	);
//	$args = array(
//		'labels' => $labels,
//		'hierarchical' => true,
//		'show_admin_column' => true,
//		'public' => true,
//		'show_ui' => true,
//		'show_in_rest' => true,
//	);

//	register_taxonomy( 'services-categories', 'services', $args );
//}
//add_action( 'init', 'create_my_taxonomies', 0 );


if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function theme_slug_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
}

add_theme_support( 'title-tag' );