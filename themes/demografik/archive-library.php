<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package demografik
 */

get_header();
?>
		<main>
			<section class="search">
			<div class="my__container">
				<div class="page__body">
				<div class="headline">
					<h1><?php pll_e('Digital library', 'demografik') ?></h1>
				</div>

				<form role="search" class="search__form" method="get" id="searchform">
					<input type="text" name="s" placeholder="<?php pll_e('Search', 'demografik') ?>"  value="<?php echo get_search_query(); ?>"/>
					<input type="hidden" name="post_type" value="library" /> <!-- // hidden 'products' value -->
					<input type="submit" alt="Search" value="<?php pll_e('Search', 'demografik') ?>" />
				</form>
				</div>
			</div>
			</section>
			<section class="scrolable__categories">
			<?php
				if( $terms = get_terms( array( 'taxonomy' => 'library-category', 'orderby' => 'name' ) ) ) : 
					echo '<ul name="category__list">';
					foreach ( $terms as $term ) {
						echo '<li> <a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
					}
					echo '</ul>';
				endif;
			?>
			</section>
			<section class="main__content">
			<div class="container">
				<div class="full__search">
				<div class="my__container">
					<div class="inner__filter">
					<div class="filter__title">
						<h3> <?php  pll_e('Categories', 'demografik'); ?> </h3>
					</div>
					<div class="categories">
						<ul class="category__list">
						<?php
							if( $terms = get_terms( array( 'taxonomy' => 'library-category', 'orderby' => 'name' ) ) ) : 
								echo '<ul name="category__list">';
								foreach ( $terms as $term ) {
									echo '<li> <a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
								}
								echo '</ul>';
							endif;
						?>
						</ul>
					</div>
					</div>
				</div>
				</div>
				<div class="files">
				<ul class="file__list">
					<?php if ( have_posts() ) : ?>
						<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
							?>
								<li class="file__list__item">
									<div class="img__content">
										<?php if ( has_post_thumbnail() ) { ?>
											<img src="<?php the_post_thumbnail_url() ?>" alt="placeholder" width="80px">
										<?php } else {?>
											<img src="<?php echo get_template_directory_uri() . '/assets/images/file__placeholder.png'?>" alt="placeholder" width="80px">
										<?php } ?>
									</div>
									<div class="text__content">
										<a href="<?php the_permalink(); ?>" class="file__title">
										<h3 class="fw__400">
											<?php the_title(); ?>
										</h3>
										</a>
										<p class="file__date fw__400"><i class="fa fa-calendar fw__400"></i><?php echo get_the_date('j.m.Y'); ?></p>
									</div>
								</li>
							<?php
							endwhile;
							the_posts_navigation();
						else:

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
					
				</ul>
				</div>
			</div>
			</section>
		</main>

<?php 
get_footer();
