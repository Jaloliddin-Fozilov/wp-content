<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package demografik
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<?php wp_head(); ?>
</head>

<?php $image_url = get_the_post_thumbnail_url() ?>

<body <?php body_class(); ?>>  
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-wrapper">
            <div class="spinner"></div>
        </div>
    </div>
    <!-- Preloader-end -->
<div class="mim_tm_all_wrap" data-magic-cursor="" data-color="crimson">
<?php wp_body_open(); ?>
  <header class="section section__header">
        <div class="header--top">
            <div class="wrapper">

                <div class="top-nav">

                    <div class="stm-header__row stm-header__row_top">
                        <div class="stm-header__cell stm-header__cell_left col-md-3">
                            <div class="stm-header__element stm-header__element_">

                                <div class="stm-logo lang-uz logo-uz">
                                    <?php the_custom_logo();  ?>
                                </div>
                            </div>
                        </div>
                        <div class="stm-header__cell stm-header__cell_center col-md-4">
                            <div class="stm-header__element stm-header__element_">
                                <div class="stm-icontext ">
                                    <div class="languages">
                                        <ul>
                                            <li><a href="#" class="link top-bar__help top-bar__link">Oʻz</a>
                                            </li>
                                            <li><a href="#" class="link top-bar__help top-bar__link">Ўз</a></li>
                                            <li><a href="#" class="link top-bar__help top-bar__link">Ру</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="stm-header__element stm-header__element_icon_only">
                                <?php dynamic_sidebar('header_one'); ?>
                            </div>
                            <div class="stm-header__element stm-header__element_" style="display: none">
                                <div class="stm-text fwn">
                                    <a href="#" id="bvi-panel-show" class=" link top-bar__blind top-bar__link">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="stm-header__cell stm-header__cell_right col-md-5">
                            <div class="stm-header__element stm-header__element_">
                                <div class="stm-logo ">
                                    <a href="https://moiti.uz/">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/moiti_logo.svg" class="attachment-full size-full">
                                        <span>O‘zbekiston Respublikasi Oila va xotin-qizlar davlat qo‘mitasi
                                            huzuridagi «Oila va xotin-qizlar» ilmiy-tadqiqot instituti</span>
                                    </a>
                                </div>
                            </div>
                            <div class="stm-header__element stm-header__element_ unfpa-wrap">
                                <div class="unfpa-logo">
                                    <a href="https://www.unfpa.org/">
                                    <img src="<?php echo get_template_directory_uri();?>/assets/images/unfpa_logo.png" class="attachment-full size-full">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="header--bottom">

            <div class="wrapper">
                <nav class="nav-main">
                    <button class="nav__close" style="display: none;">

                        <span class="content">

                            <span class="text">Yopish</span>

                            <span class="icon__container">

                                <svg version="1.1" class="icon icon__close" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="4.9px"
                                    height="4.9px" viewBox="0 0 4.9 4.9" style="enable-background:new 0 0 4.9 4.9;"
                                    xml:space="preserve">

                                    <polygon class="st0"
                                        points="4.3,0 2.4,1.8 0.6,0 0,0.6 1.8,2.4 0,4.3 0.6,4.9 2.4,3 4.3,4.9 4.9,4.3 3,2.4 4.9,0.6 ">

                                    </polygon>

                                </svg>

                            </span>

                        </span>

                    </button>

                    <?php 
                       wp_nav_menu( [
                        'theme_location'  => 'menu-1',
                        'menu'            => '',
                        'container'       => false,
                        'menu_class'      => 'nav nav-pills',
                        'menu_id'         => 'menu-primary-navigation',
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => new BEM_Walker_Nav_Menu(),
                    ] );
                    ?>
                </nav>

            </div>

        </div>

        <button class="menu-toggle">Menu</button>

    </header>
