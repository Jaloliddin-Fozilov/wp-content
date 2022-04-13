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

<main id="primary" class="site-main">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/demographic-pasport-single', get_post_type() );

		

			
		endwhile; // End of the loop.
		?>

	<div class="container">
		<div class="row">
			<?php $categories = get_the_category($post->ID); ?>
			<?php if ($categories): ?>
			<?php $category_ids = array(); ?>
			<?php foreach($categories as $individual_category) : ?>
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
			<section
				class="views-element-container related-content block block-views block-views-block-news-and-stories-block-related-content">
				<h2 class="container">Related posts</h2>

				<div class="container views-view-grid horizontal cols-7777 clearfix">
					<div class="row">
						<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<div class="col-12 col-md-4">
							<a href="<?php the_permalink()?>" role="article"
								class="node node--type-news-and-stories node--view-mode-teaser no-video">
								<header class="head-wrapper">
									<div class="image-wrapper">
										<div class="field field--name-field-media-image field--type-entity-reference field--label-hidden field__item">
											<article>
												<div
													class="field field--name-field-media-image field--type-image field--label-visually_hidden">
													<div class="field__item">
														<div class="image-container">
															<img src="<?php echo get_the_post_thumbnail_url() ?>"
																width="700" height="460" loading="lazy"
																typeof="foaf:Image">
														</div>
													</div>
												</div>
											</article>
										</div>
									</div>
								</header>
								<div class="card_wrapper">
									<h3 class="card_title">
										<span>
											<?php echo get_the_title(); ?>
										</span>
									</h3>
									<div
										class="field field--name-field-story-publication-date field--type-datetime field--label-hidden field__item">
										<time
											datetime="<?php echo get_the_date('j F Y'); ?>"><?php echo get_the_date('j F Y'); ?></time>
									</div>
								</div>
							</a>


						</div>
						<?php endwhile;?>
					</div>
				</div>


			</section>
			<?php endif; ?>
			<?php wp_reset_query();?>
			<?php endif; ?>
		</div>
	</div>

</main><!-- #main -->


<?php
get_footer();