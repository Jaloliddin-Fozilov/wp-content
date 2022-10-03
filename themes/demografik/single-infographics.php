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

	<main id="primary" class="site-main white-bg mt-6">

		<?php
		while ( have_posts() ) :
			the_post();?>
            <div class="container">
                <div class="row">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="single-layout__center slc">
                            <div class="single-header">
                                <h1 class="single-header__title text-center pb-4 pt-4"><?php the_title(); ?></h1>
                            </div>

                            <div class="single-content">
                                <div class="main-img">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                </div>

                                <?php
                                    the_content(
                                        sprintf(
                                            wp_kses(
                                                /* translators: %s: Name of current post. Only visible to screen readers */
                                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'demografik' ),
                                                array(
                                                    'span' => array(
                                                        'class' => array(),
                                                    ),
                                                )
                                            ),
                                            wp_kses_post( get_the_title() )
                                        )
                                    );

                                    ?>
                            </div>
                        </div>
                    </article><!-- #post-<?php the_ID(); ?> -->
                </div>
            </div>
           

		<?php
       

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php


get_footer('white');