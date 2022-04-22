<?php

/**
 * Template for displaying lead info
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

if (!defined('ABSPATH'))
    exit;

global $post, $authordata;
$profile_url = tutor_utils()->profile_url( $authordata->ID, true );
?>

<header class="tutor-course-details-header tutor-mb-44" 
        style="background: #eee center / cover no-repeat url(<?php echo get_tutor_course_thumbnail_src(); ?>) ">
    
    <div class="tutor-container">

        <?php
        $disable = !get_tutor_option('enable_course_review');
        if (!$disable) {
        ?>
            <div class="tutor-course-details-ratings">
                <?php
                $course_rating = tutor_utils()->get_course_rating();
                tutor_utils()->star_rating_generator_v2($course_rating->rating_avg, $course_rating->rating_count, true);
                ?>
            </div>
        <?php
        }
        ?>
        <div class="header-block">
            <h1 class="tutor-course-details-title tutor-fw-bold tutor-color-black tutor-mt-12 tutor-mb-0">
                <?php do_action('tutor_course/single/title/before'); ?>
                <span><?php the_title(); ?></span>
            </h1>
            
            <!-- Button trigger modal -->
            <div class="course-video" data-toggle="modal" data-target="#myModal">
                <?php 
                    $video_info = tutor_utils()->get_video_info();
                    $poster = tutor_utils()->avalue_dot('poster', $video_info);
                    $poster_url = $poster ? wp_get_attachment_url($poster) : '';
                ?>
                <div class="video-button">
                    <img src="<?php echo $poster_url; ?>" alt="">
                </div>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog video-modal" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"><?php the_title(); ?></h4>
                    </div>
                    <div class="modal-body">
                        <?php tutor_utils()->has_video_in_single() ? tutor_course_video() : get_tutor_course_thumbnail(); ?>
                    </div>
                </div>
            </div>
            </div>
            <div class="tutor-d-sm-flex tutor-align-items-center tutor-justify-content-between tutor-mt-16">
                <div class="tutor-course-details-category tutor-fs-6 tutor-fw-medium tutor-color-black tutor-d-flex tutor-align-items-end">
                    <?php if (tutor_utils()->get_option('enable_course_author')) : ?>
                        <div class="tutor-course-author tutor-mr-16">
                            <img src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>" />
                            <span><?php _e('by', 'tutor'); ?></span>
                            <strong><?php echo get_the_author_meta('display_name'); ?></strong>
                        </div>
                    <?php endif; ?> 
                </div>
            </div>
        
    </div>
</header>
