<?php

get_header();
$term = get_queried_object();


$query = new WP_Query(array(
	'post_type' => 'infographics',
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'infographic-cat',
			'field' => 'id',
			'terms' => $term->term_id,
		)
		),
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
));


$exlude_infografika = [];
if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
		array_push($exlude_infografika, get_the_ID());
		
	}
}
wp_reset_postdata();


$query_2 = new WP_Query(array(
	'post_type' => 'infographics',
	'post__not_in' => $exlude_infografika,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'infographic-cat',
			'field' => 'id',
			'terms' => $term->term_id,
			)
		),
	
));

$countinfografika = 0;
if ($query->have_posts()) {
	while ($query->have_posts()) {
		$query->the_post();
		if(has_post_thumbnail()){
			$countinfografika++;		
		}
	}
}
wp_reset_postdata();
if ($query_2->have_posts()) {
	while ($query_2->have_posts()) {
		$query_2->the_post();
		if(has_post_thumbnail()){
			$countinfografika++;		
		}
	}
}
wp_reset_postdata();

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

			<div class="container">
				<div class="tabs-content">
					<div class="admiral-active">
						<div class="row block">
							<?php
							if ($query->have_posts()) :
								while ($query->have_posts()) :
									$query->the_post();
									if(has_post_thumbnail()):
										?>
										<div>
										<?php 
												if( '' !== $post->post_content ) { ?>
													<div class="video-21-9-rate-wrapepr img_url col-md-3 col-sm-12 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
														<div class="explore-style-one media_block media-resourses">
															<div class="thumb">
																<a data-toggle="modal" data-target="#modal-<?php the_ID() ?>" style="display: flex;justify-content: center; position: relative;">
																	<img src="<?php echo get_template_directory_uri() . '/assets/images/play_icon.png' ?>" class="play_icon">
																	<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
																</a>
															</div>
															
															<div class="content">
																<div class="header d-flex-between pt-4 pb-3">
																	<h3 class="title"><?php the_title(); ?>	</h3>
																</div>
															</div> 
														</div>
													</div>
													
												<?php }else{ ?>
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
											<?php	}
											?>
										</div>
											<div class="modal fade custom-modal" id="modal-<?php the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
											<div class="modal-dialog modal-dialog-centered" role="video">
												<div class="modal-content">
													<div class="modal-header">
														
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
														</button>
														<h5 class="modal-title" id="exampleModalLongTitle"><?php the_title(); ?></h5>
													</div>
													<div class="modal-body">
														<?php // the_field('video_link'); ?>
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
							if ($query_2->have_posts()) :
								while ($query_2->have_posts()) :
									$query_2->the_post();
									if(has_post_thumbnail()):
										?>
										<div>
										<?php 
												if( '' !== $post->post_content ) { ?>
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
												<?php }else{ ?>
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
													
											<?php	}
											?>
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
					</div>
				</div>
			</div>
		</div>

	</main>
<?php
get_footer();
