<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();
$cat = get_queried_object();

?>
    <div class="white-bg">
        <article class="page type-page status-publish hentry">

            <?php if ( have_posts() ) : ?>
                <header class="m-section-header m-section-header--f-h0 ">
                    <h1 class="m-section-header__title f-h0"> <?php echo $cat->name ?></h1>
                </header>
                <div class="section search pt-50 pb-50 search">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <form class="search__form" method="get" >
                                    <input type="text" class="search-field" name="s" placeholder="<?php pll_e('Search', 'demografik') ?>" value="<?php echo get_search_query(); ?>">
                                    <input type="hidden" name="post_type" value="wiki" />
                                    <input type="submit" value="<?php pll_e('Search', 'demografik') ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="b-wikiABC">
                        <?php

                            $args = array(
                                    'taxonomy' => 'wiki_cat', 
                                    'orderby' => 'name',
                                    'hide_empty' => false,
                                    );

                            if( $terms = get_terms( $args ) ) : 
                                echo '<ul>';
                                foreach ( $terms as $term ) {
									if( $term->term_id == $cat->term_id ) {
										echo '<li> <a href="' . get_term_link($term) . '" class="current_item">' . $term->name . '</a></li>';
									} else {
										echo '<li> <a href="' . get_term_link($term) . '" >' . $term->name . '</a></li>';
									}
                                    
                                }
                                echo '</ul>';
                            endif;
                        ?>
                    </div>
                </div>

                <div class="container">
                    <div class="row d-row pt-5 pb-5">
					<?php


								echo '<div class="col-md-6"><div class="kbe_category">';
								echo  '<h2>';                
									if( $cat->name == '0-9' ){
										echo '<a href="'. get_term_link( $cat->term_id, $term->taxonomy ) .'">'. $cat->name .' </a>';
									} else {
										echo '<a href="'. get_term_link( $cat->term_id, $term->taxonomy ) .'">'. $cat->name .' Harfi</a>';
									}
									
								echo '</h2>';
								
								$arguments = array(
									'post_type' => 'wiki',
									'order' => 'ASC', 
									'orderby' => 'title',
									'wiki_cat' => $cat->slug,
								);
								$query = new WP_Query( $arguments );
									/* Start the Loop */
								while ( $query->have_posts() ) :
									$query->the_post();

									?>
									<ul class="kbe_article_list">
										<li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
									</ul>
									<?php

								endwhile;
								echo '</div></div>';

                                      
                        ?>
                    </div>
                </div> 
                <?php         

                else:

                    get_template_part( 'template-parts/content', 'none' );

                endif;
            ?>                 
        </article>
    </div>
<?php
get_footer('zero');

