<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package demografik
 */

get_header();
global $wp_query;
?>


<main class="section__content-library">
    <section class="search search-result-page">
      <div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
        <div class="site-breadcrumb pb-100">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s"
                data-wow-delay=".3s"
                style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                <h1><?php pll_e('Digital library', 'demografik') ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="content">
			<div class="main__content">
				<div class="container justify-content-center">
            <h1 class="search-result-page-title">
              <?php
              /* translators: %s: search query. */
              printf( pll_e( 'Search Results for:', 'demografik' ), '<span>' . get_search_query() . '</span>' );
              ?>
            </h1>
				</div>
        <div class="container">
          <div class="files">
            <div class="d_library">
              <?php if ( have_posts() ) : ?>
                <?php
                  /* Start the Loop */
                  while ( have_posts() ) :
                    the_post();
                    if (has_post_thumbnail()) :
                    ?>
                  
                      <div class="explore-style-one">
                        <div class="thumb">
                          <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>"></a>
                        </div>
                        <!-- End .thumb -->
                        <div class="content">
                          <div class="header d-flex-between pt-4 pb-3">
                            <h3 class="title">
                              <a href="#">
                                <?php the_title(); ?>
                              </a>
                            </h3>
                          </div>

                          <div class="action-wrapper d-flex-between pt-2">
                            <a href="<?php the_permalink(); ?>" class="btn  btn-outline">
                              
                              <span>
                                <i class="fa fa-book"></i>
                                <?php pll_e("O'qish"); ?>
                              </span></a>
                          </div>
                          <!-- action-wrapper -->
                        </div>
                        <!-- End .content -->
                      </div>
                      <?php 
                        else :
                      ?>
                      <div class="explore-style-one">
                        <div class="thumb">
                          <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>"></a>
                        </div>
                        <!-- End .thumb -->
                        <div class="content">
                          <div class="header d-flex-between pt-4 pb-3">
                            <h3 class="title">
                              <a href="#">
                                <?php the_title(); ?>
                              </a>
                            </h3>
                          </div>

                          <div class="action-wrapper d-flex-between pt-2">
                            <a href="<?php the_permalink(); ?>" class="btn  btn-outline">
                              
                              <span>
                                <i class="fa fa-book"></i>
                                <?php pll_e("O'qish"); ?>
                              </span></a>
                          </div>
                          <!-- action-wrapper -->
                        </div>
                        <!-- End .content -->
                      </div>
                    <?php
                    endif;
                      endwhile;
                      the_posts_navigation();
                    else:
                      ?>
                      <p><?php pll_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'demografik'); ?></p>
                      <?php
                  endif;
                ?>
            </div> <!-- d_library -->
          </div> <!-- end .files -->
        </div> <!-- container -->
			</div> <!-- End .main__content -->
		</div>  <!-- content -->
  </main>

<?php
get_footer();
