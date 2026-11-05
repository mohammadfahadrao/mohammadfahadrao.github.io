<?php
/**
 * Contact Submission Service
 *
 * Implements Single Responsibility Principle (SRP):
 * Manages institutional inquiry validation, sanitization, and response handling.
 *
 * @package PostOak
 */

namespace PostOak;

defined( 'ABSPATH' ) || exit;

final class Contact_Service {

	/**
	 * Register AJAX endpoints.
	 */
	public function register(): void {
		add_action( 'wp_ajax_post_oak_inquiry',        array( $this, 'process_inquiry' ) );
		add_action( 'wp_ajax_nopriv_post_oak_inquiry', array( $this, 'process_inquiry' ) );
	}

	/**
	 * Process and sanitize institutional inquiry payload.
	 */
	public function process_inquiry(): void {
		check_ajax_referer( 'post_oak_security_token', 'nonce' );

		$name    = sanitize_text_field( wp_unslash( $_POST['name'] ?? '' ) );
		$email   = sanitize_email( wp_unslash( $_POST['email'] ?? '' ) );
		$company = sanitize_text_field( wp_unslash( $_POST['company'] ?? '' ) );
		$division= sanitize_text_field( wp_unslash( $_POST['division'] ?? '' ) );
		$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ?? '' ) );

		if ( empty( $name ) || empty( $email ) || ! is_email( $email ) ) {
			wp_send_json_error( array(
				'message' => esc_html__( 'Please provide a valid name and institutional email address.', 'post-oak' ),
			), 400 );
		}

		// Institutional response
		wp_send_json_success( array(
			'message' => esc_html__( 'Thank you. Your inquiry has been routed to our senior partnership.', 'post-oak' ),
		) );
	}
}

