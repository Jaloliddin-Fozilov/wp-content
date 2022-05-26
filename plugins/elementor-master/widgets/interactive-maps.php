<?php
namespace ElementorMaster\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();


class Widget_Interactive_Maps extends Widget_Base {

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
		return 'Interaktive Xarita';
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
		return esc_html__( 'Interaktive Xarita', 'elementor-master' );
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
				'default' => __( 'Title', 'elementor-master' ),
			)
		);

		$this->add_control(
			'description',
			array(
				'label'   => __( 'Description', 'elementor-master' ),
				'type'    => Controls_Manager::TEXTAREA,
				'default' => __( 'Description', 'elementor-master' ),
			)
		);


		$this->add_control(
			'button_text',
			array(
				'label'   => __( 'Button text', 'elementor-master' ),
				'type'    => Controls_Manager::TEXT,
			)
		);
		$this->add_control(
			'button_url',
			array(
				'label'   => __( 'Button url', 'elementor-master' ),
				'type'    => Controls_Manager::URL,
			)
		);

		$this->add_control(
			'image', [
				'label' => __( 'Image', 'elementor-master' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
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
		<div class="section__creators mt-100">
			<div class="container">
				<div class="space-y-30 relative">
					<div class="nc-CardLarge1 relative flex flex-col-reverse md:flex-row justify-end ">
						<div class="md:absolute z-9 md:left-0 md:top-1/2 md:transform md:-translate-y-1/2 md:mt-0 px-3 sm:px-6 md:px-0 md:w-3/5 lg:w-1/2 xl:w-2/5">
							<div class="p-4 sm:p-8 xl:py-14 md:px-10 bg-white bg-opacity-40 backdrop-filter backdrop-blur-lg shadow-lg rounded-3xl space-y-3 sm:space-y-5 !border-opacity-0 -- nc-dark-box-bg">
								<h2 class="section__title font__primary--31">
									<?php echo wp_kses( $settings['title'], array() ); ?>
								</h2> 
								<p><?php echo wp_kses( $settings['description'], array() ); ?></p>
								<a class="cta" href="<?php echo wp_kses( $settings['button_url'], array() ); ?>">
									<span><?php echo wp_kses( $settings['button_text'], array() ); ?></span>
									<span>
										<svg width="33px" height="20px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
											<path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
											<path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
										</g>
										</svg>
									</span> 
								</a>
							</div>
							
						</div>
						<?php if(!empty($settings['image'])): ?>
						<div class="md:w-4/5 lg:w-2/3">                               
							<div class="nc-NcImage aspect-w-16 aspect-h-12 sm:aspect-h-9 md:aspect-h-14 lg:aspect-h-10 2xl:aspect-h-9 relative">
								<img src="<?php echo $settings['image']['url'];?>" class="absolute inset-0 object-cover rounded-3xl">
							</div>
						</div>
						<?php endif; ?>
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
	protected function _content_template() {
		?>
		<#
		view.addInlineEditingAttributes( 'title', 'none' );
		view.addInlineEditingAttributes( 'description', 'basic' );
		#>
		<div class="container mb-6">
			<div class="flex items-center flex-wrap -mx-3">
				<div class="w-full md_w-1/2 px-3">
					<h2 class="text-3xl sm_text-4xl xl_text-5xl xl_text-titlemin font-extrabold mb-4 text-indigo">{{{ settings.title }}}</h2>
					<p class="text-lg lg_text-xl text-indigo font-semibold mb-6"><?php echo wp_kses( $settings['description'], array() ); ?></p>
					<a class="bg-indigo hover_bg-purple mb-12 inline-flex items-center px-8 md_px-10 py-3 rounded-xl duration-300 text-white" href="{{{ settings.link.url }}}">
						<span class="font-semibold mr-3"><?php echo __("Read more", "elementor-master");?></span>
						<span class="triangle-to-right triangle-to-right__big inline-block"></span>
					</a>
				</div>
				<div class="w-full md_w-1/2 px-3">
					<div class="flex items-center mb-6">
						<h5 class="text-indigo text-4xl sm_text-5xl font-extrabold mr-4 sm_w-28 sm_min-w-28 w-20 min-w-20">+{{{ settings.team_amont }}}</h5>
						<p class="text-indigo font-bold text-xl">{{{ settings.team }}}</p>
					</div>
					<div class="flex items-center mb-6">
						<h5 class="text-indigo text-4xl sm_text-5xl font-extrabold mr-4 sm_w-28 sm_min-w-28 w-20 min-w-20">+{{{ settings.teacher_amount}}}</h5>
						<p class="text-indigo font-bold text-xl">{{{ settings.teacher}}}</p>
					</div>
					<div class="flex items-center mb-6">
						<h5 class="text-indigo text-4xl sm_text-5xl font-extrabold mr-4 sm_w-28 sm_min-w-28 w-20 min-w-20">+{{{ settings.project_amount}}}</h5>
						<p class="text-indigo font-bold text-xl">{{{ settings.project}}}></p>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
}