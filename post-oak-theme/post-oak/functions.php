<?php
/**
 * Post Oak Theme Bootstrap
 *
 * Designed according to SOLID principles with loosely coupled services.
 *
 * @package PostOak
 * @version 2.0.0
 */

defined( 'ABSPATH' ) || exit;

// Autoload core theme services
require_once get_template_directory() . '/inc/class-assets.php';
require_once get_template_directory() . '/inc/class-router.php';
require_once get_template_directory() . '/inc/class-contact.php';
require_once get_template_directory() . '/inc/class-theme.php';

// Initialize container
\PostOak\Theme::instance()->boot();
