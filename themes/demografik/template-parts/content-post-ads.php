<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>
    <?php $image = has_post_thumbnail() ? get_the_post_thumbnail_url() : get_template_directory_uri() . '/assets/images/no-image_2.jpg' ?>

            <div class="col-md-4 post-item">
                <div class="news">
                    <div class="news__img p-relative">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo $image; ?>">
                        </a>
                    </div>
                    <div class="entry-meta">
                        <?php
                         echo  '<div class="news-meta"><span>' . get_the_date( 'H:i / d.m.Y', get_the_ID() ) . '</span></div>';
                         ?>
                    </div><!-- .entry-meta -->

                    <a class="news__title" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                </div>
            </div>


