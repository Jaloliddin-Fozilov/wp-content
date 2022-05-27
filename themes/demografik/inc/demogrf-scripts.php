<?php
/**
 * Enqueue scripts and styles.
 */
function demografik_scripts() {
    wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), _S_VERSION );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'b4', get_template_directory_uri() . '/assets/css/b4.css', array(), _S_VERSION );
    wp_enqueue_style( 'flickity', get_template_directory_uri() . '/assets/css/flickity.css', array(), _S_VERSION );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );
    // wp_enqueue_style( 'redisgn', get_template_directory_uri() . '/assets/css/redesign.css', array(), _S_VERSION );
    // wp_enqueue_style( 'redisgn2', get_template_directory_uri() . '/assets/css/redesign2.css', array(), _S_VERSION );
    wp_enqueue_style( 'ekko-lightbox', get_template_directory_uri() . '/assets/css/ekko-lightbox.css', array(), _S_VERSION );
    wp_enqueue_style( 'slickcss',  get_template_directory_uri() . '/assets/css/slick.css', array(), _S_VERSION );
    wp_enqueue_style( 'custom',  get_template_directory_uri() . '/assets/css/custom.css', array(), _S_VERSION );
    wp_enqueue_style( 'tablet',  get_template_directory_uri() . '/assets/css/tablet.css', array(), _S_VERSION );
    wp_enqueue_style( 'mobile',  get_template_directory_uri() . '/assets/css/mobile.css', array(), _S_VERSION );
    wp_enqueue_style( 'course',  get_template_directory_uri() . '/assets/css/course.css', array(), _S_VERSION );
	wp_enqueue_style( 'demografik-style', get_stylesheet_uri(), array(), _S_VERSION );

    // new css
    wp_enqueue_style( 'fonts-2', get_template_directory_uri() . '/assets/css/css/fonts.css', array(), _S_VERSION );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/css/animate.css', array(), _S_VERSION );
    wp_enqueue_style( 'tutor-icon', get_template_directory_uri() . '/assets/css/tutor-icon.css', array(), _S_VERSION );
    wp_enqueue_style( 'macaw-elegant-tabs', get_template_directory_uri() . '/assets/css/css/macaw-elegant-tabs.css', array(), _S_VERSION );
    wp_enqueue_style( 'meanmenu', get_template_directory_uri() . '/assets/css/css/meanmenu.css', array(), _S_VERSION );
    wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/css/nice-select.css', array(), _S_VERSION );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/css/responsive.css', array(), _S_VERSION );
    wp_enqueue_style( 'owl-carousel.min', get_template_directory_uri() . '/assets/css/css/owl.carousel.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'owl.theme.default.min', get_template_directory_uri() . '/assets/css/css/owl.theme.default.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'demog-style', get_template_directory_uri() . '/assets/css/css/style.css', array(), _S_VERSION );

	wp_style_add_data( 'demografik-style', 'rtl', 'replace' );

    wp_enqueue_script( 'core', get_template_directory_uri() . '/assets/js/core.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'admiral', get_template_directory_uri() . '/assets/js/admiral-tabs.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true );
    // wp_enqueue_script( 'slickjs',  get_template_directory_uri() . '/assets/js/slick.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'ekko-lightbox', get_template_directory_uri() . '/assets/js/ekko-lightbox.min.js', array(), _S_VERSION, true );
    
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'flickity.pkgd', get_template_directory_uri() . '/assets/js/flickity.pkgd.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true );
    // New js
    wp_enqueue_script( 'jquery.appear.min', get_template_directory_uri() . '/assets/js/js/jquery.appear.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.magnific-popup.min', get_template_directory_uri() . '/assets/js/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.meanmenu.min', get_template_directory_uri() . '/assets/js/js/jquery.meanmenu.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.nice-select.min', get_template_directory_uri() . '/assets/js/js/jquery.nice-select.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri() . '/assets/js/js/jquery.waypoints.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'macaw-tabs', get_template_directory_uri() . '/assets/js/js/macaw-tabs.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/js/modernizr-3.8.0.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/assets/js/js/popper.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'slick.min', get_template_directory_uri() . '/assets/js/js/slick.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'admiral', get_template_directory_uri() . '/assets/js/admiral-tabs.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/js/wow.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'gsap.min', get_template_directory_uri() . '/assets/js/js/gsap.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'ScrollTrigger.min', get_template_directory_uri() . '/assets/js/js/ScrollTrigger.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'demografik', get_template_directory_uri() . '/assets/js/demografik.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/js/script.js', array(), _S_VERSION, true );
    

    wp_enqueue_script( 'demografik-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );


}
add_action( 'wp_enqueue_scripts', 'demografik_scripts' );
