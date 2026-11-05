<?php
/**
 * Template Name: About
 * About Post Oak — firm story, mission, values, and leadership intro.
 *
 * @package PostOak
 */

get_header();

$values = array(
    array(
        'name'  => 'Integrity',
        'desc'  => 'We hold ourselves to the highest ethical standards in every transaction, relationship, and decision — with no exceptions. Our clients trust us with their most critical financial objectives, and we honour that trust completely.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M24 6 L38 14 V26 C38 34 31 41 24 44 C17 41 10 34 10 26 V14 Z"/><polyline points="18,24 22,28 30,20"/></svg>',
    ),
    array(
        'name'  => 'Excellence',
        'desc'  => 'We pursue excellence in every aspect of our work — from the quality of our advice and research to the precision of our execution and the calibre of our client service. Good enough is never good enough at Post Oak.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="24,6 29,18 42,18 32,27 36,40 24,32 12,40 16,27 6,18 19,18"/></svg>',
    ),
    array(
        'name'  => 'Global Perspective',
        'desc'  => 'Operating across Houston, New York, London, and Singapore, we bring a genuinely global mindset to every engagement. We understand markets in their local context while delivering strategies with international breadth.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="24" cy="24" r="18"/><ellipse cx="24" cy="24" rx="8" ry="18"/><line x1="6" y1="24" x2="42" y2="24"/><line x1="9" y1="14" x2="39" y2="14"/><line x1="9" y1="34" x2="39" y2="34"/></svg>',
    ),
    array(
        'name'  => 'Innovation',
        'desc'  => 'We challenge conventional thinking and continuously evolve our capabilities, technology, and processes to deliver smarter, more effective solutions for clients in a rapidly changing financial landscape.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M24 6 C15 6 8 13 8 22 C8 29 13 35 20 37 L20 42 L28 42 L28 37 C35 35 40 29 40 22 C40 13 33 6 24 6Z"/><line x1="20" y1="42" x2="28" y2="42"/></svg>',
    ),
    array(
        'name'  => 'Client First',
        'desc'  => 'Every decision we make is filtered through one lens: what is best for our clients. Our firm\'s success is inseparable from our clients\' success, and we are relentlessly committed to creating exceptional, lasting value for the people and institutions we serve.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M24 42 C24 42 6 30 6 18 C6 12 11 7 17 7 C20 7 23 9 24 11 C25 9 28 7 31 7 C37 7 42 12 42 18 C42 30 24 42 24 42Z"/></svg>',
    ),
);

$timeline = array(
    array(
        'year'  => '2024',
        'title' => 'Founding',
        'desc'  => 'Post Oak is established in Houston, Texas, with a founding team drawn from the world\'s leading financial institutions. The firm launches with a clear mandate: to build an integrated, institutional-grade financial services conglomerate for the modern era.',
    ),
    array(
        'year'  => '2024',
        'title' => 'Platform Launch',
        'desc'  => 'Post Oak launches all six business divisions simultaneously — Asset Management, Commercial Banking, Investment Banking, Global Investment Research, Private Banking, and Wealth Management — establishing its full-service platform from inception.',
    ),
    array(
        'year'  => '2024',
        'title' => 'Global Footprint',
        'desc'  => 'Post Oak establishes offices in New York, London, and Singapore, complementing its Houston headquarters and creating a truly global operating platform capable of serving clients across the Americas, Europe, and Asia-Pacific.',
    ),
    array(
        'year'  => '2025',
        'title' => 'Growth & Expansion',
        'desc'  => 'The firm deepens its platform across all divisions, growing its professional team to over 150 experts worldwide and expanding client relationships across institutional, corporate, and private client segments in key global markets.',
    ),
    array(
        'year'  => 'Today',
        'title' => 'One Firm. Global Reach.',
        'desc'  => 'Post Oak continues to build on its integrated platform, committed to its founding principle: delivering the depth, sophistication, and institutional quality of a major global financial institution, combined with the responsiveness and client focus of a boutique firm.',
    ),
);
?>

<!-- ============================================================
     PAGE TRANSITION OVERLAY
     ============================================================ -->
<div class="page-transition-overlay" aria-hidden="true"></div>

<!-- ============================================================
     PAGE HERO
     ============================================================ -->
<section class="page-hero about-hero" aria-label="About Post Oak hero">
    <div class="page-hero-bg" aria-hidden="true">
        <div class="page-hero-gradient"></div>
    </div>
    <div class="container">
        <div class="page-hero-content reveal-on-scroll">
            <div class="section-label">About Post Oak</div>
            <h1 class="page-hero-title">A New Standard in<br>Global Financial Services</h1>
            <p class="page-hero-lead">
                Post Oak is a multinational financial services conglomerate headquartered in Houston, Texas,
                delivering institutional-grade capabilities across six integrated business divisions.
            </p>
        </div>
    </div>
</section><!-- .about-hero -->


<!-- ============================================================
     MISSION SECTION
     ============================================================ -->
<section class="section-pad about-mission" aria-label="Our Mission">
    <div class="container">
        <div class="mission-grid">

            <div class="mission-left reveal-on-scroll">
                <div class="section-label">Our Mission</div>
                <h2 class="section-title">Why Post Oak Exists</h2>
            </div>

            <div class="mission-right reveal-on-scroll">
                <p class="mission-lead">
                    Post Oak exists to provide individuals, families, corporations, and institutions with access
                    to the full spectrum of financial services at the highest level of quality, executed with
                    integrity, precision, and a genuinely global perspective.
                </p>
                <p class="mission-body">
                    We believe the financial services industry deserves a firm that combines the breadth and
                    institutional depth of a large global bank with the agility, independence, and
                    client-centricity of a world-class boutique. That is what Post Oak is built to be.
                </p>
                <p class="mission-body">
                    By integrating six complementary business divisions under one roof, we eliminate the
                    fragmentation that clients typically face when working with multiple financial providers —
                    delivering a seamless, coordinated experience across every aspect of their financial lives.
                </p>
            </div>

        </div><!-- .mission-grid -->
    </div><!-- .container -->
</section><!-- .about-mission -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     OUR STORY / TIMELINE
     ============================================================ -->
<section class="section-pad about-story" aria-label="Our Story">
    <div class="container">

        <div class="section-header reveal-on-scroll">
            <div class="section-label">Our Story</div>
            <h2 class="section-title">From Vision to Reality</h2>
            <p class="section-intro">
                Post Oak was founded in 2024 with the ambition to redefine what a financial services firm
                can be. What follows is the story of how we built it.
            </p>
        </div>

        <div class="timeline">
            <?php foreach ( $timeline as $index => $event ) : ?>
            <div class="timeline-item reveal-stagger" style="--stagger-delay: <?php echo esc_attr( $index * 0.08 ); ?>s;">
                <div class="timeline-marker" aria-hidden="true">
                    <div class="timeline-dot"></div>
                    <div class="timeline-line"></div>
                </div>
                <div class="timeline-content">
                    <div class="timeline-year"><?php echo esc_html( $event['year'] ); ?></div>
                    <h3 class="timeline-title"><?php echo esc_html( $event['title'] ); ?></h3>
                    <p class="timeline-desc"><?php echo esc_html( $event['desc'] ); ?></p>
                </div>
            </div><!-- .timeline-item -->
            <?php endforeach; ?>
        </div><!-- .timeline -->

    </div><!-- .container -->
</section><!-- .about-story -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     VALUES SECTION
     ============================================================ -->
<section class="section-pad about-values" aria-label="Our Values">
    <div class="container">

        <div class="section-header reveal-on-scroll">
            <div class="section-label">Our Values</div>
            <h2 class="section-title">What We Stand For</h2>
            <p class="section-intro">
                Five core values define who we are, how we work, and the standard of service we deliver
                to every client, in every market, every day.
            </p>
        </div>

        <div class="values-grid">
            <?php foreach ( $values as $index => $value ) : ?>
            <div class="value-card reveal-stagger" style="--stagger-delay: <?php echo esc_attr( $index * 0.08 ); ?>s;">
                <div class="value-icon" aria-hidden="true">
                    <?php echo $value['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </div>
                <h3 class="value-name"><?php echo esc_html( $value['name'] ); ?></h3>
                <p class="value-desc"><?php echo esc_html( $value['desc'] ); ?></p>
            </div><!-- .value-card -->
            <?php endforeach; ?>
        </div><!-- .values-grid -->

    </div><!-- .container -->
</section><!-- .about-values -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     LEADERSHIP INTRO SECTION
     ============================================================ -->
<section class="section-pad about-leadership" aria-label="Leadership">
    <div class="container">
        <div class="about-leadership-grid">

            <div class="leadership-left reveal-on-scroll">
                <div class="section-label">Leadership</div>
                <h2 class="section-title">Experienced Leaders.<br>Shared Purpose.</h2>
                <p>
                    Post Oak is led by a distinguished team of financial professionals drawn from the world\'s
                    most respected banks, investment firms, and advisory organisations. Our leadership team
                    brings together decades of collective experience across every major financial market and
                    discipline, united by a shared vision for what Post Oak can become.
                </p>
                <p>
                    Our Board of Directors provides independent oversight and strategic guidance, ensuring the
                    firm is governed with the rigour and accountability befitting a leading global financial institution.
                </p>
                <a href="<?php echo esc_url( home_url( '/global/corporate-governance' ) ); ?>" class="btn-primary">
                    Corporate Governance
                </a>
            </div><!-- .leadership-left -->

            <div class="leadership-right reveal-on-scroll">
                <!-- Leadership stat cards -->
                <div class="leadership-stats">
                    <div class="leadership-stat-card">
                        <div class="ls-number">150+</div>
                        <div class="ls-label">Professionals Worldwide</div>
                    </div>
                    <div class="leadership-stat-card">
                        <div class="ls-number">6</div>
                        <div class="ls-label">Business Divisions</div>
                    </div>
                    <div class="leadership-stat-card">
                        <div class="ls-number">4</div>
                        <div class="ls-label">Global Offices</div>
                    </div>
                    <div class="leadership-stat-card">
                        <div class="ls-number">25+</div>
                        <div class="ls-label">Avg. Years Experience</div>
                    </div>
                </div><!-- .leadership-stats -->
            </div><!-- .leadership-right -->

        </div><!-- .about-leadership-grid -->
    </div><!-- .container -->
</section><!-- .about-leadership -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     ESG / ETHICS SECTION
     ============================================================ -->
<section class="section-pad about-esg" aria-label="ESG and Ethics">
    <div class="container">

        <div class="section-header reveal-on-scroll">
            <div class="section-label">ESG &amp; Ethics</div>
            <h2 class="section-title">Responsible Finance.<br>Lasting Impact.</h2>
        </div>

        <div class="esg-grid">

            <div class="esg-intro reveal-on-scroll">
                <p class="esg-lead">
                    At Post Oak, we believe that responsible financial practices and long-term value creation
                    are inseparable. Our commitment to environmental, social, and governance principles is
                    embedded in our investment frameworks, our business conduct, and our corporate culture.
                </p>
                <p class="esg-body">
                    We integrate ESG considerations across our investment research, asset management strategies,
                    and lending decisions. We hold ourselves to rigorous ethical standards in all client
                    interactions and business activities, maintaining zero tolerance for conflicts of interest,
                    market misconduct, or any breach of our fiduciary obligations.
                </p>
            </div><!-- .esg-intro -->

            <div class="esg-pillars reveal-on-scroll">
                <div class="esg-pillar">
                    <div class="esg-pillar-label">Environmental</div>
                    <p>We factor climate risk and sustainability into our investment analyses and lending frameworks, supporting the global transition to a lower-carbon economy.</p>
                </div>
                <div class="esg-pillar">
                    <div class="esg-pillar-label">Social</div>
                    <p>We are committed to diversity, equity, and inclusion within our firm, and to investing in communities and businesses that create broad-based economic opportunity.</p>
                </div>
                <div class="esg-pillar">
                    <div class="esg-pillar-label">Governance</div>
                    <p>We uphold the highest standards of corporate governance, transparency, and ethical conduct — from our boardroom to every client interaction.</p>
                </div>
            </div><!-- .esg-pillars -->

        </div><!-- .esg-grid -->

    </div><!-- .container -->
</section><!-- .about-esg -->


<!-- ============================================================
     CTA BAND
     ============================================================ -->
<section class="cta-band reveal-on-scroll" aria-label="Call to Action">
    <div class="container">
        <div class="cta-band-inner">
            <div class="cta-band-text">
                <div class="section-label">Connect With Us</div>
                <h2 class="section-title">Begin a Conversation<br>With Post Oak</h2>
            </div>
            <div class="cta-band-actions">
                <a href="<?php echo esc_url( home_url( '/global/contact' ) ); ?>" class="btn-primary">
                    Contact Us
                </a>
                <a href="<?php echo esc_url( home_url( '/global/capabilities' ) ); ?>" class="btn-ghost">
                    Our Capabilities
                </a>
            </div>
        </div>
    </div>
</section><!-- .cta-band -->

<?php get_footer(); ?>
