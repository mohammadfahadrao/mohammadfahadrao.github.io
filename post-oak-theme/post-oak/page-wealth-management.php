<?php
/**
 * Template Name: Wealth Management
 *
 * Division page for Post Oak Wealth Management.
 *
 * @package PostOak
 */

get_header(); ?>

<!-- =========================================================
     DIVISION HERO
     ========================================================= -->
<section class="division-hero division-hero--wealth-management">
    <div class="division-hero__overlay"></div>
    <div class="container division-hero__inner">
        <div class="division-hero__eyebrow reveal-on-scroll">
            <span class="section-label">Post Oak &mdash; Capabilities</span>
        </div>
        <h1 class="division-hero__title reveal-on-scroll">Wealth Management</h1>
        <p class="division-hero__tagline reveal-on-scroll">
            Building and Preserving Generational Wealth.
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
                    A Holistic Approach to Growing and Protecting What Matters Most
                </h2>
                <p class="division-overview__body reveal-on-scroll">
                    Post Oak Wealth Management provides comprehensive financial planning, investment
                    management, and wealth preservation strategies for individuals, families, and
                    institutions. We take a holistic, long-term approach to growing and protecting wealth
                    across generations — integrating investment management, tax strategy, estate planning,
                    and risk management into a coherent, coordinated financial plan.
                </p>
                <p class="division-overview__body reveal-on-scroll">
                    Our wealth advisors work alongside each client to understand their financial goals,
                    family circumstances, and legacy ambitions. From this foundation, we build a
                    comprehensive wealth strategy — one that evolves with the client's life and adapts
                    to changing markets, tax environments, and personal priorities. Wealth is not simply
                    managed at Post Oak. It is nurtured, stewarded, and grown for generations to come.
                </p>
                <div class="division-overview__stats reveal-on-scroll">
                    <div class="stat-item">
                        <span class="stat-item__value">$95B+</span>
                        <span class="stat-item__label">Wealth Assets Managed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">3,500+</span>
                        <span class="stat-item__label">Client Households Served</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">35+</span>
                        <span class="stat-item__label">Years of Wealth Advisory</span>
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
            <h2 class="section-title reveal-on-scroll">Our Wealth Management Services</h2>
            <p class="division-services__intro reveal-on-scroll">
                Integrated wealth management services designed to build, preserve, and transfer wealth
                with intention and precision.
            </p>
        </div>

        <div class="capabilities-grid reveal-stagger">

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M10 38V20L24 10L38 20V38H28V28H20V38H10Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Financial Planning</h3>
                <p class="capability-card__body">
                    Comprehensive financial planning spanning cash flow analysis, retirement income
                    modeling, education funding, insurance planning, and risk assessment. We build
                    dynamic financial plans that serve as the roadmap for all wealth management
                    decisions across your lifetime and beyond.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 36L18 24L26 32L42 14" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="42" cy="14" r="3" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Portfolio Management</h3>
                <p class="capability-card__body">
                    Individually managed portfolios constructed around each client's return objectives,
                    risk tolerance, liquidity needs, and tax circumstances. Access to public equities,
                    fixed income, alternatives, and private markets — all managed with institutional
                    discipline within a personal mandate.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M24 8L24 40" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M14 20C14 20 14 14 24 14C34 14 34 20 34 20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M10 36H38" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <circle cx="24" cy="40" r="3" fill="currentColor"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Estate &amp; Legacy Planning</h3>
                <p class="capability-card__body">
                    Sophisticated estate planning strategies including trust structures, wealth transfer
                    techniques, charitable giving vehicles, and succession planning for business owners.
                    Coordinated with legal and tax advisors to ensure your legacy plan is comprehensive,
                    tax-efficient, and durable.
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
                        <path d="M24 16V24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M24 24L29 29" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M17 32L24 24" stroke="currentColor" stroke-width="2" stroke-dasharray="2 2"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Tax-Efficient Investing</h3>
                <p class="capability-card__body">
                    Strategies to minimize the tax drag on investment returns including tax-loss
                    harvesting, asset location optimization, direct indexing, and coordination of
                    realized gains with charitable giving. Tax efficiency is integrated throughout
                    portfolio construction and rebalancing decisions.
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
                <h3 class="division-why__title">Holistic Approach</h3>
                <p class="division-why__body">
                    Post Oak does not manage investments in isolation. We integrate financial planning,
                    tax strategy, estate planning, and investment management into a single, coherent
                    wealth strategy — ensuring every element of your financial life works in concert
                    toward your goals.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">02</div>
                <h3 class="division-why__title">Long-Term Focus</h3>
                <p class="division-why__body">
                    Our wealth advisors are not measured by short-term product sales or quarterly
                    performance against arbitrary benchmarks. We are measured by the long-term outcomes
                    we deliver for our clients — and that alignment of incentives drives everything
                    we recommend and every decision we make.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">03</div>
                <h3 class="division-why__title">Generational Thinking</h3>
                <p class="division-why__body">
                    Great wealth management extends beyond the client in front of us. Post Oak plans
                    for the generation after, and the generation after that — building frameworks for
                    governance, education, succession, and philanthropy that ensure wealth is not just
                    preserved, but purposefully transferred.
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
            <span class="section-label cta-band__label">Begin Your Wealth Plan</span>
            <h2 class="cta-band__title">Speak with a Post Oak Wealth Advisor</h2>
            <p class="cta-band__body">
                Our wealth management team is ready to understand your financial goals and begin
                building the strategy to achieve them — for you, and for the generations that follow.
            </p>
        </div>
        <div class="cta-band__actions reveal-on-scroll">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">Schedule a Consultation</a>
            <a href="<?php echo esc_url( home_url( '/capabilities' ) ); ?>" class="btn-ghost">All Capabilities</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
