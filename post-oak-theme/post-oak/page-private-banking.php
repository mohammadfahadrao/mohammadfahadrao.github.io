<?php
/**
 * Template Name: Private Banking
 *
 * Division page for Post Oak Private Banking.
 *
 * @package PostOak
 */

get_header(); ?>

<!-- =========================================================
     DIVISION HERO
     ========================================================= -->
<section class="division-hero division-hero--private-banking">
    <div class="division-hero__overlay"></div>
    <div class="container division-hero__inner">
        <div class="division-hero__eyebrow reveal-on-scroll">
            <span class="section-label">Post Oak &mdash; Capabilities</span>
        </div>
        <h1 class="division-hero__title reveal-on-scroll">Private Banking</h1>
        <p class="division-hero__tagline reveal-on-scroll">
            Exclusive Banking. Tailored to You.
        </p>
        <div class="division-hero__cta reveal-on-scroll">
            <a href="#overview" class="btn-ghost btn-ghost--light">Explore the Division</a>
        </div>
    </div>
    <div class="division-hero__scroll-cue">
        <span></span>
    </div>
</section>

<!-- =========================================================
     OVERVIEW
     ========================================================= -->
<section id="overview" class="section-pad division-overview">
    <div class="container">
        <div class="division-overview__grid">
            <div class="division-overview__label reveal-on-scroll">
                <span class="section-label">Overview</span>
            </div>
            <div class="division-overview__content">
                <h2 class="section-title reveal-on-scroll">
                    A Private Banking Experience Without Compromise
                </h2>
                <p class="division-overview__body reveal-on-scroll">
                    Post Oak Private Banking serves high-net-worth and ultra-high-net-worth individuals,
                    families, and family offices with a fully integrated suite of bespoke banking, credit,
                    and investment services. Our private bankers offer discreet, personalized service and
                    direct access to the full capabilities of the Post Oak platform — from customized
                    lending structures to curated investment opportunities unavailable through conventional
                    channels.
                </p>
                <p class="division-overview__body reveal-on-scroll">
                    We believe that private banking at its highest expression is about relationships, not
                    products. Each client is served by a dedicated private banker who understands their
                    complete financial picture, anticipates their needs, and coordinates seamlessly across
                    banking, investment, and advisory services. Access, discretion, and excellence are
                    the pillars of everything we do.
                </p>
                <div class="division-overview__stats reveal-on-scroll">
                    <div class="stat-item">
                        <span class="stat-item__value">$75B+</span>
                        <span class="stat-item__label">Private Client Assets</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">25+</span>
                        <span class="stat-item__label">Years of Private Banking Excellence</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">12</span>
                        <span class="stat-item__label">Private Banking Centers Globally</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     KEY SERVICES
     ========================================================= -->
<section class="section-pad division-services division-services--dark">
    <div class="container">
        <div class="division-services__header">
            <span class="section-label reveal-on-scroll">What We Do</span>
            <h2 class="section-title reveal-on-scroll">Our Private Banking Services</h2>
            <p class="division-services__intro reveal-on-scroll">
                Comprehensive, bespoke private banking services designed for the most discerning
                individuals and families.
            </p>
        </div>

        <div class="capabilities-grid reveal-stagger">

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="8" y="14" width="32" height="22" rx="3" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M16 22H32" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M16 28H24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M15 14V11" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M33 14V11" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Bespoke Credit &amp; Lending</h3>
                <p class="capability-card__body">
                    Customized credit solutions including securities-backed lending, real estate
                    financing, yacht and aviation financing, and bespoke structured credit. Flexible
                    terms and structures designed around the client's assets, liquidity, and financial
                    objectives — not off-the-shelf products.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M24 10C24 10 14 18 14 26C14 31.5 18.5 36 24 36C29.5 36 34 31.5 34 26C34 18 24 10 24 10Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                        <path d="M24 36V42" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M18 42H30" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Concierge Banking</h3>
                <p class="capability-card__body">
                    Premium transactional banking with dedicated relationship managers available around
                    the clock. Multi-currency accounts, priority foreign exchange, bespoke payment
                    solutions, and privileged access to Post Oak products and market opportunities —
                    all coordinated through a single point of contact.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M24 8L28 18H40L31 25L34 36L24 29L14 36L17 25L8 18H20L24 8Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Family Office Services</h3>
                <p class="capability-card__body">
                    Comprehensive support for family offices including consolidated reporting, alternative
                    investment access, co-investment opportunities, operational infrastructure, and
                    governance advisory. We function as an extension of your family office team,
                    not a service provider.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M24 6C24 6 12 12 12 24V38L24 42L36 38V24C36 12 24 6 24 6Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Philanthropy Advisory</h3>
                <p class="capability-card__body">
                    Strategic guidance on charitable giving, foundation structuring, impact investing,
                    and philanthropy governance. We help clients align their philanthropic goals with
                    their values and financial planning — creating legacies that extend well beyond
                    financial wealth.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     WHY POST OAK
     ========================================================= -->
<section class="section-pad division-why">
    <div class="container">
        <div class="division-why__header">
            <span class="section-label reveal-on-scroll">Why Post Oak</span>
            <h2 class="section-title reveal-on-scroll">The Post Oak Advantage</h2>
        </div>
        <div class="division-why__grid reveal-stagger">

            <div class="division-why__item">
                <div class="division-why__number">01</div>
                <h3 class="division-why__title">Dedicated Private Bankers</h3>
                <p class="division-why__body">
                    Every Post Oak Private Banking client is served by a named, dedicated private banker
                    who maintains an intentionally limited book of clients. This ensures genuine
                    personal attention — not a call center or rotating team — for every need, large
                    or small.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">02</div>
                <h3 class="division-why__title">Discreet Service</h3>
                <p class="division-why__body">
                    Confidentiality is fundamental to everything we do. Post Oak Private Banking
                    operates with the strictest standards of privacy and discretion — protecting our
                    clients' financial affairs, identities, and relationships as we would our own.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">03</div>
                <h3 class="division-why__title">Full-Platform Access</h3>
                <p class="division-why__body">
                    Private Banking clients gain privileged access to the entire Post Oak platform —
                    including exclusive investment opportunities, capital markets participation,
                    research, and advisory services that are not available through retail or standard
                    private banking channels.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     CTA BAND
     ========================================================= -->
<section class="cta-band">
    <div class="container cta-band__inner">
        <div class="cta-band__content reveal-on-scroll">
            <span class="section-label cta-band__label">Begin the Conversation</span>
            <h2 class="cta-band__title">Speak Privately with Our Team</h2>
            <p class="cta-band__body">
                Post Oak Private Banking accepts introductions by referral and by direct inquiry from
                qualified individuals and families. We welcome the opportunity to discuss your
                private banking needs in complete confidence.
            </p>
        </div>
        <div class="cta-band__actions reveal-on-scroll">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">Request a Private Introduction</a>
            <a href="<?php echo esc_url( home_url( '/capabilities' ) ); ?>" class="btn-ghost">All Capabilities</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
