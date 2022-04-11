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


				<h1 style="font-size: 24px;color: #1781b1;;text-align: center;margin-bottom: -50px;padding-top:40px;"><?php echo wp_kses( $settings['title'], array() ); ?></h1>
				<div class="containerr">
					<?php 
						if( $categories ){
							foreach( $categories as $cat ){ ?>


								<div class="cardd">
									<div class="face face1">
										<div class="contentt text-center">
											<img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>">
											<h3><?php echo $cat->name ?></h3>
										</div>
									</div>
									<div class="face face2 shadow-xl">
										<div class="contentt text-center">


											<div class="h-32"><?php echo $cat->description ?></div>
											<a href="<?php echo $cat->slug ?>"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full"><?php echo wp_kses( $settings['button_name'], array() ); ?></button></a>


										</div>
									</div>
								</div> <?php


								// Данные в объекте $cat

								// $cat->term_id
								// $cat->name (Рубрика 1)
								// $cat->slug (rubrika-1)
								// $cat->term_group (0)
								// $cat->term_taxonomy_id (4)
								// $cat->taxonomy (category)
								// $cat->description (Текст описания)
								// $cat->parent (0)
								// $cat->count (14)
								// $cat->object_id (2743)
								// $cat->cat_ID (4)
								// $cat->category_count (14)
								// $cat->category_description (Текст описания)
								// $cat->cat_name (Рубрика 1)
								// $cat->category_nicename (rubrika-1)
								// $cat->category_parent (0)

							}
						}
					?>
					
				</div>


			</div>


		</div>






		<p></p>
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