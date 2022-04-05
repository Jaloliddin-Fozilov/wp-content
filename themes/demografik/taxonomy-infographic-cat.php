<?php

get_header();
$term = get_queried_object();

?>

	<div class="stm_titlebox stm_titlebox_style_2 stm_titlebox_text-center">
		<div class="container">
			<div class="stm_flex stm_flex_last stm_flex_center">
				<div class="stm_titlebox__inner">
					<h1 class="h1 stm_titlebox__title no_line text-transform stm_mgb_2"><?php echo $term->name; ?></h1>					
				</div>
			</div>
		</div>
	</div>
<?php

$postslistinfografika_on_top = get_posts( [
	'posts_per_page' => 100,
	'post_type' => 'infographics',
	'infographic-cat' => $term->name,
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
	'infographic-cat' => $term->name,
	'exclude' => $exlude_infografika,
    'orderby' => 'date',
    'order' => 'DESC',	
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

?>

<section class="grey-bg-section">
	<div class="tabs-wrapper">
		<div data-admiral-tabs=".tabs-content" class="media-page-tabs">
			<div data-hash="tab_infographics" class="admiral-active">
				<div class="tab-title">Infografika</div>
				<div class="tab-new-label"><?php echo $countinfografika; ?></div>
			</div>
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
					if (!empty($postslistinfografika_on_top)) :
						foreach( $postslistinfografika_on_top as $post ):
							setup_postdata($post);
							if(has_post_thumbnail()):
								?>
								<div>
								 <?php 
										if( '' !== $post->post_content ) { ?>
											<div class="video-21-9-rate-wrapepr img_url ">
												<a data-toggle="modal" data-target="#modal-<?php the_ID() ?>" style="display: flex;justify-content: center; position: relative;">
													<img src="<?php echo get_template_directory_uri() . '/assets/images/play_icon.png' ?>" class="play_icon">
													<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
												</a>
												<?php the_field('video_link'); ?>
											</div>
											<h5 class="custom-post-title"><?php the_title(); ?></h5>
										<?php }else{ ?>
											<div class="video-21-9-rate-wrapepr img_url ">
											<a class="href_img" href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>" data-gallery="infographics"
												data-toggle="lightbox" data-target=".bd-example-modal-lg">
												<img src="<?php echo the_post_thumbnail_url() ?>" class="video-21-9-rate-images">
											</a>
											</div>
											<h5 class="custom-post-title"><?php the_title(); ?></h5>
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
						endforeach;
						wp_reset_postdata();
					endif;
					if (!empty($postslistinfografika)):
						foreach( $postslistinfografika as $post ):
							setup_postdata($post);
							if(has_post_thumbnail()):
								?>
								<div>
								 <?php 
										if( '' !== $post->post_content ) { ?>
											<div class="video-21-9-rate-wrapepr img_url ">
												<a data-toggle="modal" data-target="#modal-<?php the_ID() ?>" style="display: flex;justify-content: center; position: relative;">
													<img src="<?php echo get_template_directory_uri() . '/assets/images/play_icon.png' ?>" class="play_icon">
													<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid">
												</a>
												<?php the_field('video_link'); ?>
											</div>
											<h5 class="custom-post-title"><?php the_title(); ?></h5>
										<?php }else{ ?>
											<div class="video-21-9-rate-wrapepr img_url ">
											<a class="href_img" href="<?php echo get_the_post_thumbnail_url(); ?>" data-title="<?php the_title(); ?>" data-gallery="infographics"
												data-toggle="lightbox" data-target=".bd-example-modal-lg">
												<img src="<?php echo the_post_thumbnail_url() ?>" class="video-21-9-rate-images">
											</a>
											</div>
											<h5 class="custom-post-title"><?php the_title(); ?></h5>
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
						endforeach;
						wp_reset_postdata();
					endif;
					
					?>
				</div>
			</div>
		</div>
	</div>
</section> 
<?php
get_footer();
