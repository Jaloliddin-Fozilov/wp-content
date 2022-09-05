<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();
$arguments = array(
    'post_type' => 'wiki',
    'order' => 'ASC', 
    'orderby' => 'title',
);
$query = new WP_Query( $arguments );

?>
    <div class="white-bg">
        <article class="page type-page status-publish hentry">

            <?php if ( $query->have_posts() ) : ?>
                <header class="m-section-header m-section-header--f-h0 ">
                    <h1 class="m-section-header__title f-h0"> <?php pll_e('Demografik Lug\'at', 'demografik') ?> </h1>
                    
                </header>
                <div class="section search pt-50 pb-50 search">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <?php /*
                                <form class="search__form" method="get" >
                                    <input type="text" class="search-field" name="s" placeholder="<?php pll_e('Search', 'demografik') ?>" value="<?php echo get_search_query(); ?>">
                                    <input type="hidden" name="post_type" value="wiki" />
                                    <input type="submit" value="<?php pll_e('Search', 'demografik') ?>">
                                </form> 
                                */ ?>
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
                                    echo '<li> <a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                                }
                                echo '</ul>';
                            endif;
                        ?>
                    </div>
                </div>

                <div class="container">
                    <div class="row d-row pt-5 pb-5">
                        <?php
                            $args = array(
                                'taxonomy' => 'wiki_cat', 
                                'orderby' => 'name',
                                'order' => 'ASC', 
                                'hide_empty' => true,
                                );

                            if( $terms = get_terms( $args ) ) : ?>
                                
                                    <?php foreach ( $terms as $term ) {
                                            echo '<div class="col-md-6"><div class="kbe_category">';
                                            echo  '<h2>';                
                                                if( $term->name == '0-9' ){
                                                    echo '<a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'">'. $term->name .' </a>';
                                                } else {
                                                    echo '<a href="'. get_term_link( $term->term_id, $term->taxonomy ) .'">'. $term->name .' Harfi</a>';
                                                }
                                                
                                            echo '</h2>';
                                            
                                            $arguments = array(
                                                'post_type' => 'wiki',
                                                'order' => 'ASC', 
                                                'orderby' => 'title',
                                                'wiki_cat' => $term->slug,
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
                                        }
                                        ?>
                                <?php
                            endif;
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



