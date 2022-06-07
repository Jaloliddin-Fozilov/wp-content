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
                          <div class="text-md text-blue-500">Doimiy aholi soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'permanent_population', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'permanent_population_extend', $queried_object ) ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'permanent_population_for_year', $queried_object ) ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm2.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">Oilalar soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'children_in_preschool_institutions', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'children_in_preschool_institutions_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'children_in_preschool_institutions_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm3.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">Tug'ilish soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span><?php  $number = get_field( 'students_in_secondary_schools', $queried_object ); echo number_format($number, 0, '', ' '); ?></span>
                              <span><?php echo get_field( 'students_in_secondary_schools_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'students_in_secondary_schools_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm4.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">O'lganlar soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'students_in_higher_education', $queried_object ); echo number_format($number, 0, '', ' '); ?>  
                              </span>
                              <span><?php echo get_field( 'students_in_higher_education_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"> <?php echo get_field( 'students_in_higher_education_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm5.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">Nikohlar soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'economically_occupied_population', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'economically_occupied_population_extend', $queried_object );  ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center">
                            <?php echo get_field( 'economically_occupied_population_for_year', $queried_object );  ?>
                            </div>
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
                            <div class="text-md text-blue-500">Ajrim soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                               <?php $queried_object = get_queried_object(); $number = get_field( 'number_of_sportsmen', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'number_of_sportsmen_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'number_of_sportsmen_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm7.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">Ko'chib kelganlar soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'number_of_travelers', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'number_of_travelers_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"> <?php echo get_field( 'number_of_travelers_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm8.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">Ko'chib ketganlar soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'number_of_pensioners_and_beneficiaries', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'number_of_pensioners_and_beneficiaries_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'number_of_pensioners_and_beneficiaries_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm9.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">Migrasion harakat soni</div>
                            <div class="text-xl color_green amount py-1">
                              <span>
                                  <?php $queried_object = get_queried_object(); $number = get_field( 'migratsion_harakat', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'migratsion_harakat_extend', $queried_object ); ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'migratsion_harakat_for_year', $queried_object ); ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm10.png" width="50">
                        </div>
                        <div class="flex flex-col flex-grow ml-2">
                            <div class="text-md text-blue-500">O'rtacha aholi soni soni</div>
                            <div class="text-xl color_green amount py-1">
                              
                              <span>
                                <?php $queried_object = get_queried_object(); $number = get_field( 'ortacha_aholi_soni', $queried_object ); echo number_format($number, 0, '', ' '); ?>
                              </span>
                              <span><?php echo get_field( 'ortacha_aholi_soni_extend', $queried_object ) ?></span>
                            </div>
                            
                            <div class="text-md text-italic text-center"><?php echo get_field( 'ortacha_aholi_soni_for_year', $queried_object ) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- tabs -->
    <div  class="section section__content-slider section__content-slider--pl section__content-slider--carousel section__bg--off-white">
      <div class="touch_slider container">
        <div class="top-seller-activation-2 owl-carousel">
          <div class="top-seller-style-one block" data-uuid="1">
              <a href="#table_content_1" class="thumb mb-2 " >
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">1 Yoshgacha o'lim koeffitsiyenti</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="2">
              <a href="#table_content_2" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Oila</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="3">
              <a  href="#table_content_3" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">100 ta nikohga ajrim</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="4">
              <a  href="#table_content_4" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">2009-2022 Tumanlar ming</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="5">
              <a  href="#table_content_5" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">2011-2022 yil Аxoli mehnatga loyiq tuman</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="6">
              <a  href="#table_content_6" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Аjrim koeffitsienti</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="7">
              <a  href="#table_content_7" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Аjrim</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="8">
              <a  href="#table_content_8" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Аholining tabiiy xarakati</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="9">
              <a  href="#table_content_9" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Yosh guruhlari boʼyicha doimiy aholi soni</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="10">
              <a  href="#table_content_10" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Zichlik</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="11">
              <a  href="#table_content_11" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Ko‘chib kelganlar</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="12">
              <a  href="#table_content_12" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Ko‘chib ketganlar soni</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="13">
              <a  href="#table_content_13" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Migrasion xarakat</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="14">
              <a  href="#table_content_14" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Nikoh koeffisienti</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="15">
              <a  href="#table_content_15" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Nikoh</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="16">
              <a  href="#table_content_16" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Reproduktiv yoshdagi (15-49) ayollar soni</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="17">
              <a  href="#table_content_17" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Tug‘ilish</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="18">
              <a  href="#table_content_18" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Tug‘ilishning umumiy koeffisienti</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="19">
              <a  href="#table_content_19" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">O‘lganlar soni</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="20">
              <a  href="#table_content_20" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">O‘lim koeffisienti</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="21">
              <a  href="#table_content_21" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">O‘lim sabablari</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="22">
              <a  href="#table_content_22" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">O‘rtacha aholi</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="23">
              <a  href="#table_content_23" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Hudud maydoni</a></h4>
          </div>
          <div class="top-seller-style-one block" data-uuid="24">
              <a  href="#table_content_24" class="thumb mb-2">
                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                  <i class="ri-check-line fa fa-check"></i>
              </a>
              <h4 class="title pb-1"><a href="#">Ma'muriy hududiy birliklar</a></h4>
          </div>
        </div>
      </div>
      <!-- tabs content -->
      <!-- Table and diagrams -->
      <ul class="content_list tabs__content">
          <li id="table_content_1" class="content_block unvisible">
              <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode1', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="1">
                  <button class="button_icon" data-id="1">
                    <img data-id="1" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="2">
                  <button class="button_icon" data-id="2">
                    <img data-id="2" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="3">
                  <button class="button_icon" data-id="3">
                    <img data-id="3" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="4">
                  <button class="button_icon" data-id="4">
                    <img data-id="4" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one1', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two1', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three1', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four1', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_2" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode2', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="5">
                  <button class="button_icon" data-id="5">
                    <img data-id="5" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="6">
                  <button class="button_icon" data-id="6">
                    <img data-id="6" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="7">
                  <button class="button_icon" data-id="7">
                    <img data-id="7" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="8">
                  <button class="button_icon" data-id="8">
                    <img data-id="8" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one2', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two2', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three2', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four2', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_3" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode3', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="9">
                  <button class="button_icon" data-id="9">
                    <img data-id="9" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="10">
                  <button class="button_icon" data-id="10">
                    <img data-id="10" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="11">
                  <button class="button_icon" data-id="11">
                    <img data-id="11" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="12">
                  <button class="button_icon" data-id="12">
                    <img data-id="12" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one3', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two3', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three3', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four3', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_4" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode4', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="13">
                  <button class="button_icon" data-id="13">
                    <img data-id="13" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="14">
                  <button class="button_icon" data-id="14">
                    <img data-id="14" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="15">
                  <button class="button_icon" data-id="15">
                    <img data-id="15" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="16">
                  <button class="button_icon" data-id="16">
                    <img data-id="16" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one4', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two4', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three4', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four4', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_5" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode5', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="17">
                  <button class="button_icon" data-id="17">
                    <img data-id="17" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="18">
                  <button class="button_icon" data-id="18">
                    <img data-id="18" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="19">
                  <button class="button_icon" data-id="19">
                    <img data-id="19" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="20">
                  <button class="button_icon" data-id="20">
                    <img data-id="20" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one5', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two5', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three5', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four5', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_6" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode6', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="21">
                  <button class="button_icon" data-id="21">
                    <img data-id="21" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="22">
                  <button class="button_icon" data-id="22">
                    <img data-id="22" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="23">
                  <button class="button_icon" data-id="23">
                    <img data-id="23" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="24">
                  <button class="button_icon" data-id="24">
                    <img data-id="24" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one6', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two6', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three6', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four6', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_7" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode7', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="25">
                  <button class="button_icon" data-id="25">
                    <img data-id="25" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="26">
                  <button class="button_icon" data-id="26">
                    <img data-id="26" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="27">
                  <button class="button_icon" data-id="27">
                    <img data-id="27" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="28">
                  <button class="button_icon" data-id="28">
                    <img data-id="28" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one7', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two7', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three7', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four7', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_8" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode8', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="29">
                  <button class="button_icon" data-id="29">
                    <img data-id="29" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="30">
                  <button class="button_icon" data-id="30">
                    <img data-id="30" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="31">
                  <button class="button_icon" data-id="31">
                    <img data-id="31" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="32">
                  <button class="button_icon" data-id="32">
                    <img data-id="32" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one8', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two8', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three8', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four8', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_9" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode9', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="33">
                  <button class="button_icon" data-id="33">
                    <img data-id="33" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="34">
                  <button class="button_icon" data-id="34">
                    <img data-id="34" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="35">
                  <button class="button_icon" data-id="35">
                    <img data-id="35" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="36">
                  <button class="button_icon" data-id="36">
                    <img data-id="36" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one9', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two9', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three9', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four9', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_10" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode10', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="37">
                  <button class="button_icon" data-id="37">
                    <img data-id="37" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="38">
                  <button class="button_icon" data-id="38">
                    <img data-id="38" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="39">
                  <button class="button_icon" data-id="39">
                    <img data-id="39" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="40">
                  <button class="button_icon" data-id="40">
                    <img data-id="40" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one10', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two10', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three10', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four10', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_11" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode11', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="41">
                  <button class="button_icon" data-id="41">
                    <img data-id="41" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="42">
                  <button class="button_icon" data-id="42">
                    <img data-id="42" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="43">
                  <button class="button_icon" data-id="43">
                    <img data-id="43" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="44">
                  <button class="button_icon" data-id="44">
                    <img data-id="44" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one11', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two11', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three11', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four11', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_12" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode12', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="45">
                  <button class="button_icon" data-id="45">
                    <img data-id="45" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="46">
                  <button class="button_icon" data-id="46">
                    <img data-id="46" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="47">
                  <button class="button_icon" data-id="47">
                    <img data-id="47" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="48">
                  <button class="button_icon" data-id="48">
                    <img data-id="48" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one12', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two12', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three12', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four12', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_13" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode13', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="45">
                  <button class="button_icon" data-id="45">
                    <img data-id="45" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="46">
                  <button class="button_icon" data-id="46">
                    <img data-id="46" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="47">
                  <button class="button_icon" data-id="47">
                    <img data-id="47" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="48">
                  <button class="button_icon" data-id="48">
                    <img data-id="48" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one13', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two13', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three13', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four13', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_14" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode14', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="45">
                  <button class="button_icon" data-id="45">
                    <img data-id="45" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="46">
                  <button class="button_icon" data-id="46">
                    <img data-id="46" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="47">
                  <button class="button_icon" data-id="47">
                    <img data-id="47" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="48">
                  <button class="button_icon" data-id="48">
                    <img data-id="48" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one14', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two14', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">

                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three14', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four14', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_15" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode15', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="49">
                  <button class="button_icon" data-id="49">
                    <img data-id="49" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="50">
                  <button class="button_icon" data-id="50">
                    <img data-id="50" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="51">
                  <button class="button_icon" data-id="51">
                    <img data-id="51" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="52">
                  <button class="button_icon" data-id="52">
                    <img data-id="52" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one15', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two15', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three15', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four15', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_16" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode16', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="53">
                  <button class="button_icon" data-id="53">
                    <img data-id="53" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="54">
                  <button class="button_icon" data-id="54">
                    <img data-id="54" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="55">
                  <button class="button_icon" data-id="55">
                    <img data-id="55" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="56">
                  <button class="button_icon" data-id="56">
                    <img data-id="56" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one16', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two16', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three16', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four16', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_17" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode17', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="57">
                  <button class="button_icon" data-id="57">
                    <img data-id="57" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="58">
                  <button class="button_icon" data-id="58">
                    <img data-id="58" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="59">
                  <button class="button_icon" data-id="59">
                    <img data-id="59" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="60">
                  <button class="button_icon" data-id="60">
                    <img data-id="60" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one17', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two17', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three17', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four17', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_18" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode18', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="61">
                  <button class="button_icon" data-id="61">
                    <img data-id="61" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="62">
                  <button class="button_icon" data-id="62">
                    <img data-id="62" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="63">
                  <button class="button_icon" data-id="63">
                    <img data-id="63" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="64">
                  <button class="button_icon" data-id="64">
                    <img data-id="64" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one18', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two18', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three18', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four18', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_19" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode19', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="65">
                  <button class="button_icon" data-id="65">
                    <img data-id="65" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="66">
                  <button class="button_icon" data-id="66">
                    <img data-id="66" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="67">
                  <button class="button_icon" data-id="67">
                    <img data-id="67" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="68">
                  <button class="button_icon" data-id="68">
                    <img data-id="68" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one19', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two19', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three19', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four19', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_20" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode20', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="69">
                  <button class="button_icon" data-id="69">
                    <img data-id="69" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="70">
                  <button class="button_icon" data-id="70">
                    <img data-id="70" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="71">
                  <button class="button_icon" data-id="71">
                    <img data-id="71" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="72">
                  <button class="button_icon" data-id="72">
                    <img data-id="72" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one20', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two20', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three20', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four20', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_21" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode21', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="73">
                  <button class="button_icon" data-id="73">
                    <img data-id="73" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="74">
                  <button class="button_icon" data-id="74">
                    <img data-id="74" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="75">
                  <button class="button_icon" data-id="75">
                    <img data-id="75" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="76">
                  <button class="button_icon" data-id="76">
                    <img data-id="76" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one21', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two21', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three21', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four21', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_22" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode22', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="77">
                  <button class="button_icon" data-id="77">
                    <img data-id="77" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="78">
                  <button class="button_icon" data-id="78">
                    <img data-id="78" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="79">
                  <button class="button_icon" data-id="79">
                    <img data-id="79" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="80">
                  <button class="button_icon" data-id="80">
                    <img data-id="80" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one22', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two22', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three22', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four22', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_23" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode23', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="81">
                  <button class="button_icon" data-id="81">
                    <img data-id="81" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="82">
                  <button class="button_icon" data-id="82">
                    <img data-id="82" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="83">
                  <button class="button_icon" data-id="83">
                    <img data-id="83" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="84">
                  <button class="button_icon" data-id="84">
                    <img data-id="84" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one23', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two23', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three23', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four23', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_24" class="content_block unvisible">
            <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'table_shortcode24', $queried_object )); ?>
            <div class="wrapper">
              <ul class="button_list">
                <li class="inner_block" data-id="85">
                  <button class="button_icon" data-id="85">
                    <img data-id="85" src="<?php echo get_template_directory_uri() . '/assets/images/icon1.png'?>" alt="" width="31.5px">
                  </button>
                </li>
                <li class="inner_block" data-id="86">
                  <button class="button_icon" data-id="86">
                    <img data-id="86" src="<?php echo get_template_directory_uri() . '/assets/images/icon3.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="87">
                  <button class="button_icon" data-id="87">
                    <img data-id="87" src="<?php echo get_template_directory_uri() . '/assets/images/icon4.png'?>" alt="">
                  </button>
                </li>
                <li class="inner_block" data-id="88">
                  <button class="button_icon" data-id="88">
                    <img data-id="88" src="<?php echo get_template_directory_uri() . '/assets/images/icon6.png'?>" alt="">
                  </button>
                </li>
              </ul>
              <ul class="contents">
                <li class="inner_content">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_one24', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                    <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_two24', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_three24', $queried_object )); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php $queried_object = get_queried_object(); echo do_shortcode(get_field( 'diagram_four24', $queried_object )); ?>
                </li>
              </ul>
            </div>
          </li>
      </ul>
    </div>
</main>

<?php 
get_footer();