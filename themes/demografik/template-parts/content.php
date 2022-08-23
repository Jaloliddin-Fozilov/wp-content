<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>

            <div class="col-md-4 post-item">
                <div class="news">
                    <div class="news__img p-relative">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                        </a>
                    </div>
                    <?
                    if ( 'post' === get_post_type() ) :
                    ?>
                    <div class="entry-meta">
                        <?php
                         echo  '<div class="news-meta"><span>' . get_the_date( 'H:i / d.m.Y', get_the_ID() ) . '</span></div>';
                         ?>
                    </div><!-- .entry-meta -->
                    <?php endif; ?>

                    <a class="news__title" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                </div>
            </div>


