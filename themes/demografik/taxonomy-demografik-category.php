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
                <?php
                $queried_object = get_queried_object(); 
                $permanent_population = get_field('group_permanent_population', $queried_object );
                 ?>              
                  <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm1.png" width="50">
                    </div>
                    <div class="flex flex-col flex-grow ml-2">
                      <div class="text-md text-blue-500">Doimiy aholi soni</div>
                        <div class="text-xl color_green amount py-1">
                          <span>
                            <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                          </span>
                          <span><?php echo $permanent_population['number_text']; ?></span>
                        </div>
                        
                        <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                    </div>
                  </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_families', $queried_object ); ?>
                              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm2.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">Oilalar soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_births', $queried_object );?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm3.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">Tug'ilish soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_mumber_of_dead', $queried_object );?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm4.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">O'lganlar soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_marriages', $queried_object );?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm5.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">Nikohlar soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
          </div>
          <div class="row">
              <div class="col">
                <?php
                $queried_object = get_queried_object(); 
                $permanent_population = get_field('group_number_of_divorces', $queried_object ); ?>              
                  <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm6.png" width="50">
                    </div>
                    <div class="flex flex-col flex-grow ml-2">
                      <div class="text-md text-blue-500">Ajrim soni</div>
                        <div class="text-xl color_green amount py-1">
                          <span>
                            <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                          </span>
                          <span><?php echo $permanent_population['number_text']; ?></span>
                        </div>
                        
                        <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                    </div>
                  </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_immigrants', $queried_object ); ?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm7.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">Ko'chib kelganlar soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_migrants', $queried_object ); ?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm8.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">Ko'chib ketganlar soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_migration_movement', $queried_object ); ?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm9.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">Migrasion harakat soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
                      </div>
                    </div>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_average_population', $queried_object ); ?>              
                    <div class="flex flex-row  shadow-sm rounded-t-lg single-black-area">
                      <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl">
                          <img src="<?php echo get_template_directory_uri() ?>/assets/images/dm10.png" width="50">
                      </div>
                      <div class="flex flex-col flex-grow ml-2">
                        <div class="text-md text-blue-500">O'rtacha aholi soni soni</div>
                          <div class="text-xl color_green amount py-1">
                            <span>
                              <?php $number = $permanent_population['number']; echo number_format($number, 0, '', ' '); ?>
                            </span>
                            <span><?php echo $permanent_population['number_text']; ?></span>
                          </div>
                          
                          <div class="text-md text-italic text-center"><?php echo $permanent_population['for_year']; ?></div>
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
                <a  href="#table_content_1" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">100 ta nikohga ajrim</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="2">
                <a  href="#table_content_2" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">1 Yoshgacha o'lim koeffitsiyenti</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="3">
                <a  href="#table_content_3" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Oila</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="4">
                <a  href="#table_content_4" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">2009-2022 Aholi soni</a></h4>
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
                <h4 class="title pb-1"><a href="#">Koʼchib kelganlar</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="12">
                <a  href="#table_content_12" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Koʼchib ketganlar soni</a></h4>
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
                <h4 class="title pb-1"><a href="#">Tugʼilish</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="18">
                <a  href="#table_content_18" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Oʼlganlar soni</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="19">
                <a  href="#table_content_19" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Oʼlim koeffisienti</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="20">
                <a  href="#table_content_20" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Oʼlim sabablari</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="21">
                <a  href="#table_content_21" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Oʼrtacha aholi</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="22">
                <a  href="#table_content_22" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Hudud maydoni</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="23">
                <a  href="#table_content_23" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Ma'muriy hududiy birliklar</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="24">
                <a  href="#table_content_24" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Kam ta'minlangan oilalar soni</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="25">
                <a  href="#table_content_25" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">18 yoshdan kichik bolali oilalar soni</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="26">
                <a  href="#table_content_26" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Koʼp bolali oilalar soni (5 bola va undan koʼp)</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="27">
                <a  href="#table_content_27" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Toʼliq boʼlmagan oilalar soni (otasi yoki onasi yoʼq oilalar)</a></h4>
            </div>
            <div class="top-seller-style-one block" data-uuid="28">
                <a  href="#table_content_28" class="thumb mb-2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                    <i class="ri-check-line fa fa-check"></i>
                </a>
                <h4 class="title pb-1"><a href="#">Nogironligi boʼlgan shaxslar bor oilalar soni</a></h4>
            </div>
        </div>
      </div>
      <!-- tabs content -->
      <!-- Table and diagrams -->
        <ul class="content_list tabs__content container">
          <li id="table_content_1" class="content_block unvisible">
              <?php $group = get_field('divorce_for_100_marriages', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_2" class="content_block unvisible">
              <?php $group = get_field('infant_mortality_rate', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_3" class="content_block unvisible">
              <?php $group = get_field('family', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_4" class="content_block unvisible">
              <?php $group = get_field('2009_2022_Population', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_5" class="content_block unvisible">
              <?php $group = get_field('the_population_district', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_6" class="content_block unvisible">
              <?php $group = get_field('divorce_rate', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_7" class="content_block unvisible">
              <?php $group = get_field('divorces', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_8" class="content_block unvisible">
              <?php $group = get_field('movement_population', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_9" class="content_block unvisible">
              <?php $group = get_field('population_by_age_group', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_10" class="content_block unvisible">
              <?php $group = get_field('density', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_11" class="content_block unvisible">
              <?php $group = get_field('immigrants', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_12" class="content_block unvisible">
              <?php $group = get_field('migration_movement', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_13" class="content_block unvisible">
              <?php $group = get_field('marriage_coefficients', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_14" class="content_block unvisible">
              <?php $group = get_field('marriage', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_15" class="content_block unvisible">
              <?php $group = get_field('reproductive_women', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_16" class="content_block unvisible">
              <?php $group = get_field('birth', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_17" class="content_block unvisible">
              <?php $group = get_field('birth_rate', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_18" class="content_block unvisible">
              <?php $group = get_field('number_of_dead', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_19" class="content_block unvisible">
              <?php $group = get_field('mortality_coefficient', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_20" class="content_block unvisible">
              <?php $group = get_field('causes_of_death', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_21" class="content_block unvisible">
              <?php $group = get_field('average_population', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_22" class="content_block unvisible">
              <?php $group = get_field('area_area', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_23" class="content_block unvisible">
              <?php $group = get_field('administrative_territorial', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_24" class="content_block unvisible">
              <?php $group = get_field('low_income_families', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_25" class="content_block unvisible">
              <?php $group = get_field('children_under_18_years', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_26" class="content_block unvisible">
              <?php $group = get_field('five_children_and_more', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_27" class="content_block unvisible">
              <?php $group = get_field('single_parent_families', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
          <li id="table_content_28" class="content_block unvisible">
              <?php $group = get_field('persons_with_disabilities', $queried_object ); ?>
              <?php echo do_shortcode($group['table']); ?>
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
                  <?php echo do_shortcode($group['diagram_one']); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_two']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_three']); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode($group['diagramm_four']); ?>
                </li>
              </ul>
            </div>
          </li>
        </ul>
    </div>
</main>

<?php 
get_footer();