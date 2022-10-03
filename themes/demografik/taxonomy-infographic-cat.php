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
							
							if ($query->have_posts()) :
								while ($query->have_posts()) :
									$query->the_post();
									if(has_post_thumbnail()):
										?>
										<div>
										<?php 
												if( '' !== $post->post_content && $term->term_id != 24 ) { ?>
													<div class="video-21-9-rate-wrapepr img_url col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
														<div class="explore-style-one media_block media-resourses">
															<div class="thumb">	
																<a data-toggle="modal" data-target="#modal-<?php the_ID() ?>" style="display: flex;justify-content: center; position: relative;">
																	<img src="<?php echo get_template_directory_uri() . '/assets/images/play_icon.png' ?>" class="play_icon">
																	<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
																</a>
															</div>
															<?php the_field('video_link'); ?>
															<div class="content">
																<div class="header d-flex-between pt-4 pb-3">
																	<h3 class="title"><?php the_title(); ?>	</h3>
																</div>
															</div>
														</div>
														
													</div>
												<?php }else if ($term->term_id === 24) { ?> 
													<a href="<?php the_permalink() ?>">
														<div class="video-21-9-rate-wrapepr img_url col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
															<div class="explore-style-one media_block media-resourses">
																<div class="thumb">
																	<img src="<?php echo the_post_thumbnail_url() ?>" class="video-21-9-rate-images">
																</div>
																<div class="content">
																	<div class="header d-flex-between pt-4 pb-3">
																		<h3 class="title"><?php the_title(); ?>	</h3>
																	</div>
																</div>
															</div>
														</div>
													</a>
													
												<?php } else { ?>
													<div class="video-21-9-rate-wrapepr img_url col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
														<div class="explore-style-one media_block media-resourses">
															<div class="thumb">		
																<a class="href_img" href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>" data-gallery="infographics"
																	data-toggle="lightbox" data-target=".bd-example-modal-lg">
																	<img src="<?php echo the_post_thumbnail_url() ?>" class="video-21-9-rate-images">
																</a>
															</div>
															<div class="content">
																<div class="header d-flex-between pt-4 pb-3">
																	<h3 class="title"><?php the_title(); ?>	</h3>
																</div>
															</div>
														</div>
													</div>
												<?php } ?>
										</div>
											<div class="modal fade custom-modal" id="modal-<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
														</button>
														<h5 class="modal-title" id="exampleModalLongTitle"><?php the_title(); ?></h5>
													</div>
													<div class="modal-body">
														<?php the_content(); ?>
													</div>
												</div>
											</div>
										</div>
									<?php
									endif;
								endwhile;
								wp_reset_postdata();
                        
							endif;
							
							?>
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
