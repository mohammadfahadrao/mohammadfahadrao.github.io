<?php
/**
 * Template Name: Asset Management
 *
 * Division page for Post Oak Asset Management.
 *
 * @package PostOak
 */

get_header(); ?>

<!-- =========================================================
     DIVISION HERO
     ========================================================= -->
<section class="division-hero division-hero--asset-management">
    <div class="division-hero__overlay"></div>
    <div class="container division-hero__inner">
        <div class="division-hero__eyebrow reveal-on-scroll">
            <span class="section-label">Post Oak &mdash; Capabilities</span>
        </div>
        <h1 class="division-hero__title reveal-on-scroll">Asset Management</h1>
        <p class="division-hero__tagline reveal-on-scroll">
            Institutional Investment. Engineered for Performance.
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
                    Capital Managed with Institutional Precision
                </h2>
                <p class="division-overview__body reveal-on-scroll">
                    Post Oak Asset Management delivers institutional-caliber investment strategies across public
                    and private markets, fixed income, equities, and alternative investments. We manage capital
                    for institutions, family offices, foundations, and sophisticated investors worldwide. Every
                    mandate is approached with rigorous research, disciplined risk management, and an unwavering
                    commitment to long-term performance.
                </p>
                <p class="division-overview__body reveal-on-scroll">
                    Our investment teams combine deep fundamental analysis with a macro-aware perspective,
                    constructing portfolios designed to generate alpha while managing downside risk. We serve
                    clients across six continents and manage assets spanning every major geography and asset
                    class — bringing global insight to every allocation decision.
                </p>
                <div class="division-overview__stats reveal-on-scroll">
                    <div class="stat-item">
                        <span class="stat-item__value">$120B+</span>
                        <span class="stat-item__label">Assets Under Management</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">40+</span>
                        <span class="stat-item__label">Years of Institutional Experience</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">30+</span>
                        <span class="stat-item__label">Markets Covered Globally</span>
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
            <h2 class="section-title reveal-on-scroll">Our Investment Strategies</h2>
            <p class="division-services__intro reveal-on-scroll">
                Comprehensive investment management solutions, tailored to the unique objectives of
                each client mandate.
            </p>
        </div>

        <div class="capabilities-grid reveal-stagger">

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 36L18 24L26 32L42 14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="42" cy="14" r="3" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Equities &amp; Fixed Income</h3>
                <p class="capability-card__body">
                    Active and passive equity strategies spanning large-cap, small-cap, and global mandates.
                    Investment-grade and high-yield fixed income portfolios managed for income, capital
                    preservation, and total return.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="6" y="6" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2.5"/>
                        <rect x="26" y="6" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2.5"/>
                        <rect x="6" y="26" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2.5"/>
                        <rect x="26" y="26" width="16" height="16" rx="2" stroke="currentColor" stroke-width="2.5"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Alternative Investments</h3>
                <p class="capability-card__body">
                    Access to private equity, hedge fund strategies, real assets, infrastructure, and
                    commodities. Alternative allocations designed to diversify return streams and reduce
                    portfolio correlation to public markets.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="24" cy="24" r="17" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M24 7C24 7 32 16 32 24C32 32 24 41 24 41" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M7 24H41" stroke="currentColor" stroke-width="2.5"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Multi-Asset Strategies</h3>
                <p class="capability-card__body">
                    Dynamic, balanced portfolios that allocate across asset classes in response to evolving
                    market conditions. Risk-adjusted multi-asset frameworks built to meet specific return
                    targets and volatility constraints.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M24 6L28.5 16H39L30.5 22.5L34 33L24 27L14 33L17.5 22.5L9 16H19.5L24 6Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">ESG-Integrated Portfolios</h3>
                <p class="capability-card__body">
                    Investment frameworks that integrate Environmental, Social, and Governance factors
                    alongside financial analysis. Purpose-built sustainable strategies for clients with
                    impact mandates or responsible investment policies.
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
                <h3 class="division-why__title">Institutional Discipline</h3>
                <p class="division-why__body">
                    Our investment process is governed by the same rigorous standards applied by the
                    world's leading institutional investors — systematic, repeatable, and grounded in
                    fundamental research. We do not chase short-term trends; we build portfolios designed
                    to perform across full market cycles.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">02</div>
                <h3 class="division-why__title">Global Market Access</h3>
                <p class="division-why__body">
                    Post Oak's global infrastructure gives our investment teams direct access to markets,
                    issuers, and opportunities across North America, Europe, Asia-Pacific, and emerging
                    markets. Our reach translates directly into expanded opportunity sets for every client.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">03</div>
                <h3 class="division-why__title">Tailored Solutions</h3>
                <p class="division-why__body">
                    No two clients are identical. Our asset management mandates are structured around each
                    client's specific objectives, liquidity requirements, risk tolerance, and investment
                    horizon — delivered through separately managed accounts or commingled vehicles.
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
            <span class="section-label cta-band__label">Get Started</span>
            <h2 class="cta-band__title">Speak with an Asset Management Specialist</h2>
            <p class="cta-band__body">
                Our team is ready to discuss your investment objectives and how Post Oak Asset Management
                can help you achieve them.
            </p>
        </div>
        <div class="cta-band__actions reveal-on-scroll">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">Request a Consultation</a>
            <a href="<?php echo esc_url( home_url( '/capabilities' ) ); ?>" class="btn-ghost">All Capabilities</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
