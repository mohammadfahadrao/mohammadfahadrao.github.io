<?php
/**
 * Routing & Canonical Redirection Service
 *
 * Implements Single Responsibility Principle (SRP):
 * Manages URL resolution and canonical corporate routing (/global).
 *
 * @package PostOak
 */

namespace PostOak;

defined( 'ABSPATH' ) || exit;

final class Router {

	/**
	 * Register hooks.
	 */
	public function register(): void {
		add_action( 'template_redirect', array( $this, 'enforce_global_canonical_route' ), 1 );
	}

	/**
	 * Redirect root request '/' to '/global/' to establish global corporate architecture.
	 */
	public function enforce_global_canonical_route(): void {
		if ( is_admin() || wp_doing_ajax() || wp_doing_cron() ) {
			return;
		}

		if ( function_exists( 'is_customize_preview' ) && is_customize_preview() ) {
			return;
		}

		$request_path = trim( (string) parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ), '/' );

		// If root domain visited and page exists
		if ( empty( $request_path ) && is_front_page() ) {
			$global_page = get_page_by_path( 'global' );
			if ( $global_page ) {
				wp_safe_redirect( home_url( '/global/' ), 301 );
				exit;
			}
		}
	}
}

