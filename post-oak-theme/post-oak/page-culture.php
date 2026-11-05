<?php
/**
 * Template Name: Culture
 * Post Oak culture page — people, values, and what makes the firm unique.
 *
 * @package PostOak
 */

get_header();

$pillars = array(
    array(
        'name'  => 'Global Mindset',
        'desc'  => 'Our professionals span four continents and dozens of nationalities. We bring genuinely global perspectives to every problem — and to every client relationship. At Post Oak, geographic and cultural diversity is a source of competitive advantage, not merely a corporate aspiration.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="32" cy="32" r="26"/><ellipse cx="32" cy="32" rx="11" ry="26"/><line x1="6" y1="32" x2="58" y2="32"/><path d="M12 18 Q32 22 52 18"/><path d="M12 46 Q32 42 52 46"/></svg>',
    ),
    array(
        'name'  => 'Integrity First',
        'desc'  => 'We do not compromise on ethics — ever. Post Oak was built on the belief that the best financial outcomes flow from the most honest relationships. Every member of our team is expected to hold themselves to a standard of conduct that would make any client proud to have us as their advisor.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M32 8 L50 18 V34 C50 46 42 56 32 60 C22 56 14 46 14 34 V18 Z"/><polyline points="24,32 29,37 40,26"/></svg>',
    ),
    array(
        'name'  => 'Excellence Always',
        'desc'  => 'We hire exceptional people and give them the platform, resources, and support to do their very best work. Excellence at Post Oak is not a differentiator — it is the minimum standard. We are relentlessly focused on the quality of our thinking, our execution, and our client relationships.',
        'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="32,8 38,24 56,24 42,36 48,52 32,42 16,52 22,36 8,24 26,24"/></svg>',
    ),
);
?>

<!-- ============================================================
     PAGE TRANSITION OVERLAY
     ============================================================ -->
<div class="page-transition-overlay" aria-hidden="true"></div>

<!-- ============================================================
     FULL-HEIGHT CULTURE HERO
     ============================================================ -->
<section class="culture-page-hero" aria-label="Culture hero">

    <div class="culture-hero-bg" aria-hidden="true">
        <div class="culture-hero-gradient"></div>
        <div class="culture-hero-vignette"></div>
    </div>

    <div class="culture-hero-content">
        <div class="container">
            <div class="culture-hero-inner reveal-on-scroll">
                <div class="section-label">Our Culture</div>
                <h1 class="culture-hero-title">The People Behind<br>Post Oak</h1>
                <p class="culture-hero-subtitle">
                    One firm. One culture. A shared pursuit of excellence.
                </p>
                <div class="culture-hero-cta">
                    <a href="#culture-pillars" class="btn-ghost">Explore Our Culture</a>
                </div>
            </div>
        </div>
    </div>

    <div class="culture-hero-scroll" aria-hidden="true">
        <span>Scroll</span>
        <div class="scroll-line"></div>
    </div>

</section><!-- .culture-page-hero -->


<!-- ============================================================
     INTRO STATEMENT
     ============================================================ -->
<section class="section-pad culture-intro" aria-label="Culture introduction">
    <div class="container">
        <div class="culture-intro-grid">

            <div class="culture-intro-left reveal-on-scroll">
                <div class="section-label">Who We Are</div>
                <h2 class="section-title">A Firm Built on<br>Exceptional People</h2>
            </div>

            <div class="culture-intro-right reveal-on-scroll">
                <p class="culture-intro-lead">
                    Post Oak's culture is the foundation of everything we do. We recruit outstanding
                    professionals from the world's most demanding financial institutions and create an
                    environment where their talent, creativity, and ambition can flourish.
                </p>
                <p class="culture-intro-body">
                    We are deliberate in building a culture of intellectual rigour, collaborative teamwork,
                    and unwavering ethical standards. We believe that a diverse, inclusive, and deeply
                    motivated team produces better thinking, better advice, and better outcomes for our
                    clients than any other competitive advantage we could build.
                </p>
                <p class="culture-intro-body">
                    At Post Oak, careers are built over the long term. We invest in our people through
                    mentorship, training, international opportunities, and the kind of meaningful work that
                    challenges and rewards the most ambitious financial professionals.
                </p>
            </div>

        </div><!-- .culture-intro-grid -->
    </div><!-- .container -->
</section><!-- .culture-intro -->


<!-- ============================================================
     BRAND FILM / VIDEO PLACEHOLDER
     ============================================================ -->
<section class="section-pad culture-film" aria-label="Brand film">
    <div class="container">

        <div class="culture-film-header reveal-on-scroll">
            <div class="section-label">Our Story</div>
            <h2 class="section-title">Post Oak — The Film</h2>
            <p class="culture-film-intro">
                A look inside Post Oak. Meet the people, understand the vision, and experience the culture
                that is building one of the world's premier financial services firms.
            </p>
        </div>

        <!-- Prominent Video Placeholder -->
        <div class="culture-video-block reveal-on-scroll" role="img" aria-label="Post Oak brand film video placeholder">
            <div class="culture-video-frame">
                <div class="culture-video-overlay">
                    <div class="culture-video-play" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" fill="none">
                            <circle cx="40" cy="40" r="38" stroke="white" stroke-width="1.5" opacity="0.5"/>
                            <circle cx="40" cy="40" r="30" stroke="white" stroke-width="1" opacity="0.25"/>
                            <polygon points="32,24 60,40 32,56" fill="white"/>
                        </svg>
                    </div>
                    <div class="culture-video-title">
                        <span class="culture-video-label">Post Oak &mdash; Our Story</span>
                        <span class="culture-video-duration">4:32</span>
                    </div>
                </div><!-- .culture-video-overlay -->
            </div><!-- .culture-video-frame -->
        </div><!-- .culture-video-block -->

    </div><!-- .container -->
</section><!-- .culture-film -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     CULTURE PILLARS
     ============================================================ -->
<section id="culture-pillars" class="section-pad culture-pillars" aria-label="Culture pillars">
    <div class="container">

        <div class="section-header reveal-on-scroll">
            <div class="section-label">What We Believe</div>
            <h2 class="section-title">Three Pillars of<br>Post Oak Culture</h2>
        </div>

        <div class="culture-pillars-grid">
            <?php foreach ( $pillars as $index => $pillar ) : ?>
            <div class="culture-pillar reveal-stagger" style="--stagger-delay: <?php echo esc_attr( $index * 0.10 ); ?>s;">
                <div class="pillar-icon" aria-hidden="true">
                    <?php echo $pillar['icon']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
                </div>
                <h3 class="pillar-name"><?php echo esc_html( $pillar['name'] ); ?></h3>
                <div class="pillar-rule" aria-hidden="true"></div>
                <p class="pillar-desc"><?php echo esc_html( $pillar['desc'] ); ?></p>
            </div><!-- .culture-pillar -->
            <?php endforeach; ?>
        </div><!-- .culture-pillars-grid -->

    </div><!-- .container -->
</section><!-- .culture-pillars -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     PULL QUOTE SECTION
     ============================================================ -->
<section class="culture-quote-section" aria-label="Leadership quote">
    <div class="container">
        <div class="culture-quote-inner reveal-on-scroll">
            <div class="culture-quote-mark" aria-hidden="true">&ldquo;</div>
            <blockquote class="culture-pullquote">
                We did not build Post Oak to be another financial services firm.
                We built it to be the financial services firm — one that clients trust completely,
                that professionals are proud to be part of, and that stands for something enduring
                in an industry that too often mistakes activity for purpose.
            </blockquote>
            <div class="culture-quote-attribution">
                <div class="quote-author">Alexander V. Rousseau</div>
                <div class="quote-title">Chief Executive Officer, Post Oak</div>
            </div>
        </div>
    </div>
</section><!-- .culture-quote-section -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     DIVERSITY & INCLUSION
     ============================================================ -->
<section class="section-pad culture-dei" aria-label="Diversity and Inclusion">
    <div class="container">
        <div class="dei-grid">

            <div class="dei-left reveal-on-scroll">
                <div class="section-label">Diversity &amp; Inclusion</div>
                <h2 class="section-title">Different Perspectives.<br>Better Outcomes.</h2>
                <p>
                    Post Oak is committed to building one of the most diverse professional teams in the global
                    financial services industry. We actively recruit across geographies, backgrounds, and
                    academic disciplines — believing that diverse perspectives produce superior thinking and
                    better client outcomes.
                </p>
                <p>
                    Our inclusion programmes support talent development, mentorship, and sponsorship for
                    professionals from underrepresented groups. We hold our leadership accountable for
                    meaningful progress on diversity metrics — not aspirational targets.
                </p>
            </div><!-- .dei-left -->

            <div class="dei-right reveal-on-scroll">
                <div class="dei-stats">
                    <div class="dei-stat">
                        <div class="dei-number">40+</div>
                        <div class="dei-desc">Nationalities represented across the firm</div>
                    </div>
                    <div class="dei-stat">
                        <div class="dei-number">4</div>
                        <div class="dei-desc">Continents where our professionals work</div>
                    </div>
                    <div class="dei-stat">
                        <div class="dei-number">12+</div>
                        <div class="dei-desc">Languages spoken across Post Oak offices</div>
                    </div>
                </div><!-- .dei-stats -->
            </div><!-- .dei-right -->

        </div><!-- .dei-grid -->
    </div><!-- .container -->
</section><!-- .culture-dei -->


<div class="section-divider container" aria-hidden="true"></div>


<!-- ============================================================
     CAREERS TEASER
     ============================================================ -->
<section class="section-pad culture-careers" aria-label="Careers at Post Oak">
    <div class="container">
        <div class="careers-teaser reveal-on-scroll">

            <div class="careers-teaser-text">
                <div class="section-label">Careers</div>
                <h2 class="section-title">Join Post Oak</h2>
                <p>
                    We are always looking for exceptional people who share our standards, our ambition,
                    and our commitment to excellence. If you are ready to do the most meaningful work of
                    your financial career, we want to hear from you.
                </p>
            </div>

            <div class="careers-teaser-roles">
                <div class="role-category">
                    <h4>Experienced Professionals</h4>
                    <p>Senior roles across all six divisions for accomplished professionals seeking a platform where their expertise can have real impact.</p>
                </div>
                <div class="role-category">
                    <h4>Analysts &amp; Associates</h4>
                    <p>Structured programmes for exceptional graduates and early-career professionals who want to build their careers at an exceptional firm.</p>
                </div>
                <div class="role-category">
                    <h4>Summer &amp; Internship</h4>
                    <p>Competitive internship programmes across our Houston, New York, London, and Singapore offices for outstanding students.</p>
                </div>
            </div><!-- .careers-teaser-roles -->

            <div class="careers-cta">
                <a href="<?php echo esc_url( home_url( '/global/careers' ) ); ?>" class="btn-primary">
                    View Opportunities
                </a>
            </div>

        </div><!-- .careers-teaser -->
    </div><!-- .container -->
</section><!-- .culture-careers -->


<!-- ============================================================
     CTA BAND
     ============================================================ -->
<section class="cta-band reveal-on-scroll" aria-label="Call to Action">
    <div class="container">
        <div class="cta-band-inner">
            <div class="cta-band-text">
                <div class="section-label">Get In Touch</div>
                <h2 class="section-title">Connect With<br>Post Oak</h2>
            </div>
            <div class="cta-band-actions">
                <a href="<?php echo esc_url( home_url( '/global/contact' ) ); ?>" class="btn-primary">
                    Contact Us
                </a>
                <a href="<?php echo esc_url( home_url( '/global/about' ) ); ?>" class="btn-ghost">
                    About the Firm
                </a>
            </div>
        </div>
    </div>
</section><!-- .cta-band -->

<?php get_footer(); ?>
