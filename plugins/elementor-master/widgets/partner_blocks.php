<?php
namespace ElementorMaster\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();


class Partner_Blocks extends Widget_Base {


	public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );
		wp_register_script('owl.carousel.min.js', plugins_url( '/assets/js/owl.carousel.min.js', ELEMENTOR_MASTER ), array(), '1.0.0');
		wp_register_script('plugin-script', plugins_url( '/assets/js/script.js', ELEMENTOR_MASTER ), array(), '1.0.0');
	}

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
		return 'partner_blocks';
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
		return esc_html__( 'Partners blocks', 'elementor' );
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

		
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'list_title', [
				'label' => __( 'Title', 'elementor-master' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'List Title' , 'elementor-master' ),
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => esc_html__( 'Link', 'elementor-master' ),
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

		$repeater->add_control(
			'image',
			[
				'label' => esc_html__( 'Choose Image', 'elementor-master' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		

		$this->add_control(
			'list',
			[
				'label' => __( 'Repeater List', 'elementor-master' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'list_title' => esc_html__( 'Title #1', 'elementor-master' ),
					],
					
				],
				'field' => '{{{ list_title }}}',
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

		if ( ! empty( $settings['button_link']['url'] ) ) {
			$this->add_link_attributes( 'website_link', $settings['button_link'] );
		}
		?>


		<div class="notsection section__content-slider nopade">

			<div class="my_slide partners-wrap">

				<div class="wrapper">
					<div class="container">
						<!-- start container -->
						<div class="row">
							<!-- start row -->
							<div class="col-md-12">
								<div class="section_intro wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
									<h2 class="section_heading">
									<?php echo wp_kses( $settings['title'], array() ); ?>
									</h2>
								</div>
							</div>
						</div><!-- end row -->
					</div>
					<div class="container new-proslider-homepage">
						<div  class="partners-block-wrap">
							<?php 
								if ( $settings['list'] ) {
									
									foreach (  $settings['list'] as $item ) { ?>
										<div class="card__item one is__hero">
											<div class="card_body">
												<div class="card_head">
													<a href="<?php echo $item['link']['url'];?>">
														<img src="<?php echo $item['image']['url'];?>">
													</a>
													<a href="<?php echo $item['link']['url'];?>">
														<div class="details space-x-0">
															<div class="text-center">
																<h5><?php echo $item['list_title'];?></h5>
															</div>
														</div>
													</a>
												</div>
											</div>
										</div>
									<?php }
								
								}			
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


