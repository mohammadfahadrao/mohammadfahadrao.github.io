<?php
/**
 * Template Name: Front Page
 * Institutional Corporate Homepage
 *
 * Designed using modern template-part snippet composition.
 *
 * @package PostOak
 */

get_header();

// Section 1: Hero with Houston Uptown aerial & bottom-left telemetry
get_template_part( 'template-parts/home/section', 'hero' );

// Section 2: Global Statistics Banner
get_template_part( 'template-parts/home/section', 'stats' );

// Section 3: Institutional Heritage / About
get_template_part( 'template-parts/home/section', 'about' );

// Section 4: Six Core Business Divisions
get_template_part( 'template-parts/home/section', 'capabilities' );

// Section 5: Brand Film & Corporate Culture
get_template_part( 'template-parts/home/section', 'defense-tech' );
get_template_part( 'template-parts/home/section', 'culture' );

// Section 6: Corporate Governance 8-Division Tabs
get_template_part( 'template-parts/home/section', 'governance' );

// Section 7: Worldwide Locations
get_template_part( 'template-parts/home/section', 'offices' );

// Section 8: Inquiries & Access
get_template_part( 'template-parts/home/section', 'contact' );

get_footer();
