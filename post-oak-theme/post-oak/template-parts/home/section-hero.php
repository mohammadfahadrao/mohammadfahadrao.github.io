<?php
/**
 * Template Part: Hero section with video & telemetry
 *
 * @package PostOak
 */
defined( 'ABSPATH' ) || exit;
?>
<section id="hero" class="hero-section">
    <div class="hero-cinematic-bg">
      <!-- High-Tech Video Engine: Houston Cityscape & Corporate Skyline -->
      <video class="hero-video" autoplay loop muted playsinline preload="auto" poster="https://images.unsplash.com/photo-1585348897632-67b6dc134029?auto=format&fit=crop&w=2400&q=85">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-large-buildings-lit-up-at-night-41584-large.mp4" type="video/mp4">
        <source src="https://assets.mixkit.co/videos/preview/mixkit-lights-across-a-night-skyline-31620-large.mp4" type="video/mp4">
      </video>
      <div class="hero-vignette"></div>
      <div class="hero-grid-overlay"></div>
      <div class="hero-scanlines"></div>
      <canvas class="hero-canvas"></canvas>
    </div>

    <div class="container hero-content">
      <div class="hero-telemetry-strip">
        <div class="pill-badge">
          <span class="pill-dot"></span>
          GLOBAL CORPORATION // HIGH-TECH FINANCIAL INFRASTRUCTURE
        </div>
        <div class="hero-live-badge">
          <span class="live-indicator"></span> ◉ 4K LIVE CINEMATIC FEED &middot; HOUSTON UPTOWN SKYLINE
        </div>
      </div>

      <h1 class="hero-main-title">
        POST OAK
        <span>Financial Services Reimagined.</span>
      </h1>

      <p class="section-subtitle">
        An institutional-grade multinational financial services conglomerate. Delivering mission-critical capital solutions, global markets sophistication, and advanced intelligence infrastructure supporting aerospace, defense, and sovereign enterprises at the scale of SpaceX, Boeing, Lockheed Martin, and Palantir.
      </p>

      
      <!-- Client Mandate: Core Capabilities Reimagined Ticker -->
      <div class="hero-pillars-ticker">
        <a href="#capabilities" class="pillar-tag"><span class="pillar-dot"></span> Commercial Banking. Reimagined.</a>
        <a href="#capabilities" class="pillar-tag"><span class="pillar-dot"></span> Investment Banking. Reimagined.</a>
        <a href="#capabilities" class="pillar-tag"><span class="pillar-dot"></span> Asset Management. Reimagined.</a>
        <a href="#capabilities" class="pillar-tag"><span class="pillar-dot"></span> Investment Research. Reimagined.</a>
        <a href="#capabilities" class="pillar-tag"><span class="pillar-dot"></span> Private Banking. Reimagined.</a>
        <a href="#capabilities" class="pillar-tag"><span class="pillar-dot"></span> Wealth Management. Reimagined.</a>
      </div>
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
