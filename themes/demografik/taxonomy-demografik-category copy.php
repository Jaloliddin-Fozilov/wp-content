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
                if( $permanent_population ): ?>              
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
                <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_families', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_births', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_mumber_of_dead', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_marriages', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
          </div>
          <div class="row">
              <div class="col">
                <?php
                $queried_object = get_queried_object(); 
                $permanent_population = get_field('group_number_of_divorces', $queried_object );
                if( $permanent_population ): ?>              
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
                <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_immigrants', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_number_of_migrants', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_migration_movement', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
              <div class="col">
                <?php
                  $queried_object = get_queried_object(); 
                  $permanent_population = get_field('group_average_population', $queried_object );
                  if( $permanent_population ): ?>              
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
                  <?php endif; ?>
              </div>
          </div>
        </div>
    </div>

  <!-- tabs -->
    <div  class="section section__content-slider section__content-slider--pl section__content-slider--carousel section__bg--off-white">
      <div class="touch_slider container">
        <div class="top-seller-activation-2 owl-carousel">
          <?php 
            $carousels = carbon_get_term_meta( $category->term_id, 'demographics_rating' );
            if($carousels) :
              foreach ($carousels as $key => $value) :
              ?>
              <div class="top-seller-style-one block" data-uuid="<?php echo $key ?>">
                  <a  href="#table_content_<?php echo $key ?>" class="thumb mb-2">
                      <img src="<?php echo get_template_directory_uri() ?>/assets/images/alldems.png" width="50">
                      <i class="ri-check-line fa fa-check"></i>
                  </a>
                  <h4 class="title pb-1"><a href="#"><?php echo $value['title']; ?></a></h4>
              </div>
            
            <?php
            endforeach;
          endif;
          ?>
        </div>
      </div>
      <!-- tabs content -->
      <!-- Table and diagrams -->
      <ul class="content_list tabs__content container">
        <?php 
          if($carousels) :
            foreach ($carousels as $key => $value) :
            ?>
            <li id="table_content_<?php echo $key ?>" class="content_block unvisible">
              <?php echo do_shortcode($value['table']); ?>
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
                  <?php echo do_shortcode('diagramm_one'); ?>
                </li>
                  <li class="inner_content unvisible">
                  <?php echo do_shortcode('diagramm_two'); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode('diagramm_third'); ?>
                </li>
                <li class="inner_content unvisible">
                  <?php echo do_shortcode('diagramm_four'); ?>
                </li>
              </ul>
            </div>
          </li>
            <?php
            endforeach;
          endif;
          ?>

          
      </ul>
    </div>
</main>

<?php 
get_footer();