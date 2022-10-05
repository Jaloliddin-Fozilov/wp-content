<?php
/**
 * Template part for displaying wiki posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */





?>
   <?php if(is_single()) : ?>
        <header class="m-section-header m-section-header--f-h0 ">
            <?php  the_title('<h1 class="m-section-header__title f-h0">', '</h1>') ?>
        </header>
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
            <div class="row pt-5 pb-5">
                <div class="col-md-8">
                    <div class="wiki_detail">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>

        
    <?php endif; ?>

    <div class="col-md-6">
        <div class="kbe_category">
        <?php /*
            if( is_array( $cur_terms )){
                
                    echo  '<h2>';                
                    if( !$cur_terms[0]->name == '0-9' ){
                        
                        echo '<a href="'. get_term_link( $cur_terms[0]->term_id, $cur_terms[0]->taxonomy ) .'">'. $cur_terms[0]->name .' Harfi</a>';
                    }
                    echo '<a href="'. get_term_link( $cur_terms[0]->term_id, $cur_terms[0]->taxonomy ) .'">'. $cur_terms[0]->name .'</a>';
                    echo '</h2>';
            ?>
                <ul class="kbe_article_list">
                    <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
                </ul>
            <?php
            }
            */
            ?>


        </div>
    </div>
