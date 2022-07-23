<?php
/**
 * Template for displaying single course
 *
 * @since v.1.0.0
 *
 * @author Themeum
 * @url https://themeum.com
 *
 * @package TutorLMS/Templates
 * @version 1.4.3
 */

// Prepare the nav items
$course_nav_item = apply_filters( 'tutor_course/single/nav_items', tutor_utils()->course_nav_items(), get_the_ID() );

tutor_utils()->tutor_custom_header();
do_action('tutor_course/single/before/wrap');
?>
<div <?php tutor_post_class('tutor-full-width-course-top tutor-course-top-info tutor-page-wrap'); ?>>
    <?php (isset($is_enrolled) && $is_enrolled) ? tutor_course_enrolled_lead_info() : tutor_course_lead_info(); ?>  
    <div class="tutor-course-details-page tutor-container">
        
        <div class="tutor-course-details-page-main">
            <div class="tutor-course-details-page-main-left">
	            <?php do_action('tutor_course/single/before/inner-wrap'); ?>
                <div class="tutor-default-tab tutor-course-details-tab tutor-tab-has-seemore tutor-mt-32">
                    <?php tutor_load_template( 'single.course.enrolled.nav', array('course_nav_item' => $course_nav_item ) ); ?>
                    <div class="tab-body">
                        <?php
                            foreach($course_nav_item as $key=>$subpage) {
                                ?>
                                <div class="tab-body-item <?php echo $key=='info' ? 'is-active' : ''; ?>" id="tutor-course-details-tab-<?php echo $key; ?>">
                                    <?php
                                        do_action( 'tutor_course/single/tab/'.$key.'/before' );
                                        
                                        $method = $subpage['method'];
                                        if(is_string($method)) {
                                            $method();
                                        } else {
                                            $_object = $method[0];
                                            $_method = $method[1];
                                            $_object->$_method(get_the_ID());
                                        }

                                        do_action( 'tutor_course/single/tab/'.$key.'/after' );
                                    ?>
                                </div>
                                <?php
                            }
                        ?>
                    </div>
                </div>
	            <?php do_action('tutor_course/single/after/inner-wrap'); ?>
            </div>
            <!-- end of /.tutor-course-details-page-main-left -->
            <div class="tutor-course-details-page-main-right">
                   
                <div class="tutor-single-course-sidebar">
                    <?php do_action('tutor_course/single/before/sidebar'); ?>
                    <?php tutor_load_template('single.course.course-entry-box'); ?>
                    <?php tutor_course_requirements_html(); ?>
                    <?php tutor_course_tags_html(); ?>
                    
                    <?php tutor_course_target_audience_html(); ?>
                    <?php do_action('tutor_course/single/after/sidebar'); ?>

                    <div class="avator-block">
                    <?php
                    do_action( 'tutor_course/single/enrolled/before/instructors' );

                    $instructors = tutor_utils()->get_instructors_by_course();

                    if($instructors && count($instructors)) {
                        ?>
                        <div class="custom-instructor-block">
                            <h3 class="tutor-fs-5 tutor-fw-bold tutor-color-black tutor-mb-24">
                                <?php _e( 'About the ' . ( count( (array) $instructors ) > 1 ? 'instructors' : 'instructor' ), 'tutor'); ?>
                            </h3>
                            <?php foreach($instructors as $instructor): ?>
                                <div class="tutor-instructor-info-card  tutor-mb-16">
                                    <div class="tutor-instructor-info-card-body tutor-d-sm-flex tutor-align-items-start tutor-px-32 tutor-py-24">
                                        <div class="tutor-ins-avatar tutor-flex-shrink-0 tutor-mr-sm-16">
                                            <img src="<?php echo get_avatar_url($instructor->ID); ?>" alt="instructor avatar" />
                                        </div>
                                        <div class="tutor-ins-rest">
                                            <div class="tutor-ins-title  tutor-fs-6 tutor-fw-medium  tutor-color-black">
                                                <?php 
                                                    $user = get_userdata( $instructor->ID ); 
                                                    $bio   = nl2br( strip_tags( get_user_meta( $instructor->ID, '_tutor_profile_bio', true ) ) );
                                                ?>
                                                <ul>
                                                    <li>
                                                        <a href="<?php echo tutor_utils()->profile_url($instructor->ID, true); ?>"> 
                                                            <?php echo $user->first_name; ?>
                                                            <?php echo $user->last_name; ?>
                                                        </a>     
                                                    </li>
                                                    <li>
                                                        <?php // echo $bio; ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <?php if ( ! empty($instructor->tutor_profile_job_title)): ?>
                                                <div class="tutor-ins-designation tutor-fs-7 tutor-color-muted tutor-mt-4">
                                                    <?php echo $instructor->tutor_profile_job_title; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="tutor-ins-summary tutor-fs-6 tutor-color-black-60 tutor-mt-20">
                                                <?php echo htmlspecialchars($instructor->tutor_profile_bio); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tutor-instructor-info-card-footer tutor-d-sm-flex tutor-align-items-center tutor-justify-content-between tutor-px-32 tutor-py-16">
                                        <?php 
                                            $instructor_rating = tutor_utils()->get_instructor_ratings($instructor->ID);
                                            tutor_utils()->star_rating_generator_v2($instructor_rating->rating_avg, $instructor_rating->rating_count, true); 
                                        ?>
                                        <div class="tutor-ins-meta tutor-d-flex">
                                            <div class="tutor-ins-meta-item tutor-color-design-dark flex-center">
                                                <span class="tutor-icon-30 tutor-icon-user-filled"></span>
                                                <span class="tutor-fs-6 tutor-fw-bold tutor-color-black tutor-mr-4">
                                                    <?php echo tutor_utils()->get_total_students_by_instructor($instructor->ID); ?>
                                                </span>
                                                <span class="tutor-fs-7 tutor-color-black-60">
                                                    <?php _e('Students', 'tutor'); ?>
                                                </span>
                                            </div>
                                            <div class="tutor-ins-meta-item tutor-color-design-dark flex-center ">
                                                <span class="tutor-icon-30 tutor-icon-mortarboard-line"></span>
                                                <span class="tutor-fs-6 tutor-fw-bold tutor-color-black tutor-mr-4">
                                                    <?php echo tutor_utils()->get_course_count_by_instructor($instructor->ID); ?>
                                                </span>
                                                <span class="tutor-fs-7 tutor-color-black-60">
                                                    <?php _e('Courses', 'tutor'); ?>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <?php
                    }

                    do_action( 'tutor_course/single/enrolled/after/instructors' );
                    ?>
                    </div>
                </div>
            </div>
            <!-- end of /.tutor-course-details-page-main-right -->
        </div>
        <!-- end of /.tutor-course-details-page-main -->
    </div>
</div>

<?php do_action('tutor_course/single/after/wrap'); ?>

<?php
tutor_utils()->tutor_custom_footer();
