<?php
namespace ElementorMaster\Widgets;
 
use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();


class Mobile_App_Block extends Widget_Base {

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
		return 'mobile_app_block';
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
		return esc_html__( 'Mobile app block', 'elementor' );
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
			'image_url', [
				'label' => __( 'Image', 'elementor-master' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);

		$this->add_control(
			'title',
			array(
				'label'   => __( 'Title', 'elementor-master' ),
				'type'    => Controls_Manager::TEXT,
			)
		);

		$this->add_control(
			'description',
			array(
				'label'   => __( 'Description', 'elementor-master' ),
				'type'    => Controls_Manager::TEXTAREA,
			)
		);
        $this->add_control(
			'button_text',
			array(
				'label'   => __( 'Button text', 'elementor-master' ),
				'type'    => Controls_Manager::TEXTAREA,
			)
		);

		$this->add_control(
			'button_link',
			[
				'label' => esc_html__( 'Button Link', 'elementor-master' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'elementor-master' ),
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
		$this->add_inline_editing_attributes( 'description', 'basic' );
		?>
		
		<section class="wrapper bg-light angled upper-start">
            <div class="container pt-lg-20 pb-18 pb-xxl-20 position-relative">
                
                <div class="row gx-lg-8 gx-xl-12 mt-lg-n16 mt-xl-n12 mt-xxl-0 align-items-xxl-center">
					<div class="col-md-6">
						<img alt="" class="app-image" data-cue="fadeIn"
						src="<?php echo wp_kses( $settings['image_url']['url'], array() ); ?>"
						style="top: 0px; left: -23%; animation-name: fadeIn; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"
						data-show="true">
					</div>
					
                    <div class="col-md-6  col-lg-6  text-center text-lg-start">
					
                        <div class="ps-xl-1 ps-xxl-5 pe-xxl-10">
                            <h3 class="display-3 mb-5"><?php echo wp_kses( $settings['title'], array() ); ?></h3>
                            <p class="lead mb-8"><?php echo wp_kses( $settings['description'], array() ); ?></p>
                            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown"
                                data-group="download" data-disabled="true">
                                <!--                        <span><a class="btn btn-primary btn-icon btn-icon-start rounded me-2"><i class="uil uil-apple"></i> App Store</a></span>-->
                                <span data-cue="slideInDown" data-group="download" data-show="true"
                                    style="animation-name: slideInDown; animation-duration: 700ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;"><a
                                        href="<?php echo wp_kses( $settings['button_link']['url'], array() ); ?>"
                                        class="btn btn-green btn-icon btn-icon-start rounded"><i
                                            class="fa-brands fa-google-play"></i> <?php echo wp_kses( $settings['button_text'], array() ); ?></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
		
		
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