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
	<div class="moduletable sec3">
		<div class="custom sec3">
			<div class="container mx-auto justify-center">
				<div class="sec3 container mx-auto">
					<h2 class="section__title font__primary--31 demographic-passport-title"><?php echo wp_kses( $settings['title'], array() ); ?></h2>
					<div class="containerr demographic-passport-grid">
						<?php 
							if( $categories ){
								foreach( $categories as $cat ){ ?>
							<article id="post-<?php $cat->term_id; ?>" <?php post_class('col-3 category-ads'); ?>>
								<a href="<?php echo get_term_link( $cat->term_id ) ?>" class="block__img">
									<span class="overlay">
										<svg version="1.1" class="icon icon__plus" xmlns="http://www.w3.org/2000/svg"
											xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="6px" height="6px" viewBox="0 0 6 6"
											style="enable-background:new 0 0 6 6;" xml:space="preserve">
											<polygon points="6,2.6 3.4,2.6 3.4,0 2.6,0 2.6,2.6 0,2.6 0,3.4 2.6,3.4 2.6,6 3.4,6 3.4,3.4 6,3.4 ">
											</polygon>
										</svg>
									</span>

									<img width="360" height="240" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>"
										class="attachment-post-thumbnail size-post-thumbnail wp-post-image">
								</a>
								<div class="content">
									<h3 class="title"><a href="<?php echo get_term_link( $cat->term_id ) ?>" target="_blank"><?php echo $cat->name ?></a></h3>
									<div></div>
								</div>
							</article>
							<?php
								}
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