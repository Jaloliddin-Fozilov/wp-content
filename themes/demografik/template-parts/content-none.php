<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

?>



<main id="primary" class="site-main container">

	<section class="error-404 not-found">
		<header class="page-header">
			<h2 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'demografik' ); ?></h2>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'demografik' ); ?></p>

				

				<div class="widget widget_categories" style="display:none">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'demografik' ); ?></h2>
					<ul>
						<?php
						wp_list_categories(
							array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							)
						);
						?>
					</ul>
				</div><!-- .widget -->

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->





<!-- older version -->
<section class="no-results not-found" style="display:none">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'demografik' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'demografik' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'demografik' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'demografik' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

