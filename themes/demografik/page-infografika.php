<?php
/**
 * Template Name: Page infographics
 *
 */
get_header();


$postslistinfografika_on_top = get_posts( [
	'posts_per_page' => 100,
	'post_type' => 'infographics',
	'infographic-cat' => 'infografika',
	'meta_query' => array(
		array(
			'key' => 'post_on_top',
			'value' => 301,
			'type' => 'numeric',
			'compare' => '<='
		)
	),
    'orderby' => 'meta_value_num',
    'order' => 'ASC',	
] );
$exlude_infografika = [];
foreach( $postslistinfografika_on_top as $pst ) :
	setup_postdata($pst);
	array_push($exlude_infografika, $pst->ID);
endforeach;
wp_reset_postdata();
$postslistinfografika = get_posts( [
	'posts_per_page' => 100,
	'post_type' => 'infographics',
	'infographic-cat' => 'infografika',
	'exclude' => $exlude_infografika,
    'orderby' => 'date',
    'order' => 'DESC',	
] ); 
$postslistrasm = get_posts( [
	'posts_per_page' => 10,
	'post_type' => 'infographics',
	'infographic-cat' => 'rasmlar',
	'order'=> 'DESC',	
	'orderby' => 'date',
] ); 
$postslistvideo = get_posts( [
	'posts_per_page' => 100,
	'post_type' => 'infographics',
	'infographic-cat' => 'video',
	'order'=> 'DESC',
	'orderby' => 'date',
] );
$postslistdocument = get_posts( [
	'posts_per_page' => 100,
	'post_type' => 'infographics',
	'infographic-cat' => 'document',
	'order'=> 'DESC',
	'orderby' => 'date',
] ); 
$countinfografika = 0;
foreach( $postslistinfografika as $post ){
	setup_postdata($post);
		
	if(has_post_thumbnail()){
			$countinfografika++;		
		}
	}
	wp_reset_postdata();
foreach( $postslistinfografika_on_top as $post ){
	setup_postdata($post);
		
	if(has_post_thumbnail()){
			$countinfografika++;		
		}
	}
	wp_reset_postdata();
$countrasm = 0;
foreach( $postslistrasm as $post ){
	setup_postdata($post);
		
	if(has_post_thumbnail()){
			$countrasm++;		
		}
	}
	wp_reset_postdata();
$countvideo = 0;
foreach( $postslistvideo as $post ){
	setup_postdata($post);
		
		$countvideo++;		
		
	}
	wp_reset_postdata();
$countdocument = 0;
foreach( $postslistdocument as $post ){
	setup_postdata($post);
		
			$countdocument++;	
	}
	wp_reset_postdata();
?>

	<main id="main">
		<div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
			<div class="site-breadcrumb pb-100">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
							<h1 class="breadcrumb-title"><?php echo get_the_title();?></h1>                                    				
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
					<div data-admiral-tabs=".tabs-content" class="media-page-tabs  button-group flex-wrap filters-button-group d-flex justify-content-start justify-content-lg-end mb-6">
						<div data-hash="tab_infographics" class="admiral-active default-tab-list">
							<div class="filter-text">Infografika</div>
						</div>
						<div data-hash="tab_images" class="default-tab-list">
							<div class="filter-text">Rasm</div>
						</div>
						<div data-hash="tab_video" class="default-tab-list">
							<div class="filter-text">Video</div>
						</div>
						<div data-hash="tab_document" class="default-tab-list">
							<div class="filter-text">Hisobot va hujjatlar</div>
						</div>
					</div>
				</div>                    
			</div>
			<div class="container">
				<div class="tabs-content">
					<div  class="fade in admiral-active">
						<div class="section-title">
							<h2 class="section__title font__primary--31">Infografika</h2>
						</div>
						<div class="row block">
							<?php
							$query = array(
								'taxonomy' => 'infographic-cat',
								'hide_empty' => false,
								'child_of' => 25,							
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
					</div>
					<div>
						<div class="section-title">
							<h2 class="section__title font__primary--31">Rasmlar</h2>
						</div>
						<div class="row block">
							<?php  
							global $wp_query;
							$save_wpq = $wp_query;
							$args = array(
								'post_type' => 'infographics',
								'infographic-cat' => 'rasmlar',
								'order' => 'ASC', 
								'orderby' => 'title',
								'post_per_page' => 10,
							);
							$wp_query;

							// ваш запрос и код вывода с пагинацией
							$wp_query = new WP_Query( $args );
							while ( $wp_query->have_posts() ) {
								$wp_query->the_post();
								if(has_post_thumbnail()):
									?>
									<div class="col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
										<div class="video-21-9-rate-wrapepr img_url explore-style-one media_block media-resourses">
											<div class="thumb">
												<a class="href_img" href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>" data-gallery="images"
													data-toggle="lightbox" data-target=".bd-example-modal-lg">
													<img src="<?php echo the_post_thumbnail_url() ?>" class="video-21-9-rate-images">
												</a>
											</div>
											<div class="content">
												<div class="header d-flex-between pt-2 pb-2">
													<h3 class="title"><?php the_title(); ?>	</h3>
												</div>
											</div>  
										</div>
									</div>
									<?php
								endif;
								
							}

							// пагинация
							$pagination = paginate_links([
								"show_all"           => false,            // настраивается end_size и mid_size (или показ всех страниц)
								"prev_next"          => true,             // показ ссылок предыдущая/следующая
								"prev_text"          => '<svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none"viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>',  // анкор ссылки на предыдущую страницу
								"next_text"          => '<svg xmlns="http://www.w3.org/2000/svg" class="btn--icon" fill="none"viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round"d="M9 5l7 7-7 7"/></svg>',  // анкор ссылки на следующую страницу
								"end_size"           => 1,                // кол-во ссылок в начале и конце
								"mid_size"           => 2,                // кол-во ссылок до и после текущей страницы
								"add_fragment" =>    '#tab_images',           
								"type"               => "plain",          // в каком виде вернуть результат ("plain", "array", "list")
							]);
							

							$args = array(
								'show_all'     => false, // показаны все страницы участвующие в пагинации
								'end_size'     => 1,     // количество страниц на концах
								'mid_size'     => 1,     // количество страниц вокруг текущей
								'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
								'prev_text'    => __('« Previous'),
								'next_text'    => __('Next »'),
								'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
								'add_fragment' => '#tab_images',     // Текст который добавиться ко всем ссылкам.
								'screen_reader_text' => __( 'Posts navigation' ),
								'class'        => 'pagination', // CSS класс, добавлено в 5.5.0.
							);
							
							
														
							?>
						</div>
					    <?php	the_posts_pagination( $args );
						// вернем global $wp_query
						wp_reset_postdata();
						$wp_query = $save_wpq;
						?>
					</div>
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
												<h3 class="title"><?php the_title(); ?>	</h3>
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
				</div><!-- /.tabs-content -->
			</div>
		</div>

	</main>
<?php
get_footer();