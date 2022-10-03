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
								
								// $arguments = array(
								// 	'post_type' => 'wiki',
								// 	'order' => 'ASC', 
								// 	'orderby' => 'title',
								// 	'wiki_cat' => $cat->slug,
								// );

                                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                                $args = array(
                                    'posts_per_page' => 16,
                                    'orderby'     => 'date',
                                    'order'       => 'DESC',
                                    'include'     => array(),
                                    'exclude'     => array(),
                                    'meta_key'    => '',
                                    'meta_value'  =>'',
                                    'post_type'   => 'wiki',
                                    'paged'=>$paged,
                                    'suppress_filters' => true,
                                    'wiki_cat' => $cat->slug,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'wiki_cat',
                                            'field' => 'term_id', 
                                            'terms' => $cat->term_id
                                            
                                        )
                                    )			
                                );// end args

								$query = new WP_Query( $args );
									/* Start the Loop */
                                echo '<ul class="kbe_article_list">';
                                    while ( $query->have_posts() ) :
                                        $query->the_post();

                                        ?>
                                        
                                            <li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
                                        
                                        <?php

                                    endwhile;
                                echo '</ul>';
                                $total_pages = $query->max_num_pages;
								echo '</div></div>';

                                      
                        ?>
                    </div>
                    <?php
                        if ($total_pages > 1){
		
                            $current_page = max(1, get_query_var('paged'));
                            ?>
                            <nav class="navigation pagination active">
                                <div class="nav-links">
                            <?php
                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => '/page/%#%',
                                
                                'current' => $current_page,
                                'total' => $total_pages,
                                'show_all'     => false, // показаны все страницы участвующие в пагинации
                                'end_size'     => 1,     // количество страниц на концах
                                'mid_size'     => 1,     // количество страниц вокруг текущей
                                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                                'prev_text'    => __('<i class="fa fa-chevron-left"></i>'),
                                'next_text'    => __('<i class="fa fa-chevron-right"></i>'),
                                'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                                'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                                
                                'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
                            ));
                            ?>
                                </div>
                            </nav>
                            
                            <?php
                        }
                        ?>
                </div> 
                <?php     

                else:

                    get_template_part( 'template-parts/content', 'none' );

                endif;
            ?>                 
        </article>
    </div>
<?php
get_footer('white');

