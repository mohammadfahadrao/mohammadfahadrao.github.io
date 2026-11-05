<?php
/**
 * Template Part: Hero section with cinematic video, Houston Uptown aerial, and animated bottom-left telemetry
 *
 * @package PostOak
 * @subpackage TemplateParts/Home
 */
defined( 'ABSPATH' ) || exit;
?>
<section id="hero" class="hero-section">
    <div class="hero-cinematic-bg">
      <img src="https://images.unsplash.com/photo-1585348897632-67b6dc134029?auto=format&fit=crop&w=2400&q=85" alt="Houston Uptown Skyline Aerial" class="hero-cinematic-img">
      <div class="hero-vignette"></div>
      <div class="hero-scanlines"></div>
      <canvas class="hero-canvas"></canvas>
    </div>

    <div class="container hero-content">
      <div class="pill-badge">
        <span class="pill-dot"></span>
        ONE FIRM. GLOBAL REACH.
      </div>

      <h1 class="hero-main-title">
        POST OAK
        <span>Financial Services Reimagined.</span>
      </h1>

      <p class="section-subtitle">
        An institutional-grade multinational financial services conglomerate headquartered in Houston, Texas. Delivering global financial solutions, capital markets sophistication, and deep sector expertise across six unified business divisions.
      </p>

      <div class="hero-actions">
        <a href="#capabilities" class="btn-primary">Explore Capabilities &rarr;</a>
        <a href="#about" class="btn-ghost">About the Firm</a>
      </div>
    </div>

    <!-- Requirement #2: Bottom-Left Rotating Animated Text -->
    <div class="hero-bottom-left-hud">
      <div class="hud-eyebrow">
        <span class="hud-status-dot"></span>
        <span class="hud-label">GLOBAL CAPABILITIES</span>
      </div>
      <div class="hero-rotating-wrapper">
        <span class="hero-rotating-text">Financial Services Reimagined.</span>
      </div>
    </div>

    <!-- Bottom-Right Telemetry -->
    <div class="hero-bottom-right-telemetry">
      <div>HOUSTON HQ &middot; 29.7499&deg; N, 95.4613&deg; W</div>
      <div><strong>GLOBAL MARKETS ACTIVE</strong></div>
    </div>
  </section>
