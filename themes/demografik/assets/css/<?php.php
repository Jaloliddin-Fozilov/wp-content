<?php
$postslistinfografika = get_posts( [
	'posts_per_page' => 100,
	'post_type' => 'infographics',
	'infographic-cat' => 'infografika',
	'order'=> 'DESC',
	'orderby' => 'date',
] ); 
$postslistrasm = get_posts( [
	'posts_per_page' => 100,
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

<section class="grey-bg-section">
	<div class="tabs-wrapper">
		<div data-admiral-tabs=".tabs-content" class="media-page-tabs">
			<div data-hash="tab_infographics" class="admiral-active">
				<div class="tab-title">Infografika</div>
				<div class="tab-new-label"><?php echo $countinfografika; ?></div>
			</div>
			<div data-hash="tab_images">
				<div class="tab-title">Rasm</div>
				<div class="tab-new-label"><?php echo $countrasm; ?></div>
			</div>
			<div data-hash="tab_video">
				<div class="tab-title">Video</div>
				<div class="tab-new-label"><?php echo $countvideo; ?></div>
			</div>
			<div data-hash="tab_document">
				<div class="tab-title">Hisobot va hujjatlar</div>
				<div class="tab-new-label"><?php echo $countdocument; ?></div>
			</div>
		</div>
	</div>
</section>
<section class="content-section" style="padding-top: 0;">
	<div class="container">
		<div class="tabs-content">
			<div class="admiral-active">
				<div class="header-with-lines">
					<h2 class="common-heading underline-text">
						Infografika
					</h2>
					<hr>
				</div>
				<div class="custom-grid-1-4 photo-gallery">
					<?php 
					foreach( $postslistinfografika as $post ):
						setup_postdata($post);

						if(has_post_thumbnail()):
							?>
							<div>
								<div class="video-21-9-rate-wrapepr img_url ">
									<a class="href_img html5lightbox" <?php if(get_field('infographic_video') == null){
										
										echo "href=\"" . get_the_post_thumbnail_url() . "\"";

										?>
										
										data-gallery="infograpics" data-toggle="modal" data-target="<?php the_ID(); ?>">
											<img src="<?php echo the_post_thumbnail_url(); ?>" class="video-21-9-rate-images"  style="border-radius: 15px;" >
									<?php 
									} 
									else{
										echo "href=\"" . get_field('infographic_video') . "\"" ?>

										data-gallery="infograpics" data-toggle="modal" data-target="<?php the_ID(); ?>">
										
										<?php if(get_field('infographic_video') == null){ ?>
										<img src="<?php echo the_post_thumbnail_url(); ?>" class="video-21-9-rate-images"  style="border-radius: 15px;" >
										<div class="modal fade" id="<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-body">
														<video id="" width="100%" controls poster="video/thumb.jpg">
															<source src="<?php get_field('infographic_video') ?>" type="video/mp4">
															<source src="<?php get_field('infographic_video') ?>" type="video/ogg">
															Your browser does not support the video tag.
															</video>
														
													</div>
												</div>  
											</div>
										</div>
									<?php }else{ ?>
											<div style="position:relative;display: flex;align-content: center;justify-content: center;align-items: center;">
												<img src="<?php echo get_template_directory_uri() . '/assets/images/play_icon.png' ?>"style="position: absolute;z-index: 1;width: 85px;height: 85px;border-radius: 50px;padding: 17px;background-color: #ffffff87;">
												<img src="<?php echo the_post_thumbnail_url(); ?>" class="video-21-9-rate-images" style="border-radius: 15px;" >
											</div>
										<?php } } ?>
									</a>
								</div>
								<h5 class="custom-post-title"><?php the_title(); ?></h5>
							</div>
							
						<?php
						endif;
					endforeach;
					wp_reset_postdata();
					?>
				</div>
			</div>
			<div>
				<div class="header-with-lines">
					<h2 class="common-heading underline-text">Rasmlar</h2>
					<hr>
				</div>
				<div class="custom-grid-1-4 photo-gallery">
					<?php  
					foreach( $postslistrasm as $post ):
						setup_postdata($post);
						if(has_post_thumbnail()):
							?>
							<div>
								<div class="video-21-9-rate-wrapepr img_url ">
									<a class="href_img" href="<?php echo get_the_post_thumbnail_url(); ?>" data-gallery="images"
										data-toggle="lightbox" data-target=".bd-example-modal-lg">
										<img src="<?php echo the_post_thumbnail_url() ?>" class="video-21-9-rate-images">
									</a>
								</div>
								<h5 class="custom-post-title"><?php the_title(); ?></h5>
							</div>
							<?php
						endif;
					endforeach;
					wp_reset_postdata();
					?>
				</div>

			</div>
			<div>
				<div class="header-with-lines">
					<h2 class="common-heading underline-text">Video</h2>
					<hr>
				</div>

				<div class="custom-grid-1-4 photo-gallery">
					<?php
					foreach( $postslistvideo as $post ):
						setup_postdata($post);
						// Load value.
							if ( get_field('video_url')) {
								$iframe = get_field('video_url');
								// Add extra parameters to src and replace HTML.
								$params = array(
									'controls'  => 0,
									'hd'        => 1,
									'autohide'  => 1,
									'width'     => '270',
								);
								$new_src = add_query_arg($params, $src);
								$iframe = str_replace($src, $new_src, $iframe);
							} else if (get_field('video_link')) {
								$iframe = get_field('video_link');
								// Use preg_match to find iframe src.
								preg_match('/src="(.+?)"/', $iframe, $matches);
								$src = $matches[1];

								// Add extra parameters to src and replace HTML.
								$params = array(
									'controls'  => 0,
									'hd'        => 1,
									'autohide'  => 1,
									'width'     => '100%',
								);
								$new_src = add_query_arg($params, $src);
								$iframe = str_replace($src, $new_src, $iframe);

								// Add extra attributes to iframe HTML.
								$attributes = 'frameborder="0"';
								$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
							}
							?>
							<div class="video-block__item">
								<div class="video-link">
								<?php 
									echo $iframe;
								?>
									
								</div>
								<h5 class="custom-post-title"><?php the_title(); ?></h5>
							</div>
						<?php
					endforeach;
					wp_reset_postdata();
					?>
				</div>
			</div>
			<!-- Hisobot va hujjatlar -->
			<div>
				<div class="header-with-lines">
					<h2 class="common-heading underline-text">Hisobot va hujjatlar</h2>
					<hr>
				</div>
				<div class="pub-carousel slick-initialized slick-slider">

						<?php  
								foreach( $postslistdocument as $post ):
									setup_postdata($post);
										?>
										<div class="slick-slide">
										<div>
											<a href="<?php the_permalink(); ?>" class="items-center w-full h-auto flex flex-col py-8 px-2 text-center"style="width: 100%; display: inline-block;" tabindex="-1">
											<img src="<?php echo the_post_thumbnail_url(); ?>" class="zoomable block mx-auto" style="max-height: 220px;">
											<p class="item-title"><?php the_title(); ?></p>

											</a>
											</div>
										</div>
									<?php
								endforeach;
								wp_reset_postdata();
							?>
				</div>
			</div>
		</div>
	</div>
</section> 