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
								// $postslistvideo = get_posts( [
								// 	'posts_per_page' =>  16,
								// 	'post_type' => 'infographics',
								// 	'infographic-cat' => 'video',
								// 	'order'=> 'DESC',
								// 	'orderby' => 'date',
								// 	'paged'   => $paged,
								// ] );
								
								$query = new WP_Query(array(
									'post_type' => 'infographics',
									'post_per_page' => 16,
									'paged'=>$paged,
									'tax_query' => array(
										array(
											'taxonomy' => 'infographic-cat',
											'field' => 'id',
											'terms' => $term->term_id,
										)
									),
									
								));
							
							?>
							<div>
								<div class="section-title">
									<h2 class="section__title font__primary--31">Video</h2>
								</div>

								<div class="row row__video">
									<?php
									foreach( $postslistvideo as $post ):
										setup_postdata($post);
										// Load value.
										$iframe = get_field('video_link');
										// Use preg_match to find iframe src.
										preg_match('/src="(.+?)"/', $iframe, $matches);
										$src = $matches[1];
										?>
										<div class="video-block__item col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
											<div class="explore-style-one media_block media-resourses">
												<div class="video-link">
													<iframe src="<?php echo $src;?>" width="100%" height="100%" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture sandbox" allowfullscreen ></iframe>
												</div>
											
												<div class="content">
													<div class="header d-flex-between pt-4 pb-3">
														<h3 class="title"><?php echo wp_trim_words( get_the_title(), 8 );  ?>	</h3>
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
