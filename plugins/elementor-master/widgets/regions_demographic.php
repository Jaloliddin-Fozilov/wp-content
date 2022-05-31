<?php
namespace ElementorMaster\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();


class Regions_Demographic extends Widget_Base {

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
		return 'regions_demographic';
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
		return esc_html__( 'Regions Demographic', 'elementor' );
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
		return 'eicon-map-pin';
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
				'label'   => __( 'Button name', 'elementor-master' ),
				'type'    => Controls_Manager::TEXT,
			)
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



		$categories = get_categories( [
			'taxonomy'     => 'demografik-category',
			'type'         => 'demografik-pasport',
			'child_of'     => 0,
			'parent'       => '',
			'orderby'      => 'name',
			'order'        => 'ASC',
			'hide_empty'   => 0,
			'hierarchical' => 1,
			'exclude'      => '',
			'include'      => '',
			'number'       => 0,
			'pad_counts'   => false,
		] );
		?>

            <div id="hero-slider-area" class="header-hero-area site-breadcrumb-header fix">
                <div class="site-breadcrumb pb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center pt-100 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s;">
                                <h1 class="breadcrumb-title"><?php echo wp_kses( $settings['title'], array() ); ?></h1>                                    				
                            </div>
                        </div>
                    </div>
                </div>			
            </div>

            
            <div class="nft-product-area product_explores pt-50 pb-50">
               
                <div class="container">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="row block">
								<?php foreach( $categories as $cat ): ?>
									<div class="col-md-4 mb-30">
										<div class="card__item one is__hero">
											<div class="card_body">
												<div class="card_head">
													<a href="<?php echo get_term_link($cat->cat_ID) ?>">
														<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>">
													</a>
													<a href="<?php echo get_term_link($cat->cat_ID) ?>">
														<div class="details space-x-0">
															<div class="text-center">
																<h5><?php echo $cat->name; ?></h5>
															</div>
															<div class="fire-icon">
																<i class="fa fa-map-marker"></i>
															</div>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								<?php endforeach; ?>
                                  
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