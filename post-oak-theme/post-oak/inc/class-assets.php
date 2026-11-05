<?php
/**
 * Asset Manager Service
 *
 * Implements Single Responsibility Principle (SRP):
 * Manages asset registration, optimal delivery, and resource hints.
 *
 * @package PostOak
 */

namespace PostOak;

defined( 'ABSPATH' ) || exit;

final class Asset_Manager {

	/**
	 * Register hooks.
	 */
	public function register(): void {
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_assets' ) );
		add_filter( 'script_loader_tag', array( $this, 'add_performance_attributes' ), 10, 3 );
		add_action( 'wp_head', array( $this, 'add_resource_hints' ), 2 );
	}

	/**
	 * Resource hints for zero-latency font and asset resolution.
	 */
	public function add_resource_hints(): void {
		echo '<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>' . "\n";
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
		echo '<link rel="dns-prefetch" href="https://images.unsplash.com">' . "\n";
	}

	/**
	 * Enqueue theme stylesheet and compiled JavaScript module.
	 */
	public function enqueue_assets(): void {
		$version = wp_get_theme()->get( 'Version' ) ?: '2.0.0';

		// Master Stylesheet
		wp_enqueue_style(
			'post-oak-master',
			get_template_directory_uri() . '/assets/css/main.css',
			array(),
			$version
		);

		// Modular Vanilla JS Bundle (in footer)
		wp_enqueue_script(
			'post-oak-app',
			get_template_directory_uri() . '/assets/js/main.js',
			array(),
			$version,
			true
		);

		// Dependency Inversion: localize state configuration
		wp_localize_script(
			'post-oak-app',
			'PostOakConfig',
			array(
				'ajaxUrl'    => admin_url( 'admin-ajax.php' ),
				'nonce'      => wp_create_nonce( 'post_oak_security_token' ),
				'homeUrl'    => home_url( '/' ),
				'defaultTheme' => 'dark',
			)
		);
	}

	/**
	 * Defer scripts for non-blocking rendering.
	 *
	 * @param string $tag    HTML script tag.
	 * @param string $handle Script handle.
	 * @param string $src    Script source.
	 * @return string
	 */
	public function add_performance_attributes( string $tag, string $handle, string $src ): string {
		if ( 'post-oak-app' === $handle ) {
			return str_replace( ' src', ' defer src', $tag );
		}
		return $tag;
	}
}

