<?php
/**
 * Template Name: Page infographics
 *
 */
get_header();

$queried = get_queried_object();


?>

	<main id="main">
		<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
			<div class="site-breadcrumb pb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
							<h1 class="breadcrumb-title"><?php _e('Media resourses', 'demografik') ?></h1>			
						</div>
					</div>
				</div>
			</div>			
		</div>

		
		<div class="nft-product-area product_explores pt-50 pb-50">
			<div class="container pt-50 mb-20">                   
				<div class="d-flex-between flex-wrap">
					<div class="section-title">
						<h2 class="section__title font__primary--31">
							
						</h2>
					</div> 
					<?php
						 wp_nav_menu( [
							'theme_location'  => 'media-menu',
							'menu'            => '',
							'container'       => false,
							'menu_class'      => 'media-page-tabs  button-group flex-wrap filters-button-group d-flex justify-content-start justify-content-lg-end mb-6',
							'menu_id'         => 'menu-primary-navigation',
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						] );

					?>
				</div>                    
			</div>
			<div class="container">
				<div class="tabs-content">
					<div  class="fade in admiral-active">
						<div class="section-title">
							<h2 class="section__title font__primary--31"><?php _e('Infographics', 'demografik') ?></h2>
						</div>
						<div class="row block">
							<?php
							$paged = get_query_var('paged') ? get_query_var('paged') : 1;
							$per_page = 12;
							$total = count(get_terms('infographic-cat'));

							$offset = (($paged - 1) * $per_page);

							$query = array(
								'taxonomy' => 'infographic-cat',
								'hide_empty' => false,
								'child_of' => 25,
								'paged'=>$paged,
								'number' => $per_page,
								'offset'     => $offset,			
							);
							$terms = get_terms( $query );
							if (!empty($terms)) :
								foreach( $terms as $term ) :
									if (empty(z_taxonomy_image_url($term->term_id))) {
										$image_url = get_template_directory_uri() . '/assets/images/atlas-2022.jpg';
									} else {
										$image_url = z_taxonomy_image_url($term->term_id);
									}
										?>
										<div class="col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
											<div class="explore-style-one media_block media-resourses">
												<div class="thumb">
													<a href="<?php echo get_term_link($term); ?>">
														<img src="<?php  echo $image_url; ?>">
													</a>                                                      
												</div>                             
												<div class="content">
													<div class="header d-flex-between pt-4 pb-3">
														<h3 class="title">
															<a href="<?php echo get_term_link($term); ?>">
																<?php echo $term->name; ?>
															</a>
														</h3>
													</div>
												</div>                               
											</div>
										</div>
									<?php
								endforeach;

							endif;
							
							?>                   
							
						</div>
						<div class="row block">
							<nav class="navigation pagination active">
								<div class="nav-links">
							<?php
							$big = 99999;
							echo paginate_links(array(
								// 'base' => get_pagenum_link(1) . '%_%',
								'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
								'format' => '/page/%#%',
								'current' => $paged,
								'total' => ceil($total / $per_page),
								'show_all'     => false, // показаны все страницы участвующие в пагинации
								'end_size'     => 1,     // количество страниц на концах
								'mid_size'     => 1,     // количество страниц вокруг текущей
								'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
								'prev_text'    => __('<i class="fa fa-chevron-left"></i>'),
								'next_text'    => __('<i class="fa fa-chevron-right"></i>'),
								'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
								'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
								'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
							));
							?>
								</div>
							</nav>
						</div>
					</div>
				</div><!-- /.tabs-content -->
			</div>
		</div>

	</main>
<?php
get_footer();