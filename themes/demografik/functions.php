<?php
/**
 * demografik functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package demografik
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
function demografik_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on demografik, use a find and replace
		* to change 'demografik' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'demografik', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'demografik' ),
			'menu-lang' => esc_html__( 'Languages', 'demografik' ),
			'media-menu' => esc_html__( 'Media resourses', 'demografik' ),
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
			'demografik_custom_background_args',
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
add_action( 'after_setup_theme', 'demografik_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function demografik_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'demografik_content_width', 640 );
}
add_action( 'after_setup_theme', 'demografik_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function demografik_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header widget', 'demografik' ),
			'id'            => 'header_one',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'demografik' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar interaktiv xarita', 'demografik' ),
			'id'            => 'sidebar-maps',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 1', 'demografik' ),
			'id'            => 'footer-widget-one',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 2', 'demografik' ),
			'id'            => 'footer-widget-two',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="footer-nav-menu %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="subtitle font__secondary--15">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 3', 'demografik' ),
			'id'            => 'footer-widget-three',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="subtitle font__secondary--15">',
			'after_title'   => '</h>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget 4', 'demografik' ),
			'id'            => 'footer-widget-four',
			'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h5 class="widget-title">',
			'after_title'   => '</h5>',
		)
	);
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar on post page left', 'demografik' ),
            'id'            => 'sidebar_post_1',
            'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
            'before_widget' => '<div id="%1$s" class="widget last-post %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar on post page right', 'demografik' ),
            'id'            => 'sidebar_post_2',
            'description'   => esc_html__( 'Add widgets here.', 'demografik' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'demografik_widgets_init' );

function image() { 
  get_template_part( './template-parts/image' );
}
add_shortcode('image', 'image');

function infographics() { 
  get_template_part( './template-parts/infographics' );
}
add_shortcode('infographics', 'infographics');

add_filter('get_the_archive_title_prefix', 'demografik_get_the_archive_title_prefix');
function demografik_get_the_archive_title_prefix($prefix) {
  if ($prefix === 'Category:' || $prefix === 'Tag:'|| $prefix === 'category:') {
    $prefix = '';
  }
  return $prefix;
}



require get_template_directory() . '/inc/BEM_Walker_Nav_Menu.php';
require get_template_directory() . '/inc/walker-nav-menu.php';

require get_template_directory() . '/inc/demogrf-scripts.php';

require get_template_directory() . '/inc/post-types.php';

// require get_template_directory() . '/inc/carbon-fields.php';


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
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
// отключить вывод мета тэга "generator"
remove_action('wp_head', 'wp_generator');
add_filter( 'wpcf7_validate_configuration', '__return_false' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

add_filter( 'body_class','body_classes' );
function body_classes( $classes ) {
 
    $classes[] = 'using-mouse';
     
    return $classes;
     
}


add_action('init', function() {
	pll_register_string('demografik', 'Digital library');
	pll_register_string('demografik', 'Search');
	pll_register_string('demografik', 'Categories');
	pll_register_string('demografik', 'Search Results for:');
	pll_register_string('demografik', 'About the instructor');
    pll_register_string('demografik', 'news');
  });

  add_filter("pre_get_posts", "tax_posts_per_page");
  function tax_posts_per_page($query)
  {
	  if (is_tax("library")) {
		  $query->set("posts_per_page", get_option("posts_per_page"));
	  }
	  return $query;
  }

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif ( is_tax() ) { //for custom post types
        $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title( '', false );
    }
    return $title;
});


add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class($classes, $item){
    $classes[] = 'media-menu__item';
    return $classes;
}