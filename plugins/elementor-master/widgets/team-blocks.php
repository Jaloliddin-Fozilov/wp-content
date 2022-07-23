<?php
namespace ElementorMaster\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();


class Post_Type_Team extends Widget_Base {

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
		return 'post_type_team';
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
		return esc_html__( 'Post type team', 'elementor' );
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
		return 'eicon-person';
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
				'post_type' => 'dteam',
				'posts_per_page' => 10,
				'order'=> 'ASC',
				'orderby' => 'title'
			] ); 


        ?>
    <div class="d-container d-flex flex-row justify-content-between">
       <?php foreach( $postslist as $post ) : 
            setup_postdata($post); ?>
            <div class="jl-card">        		
                <a href="<?php the_permalink(); ?>" target="_blank"><img class="tm-image jl-border-rounded" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
                <div class="jl-block">
                    <a href="<?php the_permalink(); ?>" target="_blank">
                        <h3 class="tm-title"><?php the_title(); ?></h3>
                    </a>
                    <div class="tm-meta jl-margin-top jl-text-meta"><?php echo get_field('experience') ?></div>
                    <ul class="jl-iconnav jl-margin-top">
                    <?php
                    $phone = get_field('phone');
                    $facebook = get_field('facebook');
                    $telegram = get_field('telegram');
                    $email = get_field('email');
                    if( $phone ): ?>
                        <li class="tm-social-icon"><a target="_self" href="tel:<?php $phone['number']?>" class="tm-social-icon"><span class="fa fa-phone" aria-hidden="true"></span></a></li>
                    <?php endif; ?>
                    <?php if( $facebook ): ?>    
                        <li class="tm-social-icon"><a target="_self" href="<?php echo $facebook['link'] ?>" class="tm-social-icon"><span class="fa fa-facebook" aria-hidden="true"></span></a></li>
                    <?php endif; ?>
                    <?php if($telegram): ?>
                        <li class="tm-social-icon"><a target="_self" href="<?php echo $telegram['link'] ?>" class="tm-social-icon"><span class="fa fa-telegram" aria-hidden="true"></span></a></li>
                    <?php endif; ?>
                    <?php if($email): ?>
                        <li class="tm-social-icon"><a target="_self" href="mailto:<?php echo $email['link'] ?>" class="tm-social-icon"><span class="fa fa-envelope-o" aria-hidden="true"></span></a></li>
                    <?php endif; ?>
                    </ul>
                </div>
            </div>

        <?php endforeach; 
        wp_reset_postdata(); 
        ?>
    </div>
        <?php
	}

	
}