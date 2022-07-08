<?php
/**
 * Widgets class.
 *
 * @category   Class
 * @package    ElementorAwesomesauce
 * @subpackage WordPress
 * @author     Ben Marshall <me@benmarshall.me>
 * @copyright  2020 Ben Marshall
 * @license    https://opensource.org/licenses/GPL-3.0 GPL-3.0-only
 * @link       link(https://www.benmarshall.me/build-custom-elementor-widgets/,
 *             Build Custom Elementor Widgets)
 * @since      1.0.0
 * php version 7.3.9
 */

namespace ElementorMaster;

// Security Note: Blocks direct access to the plugin PHP files.
defined( 'ABSPATH' ) || die();

/**
 * Class Plugin
 *
 * Main Plugin class
 *
 * @since 1.0.0
 */
class Widgets {

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.0.0
	 * @access private
	 */
	private function include_widgets_files() {
		
		require_once 'widgets/osnovateli.php';
		require_once 'widgets/komanda.php';
		require_once 'widgets/soobshestvo.php';
		require_once 'widgets/for_whom.php';
		require_once 'widgets/sliders.php';
		require_once 'widgets/regions_demographic.php';

		require_once 'widgets/banner_video.php';
		require_once 'widgets/banner_video_two.php';
		require_once 'widgets/partner_sliders.php';
		require_once 'widgets/post_sliders.php';
		require_once 'widgets/post_sliders_category.php';

		require_once 'widgets/interactive-maps.php';
		require_once 'widgets/post_sliders_category-2.php';
		require_once 'widgets/media-resource.php';
		require_once 'widgets/online-course.php';
		require_once 'widgets/digital-library.php';
		require_once 'widgets/partner_sliders-2.php';
		require_once 'widgets/partner_blocks.php';
		require_once 'widgets/faq-home.php';
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function register_widgets() {
		// It's now safe to include Widgets files.
		$this->include_widgets_files();

		// Register the plugin widget classes.		
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Widget_Komanda() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Widget_Osnovatel() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Widget_Soobshestvo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\For_Whom() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Sliders() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Regions_Demographic() );

		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Banner_Video() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Banner_Video_Two() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Partner_Sliders() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Post_Sliders() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Post_Sliders_Category() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Post_Sliders_Category_2() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Widget_Interactive_Maps() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Media_Resource() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Widget_Online_Course() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Widget_Digital_Library() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Partner_Sliders_2() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Partner_Blocks() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Faq_Home() );
	}

	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function __construct() {
		// Register the widgets.
		add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widgets' ) );
	}
}

// Instantiate the Widgets class.
Widgets::instance();
