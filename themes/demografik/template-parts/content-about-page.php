<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="m-section-header m-section-header--f-h0 ">
		<h1 class="m-section-header__title f-h0"><?php the_title(); ?></h1>
	</header>

	<?php demografik_post_thumbnail(); ?>

	<div class="entry-content">
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

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'demografik' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article>

