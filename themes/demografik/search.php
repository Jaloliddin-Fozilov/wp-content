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


<main>
    <section class="search search-result-page">
      <div class="my__container">
        <div class="page__body">
          <div class="headline">
            <h1><?php  pll_e('Digital library') ?></h1>
          </div>
        </div>
      </div>
    </section>
    <section class="main__content">
      <div class="container">
        <div class="files">
          <ul class="file__list">
		  <h1 class="search-result-page-title">
					<?php
					/* translators: %s: search query. */
					printf( pll_e( 'Search Results for:', 'demografik' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
            <?php

            if( have_posts() ) :
              while( have_posts() ) :
                  the_post();
                  ?>
                  <li class="file__list__item">
                    <?php if (has_post_thumbnail()) { ?>
                    <div class="img__content">
                      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="placeholder" width="80px">
                    </div>
                    <?php } else {  ?>
                      <div class="img__content">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/file__placeholder.png' ?>" alt="placeholder" width="80px">
                      </div>
                    <?php } ?>
                    <div class="text__content">
                      <a href="<?php echo get_permalink(); ?>" class="file__title">
                        <h3 class="fw__400">
                          <?php the_title(); ?></h3>
                        </h3>
                      </a>
                      <p class="file__date fw__400"><i class="fa fa-calendar fw__400"></i>
                      <?php echo get_the_date('j.n.Y'); ?> </p>
                    </div>
                  </li>
                <?php
                
            endwhile;
            the_posts_navigation();
          else:
            ?>
            <p><?php pll_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'demografik'); ?></p>
            <?php
          endif;
            wp_reset_postdata();
          ?>
          </ul>
          
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
