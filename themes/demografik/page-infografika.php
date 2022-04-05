<?php
/**
 * Template Name: Page infographics
 *
 */
get_header();
?>

		<div class="stm_titlebox stm_titlebox_style_2 stm_titlebox_text-center">
			<div class="container">
				<div class="stm_flex stm_flex_last stm_flex_center">
					<div class="stm_titlebox__inner">
						<h1 class="h1 stm_titlebox__title no_line text-transform stm_mgb_2"><?php echo get_the_title();?></h1>					
					</div>
				</div>
			</div>
		</div>
<?php


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
					$query = array(
						'taxonomy' => 'infographic-cat',
						'hide_empty' => false,
						'child_of' => 25,							
					);
					$terms = get_terms( $query );
					if (!empty($terms)) :
						foreach( $terms as $term ) :
								?>
								<div>
										
									<div class="video-21-9-rate-wrapepr img_url ">
									<a class="href_img" href="<?php echo get_term_link( $term ); ?>" >
										<img src="<?php  echo z_taxonomy_image_url($term->term_id);   ?>" class="video-21-9-rate-images">
									</a>
									</div>
									<h5 class="custom-post-title"><?php echo $term->name; ?></h5>
								
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
						endforeach;
					endif;
					
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
									<a class="href_img" href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>" data-gallery="images"
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

						<div class="custom-grid-1-3 photo-gallery">
				<?php
				foreach( $postslistvideo as $post ):
					setup_postdata($post);
					// Load value.
					$iframe = get_field('video_link');
					// Use preg_match to find iframe src.
					preg_match('/src="(.+?)"/', $iframe, $matches);
					$src = $matches[1];
					?>
					<div class="video-block__item">
						<div class="video-link">
							<iframe src="<?php echo $src;?>" width="100%" height="100%" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture sandbox" allowfullscreen ></iframe>
						
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
				<div class="document-slider slick-slider">
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

<?php
get_footer();