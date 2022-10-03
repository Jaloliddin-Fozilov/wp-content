<?php

get_header();
$term = get_queried_object();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;


?>

	<main id="main">
		<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
			<div class="site-breadcrumb pb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
							<h1 class="breadcrumb-title"><?php echo $term->name; ?></h1>                                    				
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
					<div class="admiral-active">
						<div class="row block">
							<?php
								$postslistdocument = get_posts( [
									'posts_per_page' => 100,
									'post_type' => 'infographics',
									'infographic-cat' => 'document',
									'order'=> 'DESC',
									'orderby' => 'date',
									'paged'   => $paged,
								] ); 
							
							?>
							<!-- Hisobot va hujjatlar -->
							<div>
								<div class="section-title">
									<h2 class="section__title font__primary--31">Hisobot va hujjatlar</h2>
								</div>
								<div class="row block">
									<?php  
										foreach( $postslistdocument as $post ):
											setup_postdata($post);
												?>
												<div class="col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
													<div class="explore-style-one media_block media-resourses">
														<div class="thumb">
															<a href="<?php the_permalink(); ?>">
																<img src="<?php echo the_post_thumbnail_url(); ?>" class="video-21-9-rate-images">
															</a>
														</div>
														<div class="content">
															<div class="header d-flex-between pt-4 pb-3">
																<h3 class="title">
																	<a href="<?php echo get_term_link($term); ?>">
																		<?php the_title();  ?>
																	</a>
																</h3>
															</div>
														</div>
													</div>
												</div>
											<?php
										endforeach;
										wp_reset_postdata();
									?>
								</div>
							</div>
						</div>
						<?php
								$total_pages = $query->max_num_pages;
								if ($total_pages > 1){
				
									$current_page = max(1, get_query_var('paged'));
									?>
									<nav class="navigation pagination active">
										<div class="nav-links">
									<?php
									echo paginate_links(array(
										'base' => get_pagenum_link(1) . '%_%',
										'format' => '/page/%#%',
										
										'current' => $current_page,
										'total' => $total_pages,
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
									
									<?php
								}
								?>

							
					</div>
				</div>
			</div>
		</div>

	</main>
<?php
get_footer();
