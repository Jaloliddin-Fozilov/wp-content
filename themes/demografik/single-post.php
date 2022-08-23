<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package demografik
 */

get_header();
?>

<main id="primary" class="site-main white-bg">
    <article class="page type-page status-publish hentry">

        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-2">
                    <?php if(is_active_sidebar( 'sidebar_post_1' )) : ?>
                        <?php dynamic_sidebar('sidebar_post_1'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-8">
                    <div class="single-layout__center slc">
                        <div class="single-header">
                            <h1 class="single-header__title"><?php the_title(); ?></h1>
                        </div>

                        <div class="single-content">
                            <div class="main-img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                            </div>

                            <?php the_content(); ?>
                        </div>



                    </div>
                </div>
                <div class="col-md-2">
                    <?php if(is_active_sidebar( 'sidebar_post_2' )) : ?>
                        <?php dynamic_sidebar('sidebar_post_2'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="block-title"><span>O'xshash ma'lumotlar</span></div>
            <?php global $post;  ?>
            <?php $categories = get_the_category($post->ID); ?>
            <?php if ($categories): ?>
                <?php $category_ids = array(); ?>
                <?php foreach($categories as $individual_category) : ?>
                    <?php $category_ids[] = $individual_category->term_id; ?>
                <?php endforeach; ?>
                <?php $args=array(
                    'category__in' => $category_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>3,
                    'ignore_sticky_posts'=>1,
                    'oderby' => 'rand'
                );?>
                <?php $my_query = new WP_Query($args); ?>
                <?php if( $my_query->have_posts() ) : ?>
                    <div class="row pt-5 pb-5">
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="col-md-3">
                                <div class="news">
                                    <div class="news__img p-relative">
                                        <a href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url(); ?>">
                                        </a>
                                    </div>
                                    <div class="news-meta"><span> <?php get_the_date( 'H:i / d.m.Y', get_the_ID() ) ?></span></div>
                                    <a class="news__title" href="#"><?php the_title() ?></a>
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_query();?>
            <?php endif; ?>
           <!-- .entry-footer -->
    </article><!-- #post-50 -->

</main><!-- #main -->


<?php
get_footer();