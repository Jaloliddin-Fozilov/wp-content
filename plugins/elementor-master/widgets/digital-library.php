<?php
namespace ElementorMaster\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();


class Widget_Digital_Library extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve image box widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'digital-library';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve image box widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Digital library', 'elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve image box widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-image-box';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return array( 'basic' );
	}
	/**
	 * Enqueue styles.
	 */
	public function get_style_depends() {
		return array( 'master' );
	}

	/**
	 * Register image box widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 3.1.0
	 * @access protected
	 */

	
	protected function _register_controls() {

		$this->start_controls_section(
			'section_content',
			array(
				'label' => __( 'Content', 'elementor-master' ),
			)
		);

        $this->add_control(
			'title',
			array(
				'label'   => __( 'Title', 'elementor-master' ),
				'type'    => Controls_Manager::TEXT,
			)
		);

		$this->add_control(
			'button_name',
			array(
				'label'   => __( 'Button text', 'elementor-master' ),
				'type'    => Controls_Manager::TEXT,
			)
		);

		$this->add_control(
			'button_link',
			[
				'label' => esc_html__( 'Button Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);


		$this->end_controls_section();
	}

	/**
	 * Render image box widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		$this->add_inline_editing_attributes( 'title', 'none' );
		$this->add_inline_editing_attributes( 'button_name', 'none' );
		?>

        <?php
          	global $post;
			$postslist = get_posts( [
				'post_type' => 'library',
				'posts_per_page' => 10,
				'order'=> 'ASC',
				'orderby' => 'title'
			] ); 

        ?>

        <div class="notsection section__content-slider pt-5">

            <div class="d_library">

                <div class="nopade">

                    <h2 class="section__title nopade font__primary--31 text-center">
                        <?php echo wp_kses( $settings['title'], array() ); ?>
                    </h2>

                    <div class="touch_slider container">

                        <div class="top-seller-activation-1 slick-gutter-15 slick-arrow-between">
                            <?php
                                foreach( $postslist as $post ){
                                    setup_postdata($post);
                                    ?>
                                        <div class="explore-style-one">
                                            <div class="thumb">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url() ?>"></a>
                                            </div>
                                            <!-- End .thumb -->
                                            <div class="content">
                                                <div class="header d-flex-between pt-4 pb-3">
                                                    <h3 class="title">
                                                        <a href="#">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h3>
                                                </div>

                                                <div class="action-wrapper d-flex-between pt-2">
                                                    <a href="<?php the_permalink(); ?>" class="btn  btn-outline">
                                                        <span>
                                                            <i class="fa fa-book"></i>
                                                            <?php pll_e("O'qish"); ?>
                                                        </span></a>
                                                </div>
                                                <!-- action-wrapper -->
                                            </div>
                                            <!-- End .content -->
                                        </div>
                                    
                                    <?php
                                }
                                wp_reset_postdata();
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		
		<?php
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	
}