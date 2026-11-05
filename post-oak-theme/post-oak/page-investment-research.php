<?php
/**
 * Template Name: Global Investment Research
 *
 * Division page for Post Oak Global Investment Research.
 *
 * @package PostOak
 */

get_header(); ?>

<!-- =========================================================
     DIVISION HERO
     ========================================================= -->
<section class="division-hero division-hero--investment-research">
    <div class="division-hero__overlay"></div>
    <div class="container division-hero__inner">
        <div class="division-hero__eyebrow reveal-on-scroll">
            <span class="section-label">Post Oak &mdash; Capabilities</span>
        </div>
        <h1 class="division-hero__title reveal-on-scroll">Global Investment Research</h1>
        <p class="division-hero__tagline reveal-on-scroll">
            Intelligence That Drives Decisions.
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
                    Proprietary Analysis. Informed Perspective. Decisive Insight.
                </h2>
                <p class="division-overview__body reveal-on-scroll">
                    Post Oak Global Investment Research provides proprietary, independent analysis across
                    global economies, capital markets, sectors, and asset classes. Our research is used
                    internally to guide investment and banking decisions, and is provided to select
                    institutional clients to support informed investment and strategic decision-making.
                    We are not constrained by consensus; we are committed to intellectual honesty and
                    analytical independence.
                </p>
                <p class="division-overview__body reveal-on-scroll">
                    Our research professionals include economists, sector analysts, quantitative
                    strategists, and geopolitical specialists — forming an integrated team that connects
                    the macroeconomic view to individual security and sector-level analysis. The result
                    is research that is both rigorous and directly actionable for investors.
                </p>
                <div class="division-overview__stats reveal-on-scroll">
                    <div class="stat-item">
                        <span class="stat-item__value">800+</span>
                        <span class="stat-item__label">Stocks Under Coverage</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">50+</span>
                        <span class="stat-item__label">Economies Analyzed</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-item__value">120+</span>
                        <span class="stat-item__label">Research Professionals Globally</span>
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
            <h2 class="section-title reveal-on-scroll">Our Research Coverage</h2>
            <p class="division-services__intro reveal-on-scroll">
                Comprehensive investment research spanning macro, equities, credit, and thematic
                frameworks — built to inform the most important investment decisions.
            </p>
        </div>

        <div class="capabilities-grid reveal-stagger">

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="24" cy="24" r="17" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M24 7C24 7 32 16 32 24C32 32 24 41 24 41" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M7 24H41" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M10 16H38" stroke="currentColor" stroke-width="2" stroke-dasharray="2 3"/>
                        <path d="M10 32H38" stroke="currentColor" stroke-width="2" stroke-dasharray="2 3"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Macroeconomic Research</h3>
                <p class="capability-card__body">
                    In-depth analysis of global and regional economic trends, central bank policy, fiscal
                    dynamics, and geopolitical risk. Our macro framework provides the foundation for
                    top-down asset allocation and risk positioning across all asset classes.
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
                        <path d="M34 14H42V22" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Equity Research</h3>
                <p class="capability-card__body">
                    Fundamental equity analysis of companies across global markets, with deep sector
                    expertise in technology, energy, financials, healthcare, industrials, and consumer.
                    Coverage includes earnings models, valuation frameworks, and investment
                    recommendations with defined catalysts.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <rect x="8" y="8" width="32" height="32" rx="3" stroke="currentColor" stroke-width="2.5"/>
                        <path d="M16 20H32" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M16 26H28" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                        <path d="M16 32H22" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Fixed Income &amp; Credit Research</h3>
                <p class="capability-card__body">
                    Analysis of sovereign and corporate credit across investment-grade and high-yield
                    markets. Relative value frameworks, credit quality assessment, spread analysis, and
                    structured product research — covering both primary issuance and secondary market
                    opportunities.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="capability-card__link">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="capability-card">
                <div class="capability-card__accent"></div>
                <div class="capability-card__icon">
                    <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M24 8L28 18H39L30 25L33 36L24 29L15 36L18 25L9 18H20L24 8Z" stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 class="capability-card__title">Thematic &amp; Sector Research</h3>
                <p class="capability-card__body">
                    Forward-looking research on structural investment themes including artificial
                    intelligence, energy transition, demographic shifts, emerging market growth, and
                    digital assets. Thematic research is designed to surface long-duration investment
                    opportunities before they become consensus.
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
                <h3 class="division-why__title">Proprietary Insights</h3>
                <p class="division-why__body">
                    Our research is not an aggregation of consensus views. Post Oak's analysts form
                    independent judgments grounded in original primary research, proprietary data, and
                    direct engagement with management teams, policymakers, and industry experts globally.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">02</div>
                <h3 class="division-why__title">Global Coverage</h3>
                <p class="division-why__body">
                    Our research teams are embedded in the markets they cover, with analysts based in
                    Houston, New York, London, Singapore, and other key financial centers. Local presence
                    produces richer, more nuanced analysis than remote coverage can deliver.
                </p>
            </div>

            <div class="division-why__item">
                <div class="division-why__number">03</div>
                <h3 class="division-why__title">Actionable Intelligence</h3>
                <p class="division-why__body">
                    Every piece of research Post Oak publishes is designed to inform a decision — not
                    simply describe a situation. We provide clear investment conclusions, risk factors,
                    and catalysts that allow our clients to act with conviction and appropriate context.
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
            <span class="section-label cta-band__label">Research Access</span>
            <h2 class="cta-band__title">Access Post Oak Global Research</h2>
            <p class="cta-band__body">
                Institutional clients may inquire about access to Post Oak Global Investment Research
                publications and analyst engagement.
            </p>
        </div>
        <div class="cta-band__actions reveal-on-scroll">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn-primary">Inquire About Research Access</a>
            <a href="<?php echo esc_url( home_url( '/capabilities' ) ); ?>" class="btn-ghost">All Capabilities</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
