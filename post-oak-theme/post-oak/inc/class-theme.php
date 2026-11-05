<?php
/**
 * Master Theme Container
 *
 * Implements Dependency Inversion & Open/Closed Principles:
 * Coordinates loosely-coupled services through standard hooks and lifecycle triggers.
 *
 * @package PostOak
 */

namespace PostOak;

defined( 'ABSPATH' ) || exit;

final class Theme {

	/**
	 * Singleton instance.
	 *
	 * @var self|null
	 */
	private static ?self $instance = null;

	/**
	 * Services registry.
	 *
	 * @var array<object>
	 */
	private array $services = array();

	/**
	 * Get singleton instance.
	 */
	public static function instance(): self {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

	/**
	 * Private constructor to enforce singleton.
	 */
	private function __construct() {
		$this->services = array(
			new Asset_Manager(),
			new Router(),
			new Contact_Service(),
		);
	}

	/**
	 * Bootstrap theme services and core features.
	 */
	public function boot(): void {
		add_action( 'after_setup_theme', array( $this, 'setup_theme_features' ) );

		// Register each independent service
		foreach ( $this->services as $service ) {
			if ( method_exists( $service, 'register' ) ) {
				$service->register();
			}
		}
	}

	/**
	 * Configure core WordPress support flags.
	 */
	public function setup_theme_features(): void {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'gallery', 'caption', 'style', 'script' ) );
		add_theme_support( 'responsive-embeds' );

		register_nav_menus( array(
			'primary-menu' => esc_html__( 'Primary Corporate Navigation', 'post-oak' ),
			'footer-menu'  => esc_html__( 'Footer Regulatory Menu', 'post-oak' ),
		) );
	}
}

