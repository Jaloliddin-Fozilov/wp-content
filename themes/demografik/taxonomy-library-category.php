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
	<main class="section__content-library">
		<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
			<div class="site-breadcrumb pb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s"
							data-wow-delay=".3s"
							style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
							<h1><?php pll_e('Digital library', 'demografik') ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section search pt-50 pb-50 search">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col">
						<form role="search" class="search__form action="<?php echo site_url('/'); ?>" method="get" id="searchform">
							<input type="text" name="s" placeholder="<?php pll_e('Search', 'demografik') ?>"/>
							<input type="hidden" name="post_type" value="library" /> <!-- // hidden 'products' value -->
							<input type="submit" alt="Search" value="<?php pll_e('Search', 'demografik') ?>" />
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="scrolable__categories">
				<?php
					if( $terms = get_terms( array( 'taxonomy' => 'library-category', 'orderby' => 'name' ) ) ) : 
						echo '<ul name="category__list">';
						foreach ( $terms as $term ) {
							echo '<li> <a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
						}
						echo '</ul>';
					endif;
				?>
			</div>
			<div class="main__content">
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
						<div class="d_library_page">
							<?php if ( have_posts() ) : ?>
								<?php
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();
									?>
											<div class="explore-style-one">
												<div class="thumb">
													<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>"></a>
												</div>
												<!-- End .thumb -->
												<div class="content">
													<div class="header d-flex-between pt-4 pb-3">
														<h3 class="title">
															<a href="#">
																<?php the_title(); ?>
															</a>
														</h3>
													</div>

													<div class="action-wrapper d-flex-between pt-2">
														<a href="<?php the_permalink(); ?>" class="btn  btn-outline">
															
															<span>
																<i class="fa fa-book"></i>
																<?php pll_e("O'qish"); ?>
															</span></a>
													</div>
													<!-- action-wrapper -->
												</div>
												<!-- End .content -->
											</div>
										
											<?php
											endwhile;
											the_posts_navigation();
										else:

										get_template_part( 'template-parts/content', 'none' );

									endif;
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

<?php 
get_footer();
