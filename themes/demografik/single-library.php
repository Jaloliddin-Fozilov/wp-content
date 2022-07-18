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
	<main id="primary" class="site-main d-container pt-5 pb-5">

	<?php
	while ( have_posts() ) :
		the_post();?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-6">
				<header class="o-book__titles">
					<p class="o-book__category f-secondary">
						<a href="#">Kitoblar</a>
					</p>
					<h1 class="o-book__title f-h4"><?php the_title(); ?></h1>
				</header>
				<div class="o-book__meta">
					<div class="o-book__authors f-landing">
						<?php the_field('author'); ?>
					</div>
					<div class="o-book-meta pt-2 pb-2 mt-3">
						<div class="o-book-meta-item"><span class="pr-2">Nashr etilgan:</span><span><?php the_field('publish_year'); ?></span></div>
						<div class="o-book-meta-item"><span class="pr-2">Sahifalar:</span><span><?php the_field('pages'); ?></span></div>
					</div>
					<div class="o-book__blurb f-landing">
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
			</div>
			<div class="col-md-4 col-md-offset-2">
				<div class="book-thumb">							
					<img src="<?php echo get_the_post_thumbnail_url(); ?>">												
				</div>
				<a href="#book-item" class="btn-readmore" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">O'qish</a>
				
			</div>
		</div>
		<div class="book-entry w-100 mt-4 collapse" id="book-item">
			<?php the_field('book'); ?>
		</div>

		<footer class="entry-footer">
			<?php demografik_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-<?php the_ID(); ?> -->

<?php


endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();