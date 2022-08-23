<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();


?>

	<main id="main" class="white-bg">

		<?php
		if ( have_posts() ) :
            ?>
            <article class="page type-page status-publish hentry">
                <header class="m-section-header m-section-header--f-h0 ">
                    <h1 class="m-section-header__title f-h0"><?php  single_post_title(); ?></h1>
                </header>
                <div class="container">
                    <div class="post-row pt-5 pb-5">
                        <?php

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /*
                             * Include the Post-Type-specific template for the content.
                             * If you want to override this in a child theme, then include a file
                             * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', get_post_type() );

                        endwhile;

                        the_posts_navigation();
                        ?>
                    </div>
                </div>
                <!-- .entry-footer -->
            </article><!-- #post-50 -->
            <?php
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
