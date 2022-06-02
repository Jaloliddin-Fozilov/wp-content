<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();
?>

<main id="main">
    <div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
        <div class="site-breadcrumb pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s"
                        data-wow-delay=".3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                        <?php the_archive_title( '<h1 class="breadcrumb-title">', '</h1>' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section category-wrap  pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm1.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'permanent_population', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span>(ming kishi)</span>
                            </div>
                            <div class="text-md text-blue-500">Doimiy aholi soni</div>
                            <div class="text-md text-italic">2021 yil holatiga</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm2.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'children_in_preschool_institutions', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">Oilalar soni</div>
                            <div class="text-md text-italic">2022 yil holatiga</div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm3.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span><?php $queried_object = get_queried_object(); $number = get_field( 'students_in_secondary_schools', $queried_object ); echo number_format($number, 0, '', ' '); ?></span>
                              <span></span></div>
                            <div class="text-md text-blue-500">Tug'ilish soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm4.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'students_in_higher_education', $queried_object ); echo number_format($number, 0, '', ' '); ?>  
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">O'lganlar soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm5.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'economically_occupied_population', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">Nikohlar soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm6.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                               <?php $queried_object = get_queried_object(); $number = get_field( 'number_of_sportsmen', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">Ajrim soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm7.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'number_of_travelers', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">Ko'chib kelganlar soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm8.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'number_of_pensioners_and_beneficiaries', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">Ko'chib ketganlar soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm9.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                  <?php $queried_object = get_queried_object(); $number = get_field( 'migratsion_harakat', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">Migrasion harakat soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm10.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'ortacha_aholi_soni', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span></span>
                            </div>
                            <div class="text-md text-blue-500">O'rtacha aholi soni soni</div>
                            <div class="text-md text-italic"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- tabs -->
    <div  class="section section__content-slider section__content-slider--pl section__content-slider--carousel section__bg--off-white">
        <div class="touch_slider container">

            <div class="top-seller-activation-2 slick-gutter-15 slick-arrow-between">
                
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">1 Yoshgacha o'lim koeffitsiyenti</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">Oila</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">100 ta nikohga ajrim</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">2009-2022 Tumanlar ming</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">2011-2022 yil Аxoli mehnatga loyiq tuman</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">Аjrim koeffitsienti</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">Аjrim</a></h4>
                </div>
                <div class="top-seller-style-one">
                    <a href="#" class="thumb mb-2">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                        <i class="ri-check-line fa fa-check"></i>
                    </a>
                    <h4 class="title pb-1"><a href="#">Аholining tabiiy xarakati</a></h4>
                </div>
                <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Yosh guruhlari boʼyicha doimiy aholi soni</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Zichlik</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Ko‘chib kelganlar</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Ko‘chib ketganlar soni</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Migrasion xarakat</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Nikoh koeffisienti</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Nikoh</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                        <a href="#" class="thumb mb-2">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                            <i class="ri-check-line fa fa-check"></i>
                        </a>
                        <h4 class="title pb-1"><a href="#">Reproduktiv yoshdagi (15-49) ayollar soni</a></h4>
                    </div>
                    <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">Tug‘ilish</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">Tug‘ilishning umumiy koeffisienti</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">O‘lganlar soni</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">O‘lim koeffisienti</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">O‘lim sabablari</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">O‘rtacha aholi</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">Hudud maydoni</a></h4>
                        </div>
                        <div class="top-seller-style-one">
                            <a href="#" class="thumb mb-2">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                                <i class="ri-check-line fa fa-check"></i>
                            </a>
                            <h4 class="title pb-1"><a href="#">Ma'muriy hududiy birliklar</a></h4>
                        </div>



            </div>


        </div>
        <div class="content_list">
            <li id="table_content_24" class="content_block">
                <div class="wrapper">
                    <ul class="button_list">
                        <li class="inner_block" data-id="85">
                            <button class="button_icon" data-id="85">
                                <img data-id="85" src="https://demografiya.uz/wp-content/themes/demografik/assets/images/icon1.png">
                            </button>
                        </li>
                        <li class="inner_block" data-id="86">
                            <button class="button_icon" data-id="86">
                                <img data-id="86" src="https://demografiya.uz/wp-content/themes/demografik/assets/images/icon3.png">
                            </button>
                        </li>
                        <li class="inner_block" data-id="87">
                            <button class="button_icon" data-id="87">
                                <img data-id="87" src="https://demografiya.uz/wp-content/themes/demografik/assets/images/icon4.png">
                            </button>
                        </li>
                        <li class="inner_block" data-id="88">
                            <button class="button_icon" data-id="88">
                                <img data-id="88" src="https://demografiya.uz/wp-content/themes/demografik/assets/images/icon6.png">
                            </button>
                        </li>
                    </ul>
                    <ul class="contents">
                        <li class="inner_content">
                        </li>
                        <li class="inner_content unvisible">
                        </li>
                        <li class="inner_content unvisible">
                        </li>
                        <li class="inner_content unvisible">
                        </li>
                    </ul>
                </div>
            </li>
        </div>


    </div>

</main>

<?php 
get_footer();