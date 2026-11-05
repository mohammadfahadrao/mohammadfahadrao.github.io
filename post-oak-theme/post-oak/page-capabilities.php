<?php
/**
 * Template Name: Capabilities
 * Full capabilities landing page — all six Post Oak business divisions.
 *
 * @package PostOak
 */

get_header();

/**
 * Division data array.
 * Each entry: slug, numeral, name, tagline, description, link.
 */
$capabilities = array(
    array(
        'slug'        => 'asset-management',
        'numeral'     => 'I',
        'name'        => 'Asset Management',
        'tagline'     => 'Institutional-grade investment management across global markets.',
        'description' => 'Post Oak Asset Management delivers a comprehensive suite of institutional and alternative investment strategies designed to generate superior risk-adjusted returns across global asset classes. Our investment professionals combine rigorous fundamental research with quantitative analysis to construct portfolios aligned with the evolving goals of institutional investors, sovereign wealth funds, endowments, foundations, and family offices. We manage capital across public equities, fixed income, private equity, real assets, and multi-asset solutions, integrating macroeconomic insights with deep sector expertise to navigate complex market environments.',
        'link'        => home_url( '/global/capabilities/asset-management' ),
        'disciplines' => array( 'Public Equities', 'Fixed Income', 'Private Equity', 'Real Assets', 'Multi-Asset Solutions', 'Alternative Strategies' ),
    ),
    array(
        'slug'        => 'commercial-banking',
        'numeral'     => 'II',
        'name'        => 'Commercial Banking',
        'tagline'     => 'Comprehensive banking solutions for corporations operating at scale.',
        'description' => 'Post Oak Commercial Banking provides tailored lending, treasury, and financial solutions for corporations and institutions worldwide. Our bankers bring deep industry knowledge and the capacity to structure complex credit facilities, working capital solutions, and trade finance arrangements that reflect the unique dynamics of each client\'s business. From revolving credit facilities and term loans to cash management services and foreign exchange, we serve as a full-service banking partner for mid-market to large-cap enterprises operating across multiple jurisdictions.',
        'link'        => home_url( '/global/capabilities/commercial-banking' ),
        'disciplines' => array( 'Corporate Lending', 'Treasury & Cash Management', 'Trade Finance', 'Foreign Exchange', 'Structured Credit', 'Deposit Services' ),
    ),
    array(
        'slug'        => 'investment-banking',
        'numeral'     => 'III',
        'name'        => 'Investment Banking',
        'tagline'     => 'Strategic advisory and capital markets execution for transformative transactions.',
        'description' => 'Post Oak Investment Banking provides strategic advisory, capital markets, and transaction execution services at the highest level of the industry. Our bankers advise clients on mergers, acquisitions, divestitures, restructurings, and corporate strategy, drawing on deep sector expertise and a global network of institutional relationships. In capital markets, we underwrite and distribute equity and debt securities, structure innovative financing solutions, and provide liquidity across primary and secondary markets. Our commitment is to deliver unbiased, independent advice that serves each client\'s long-term strategic interests.',
        'link'        => home_url( '/global/capabilities/investment-banking' ),
        'disciplines' => array( 'Mergers & Acquisitions', 'Equity Capital Markets', 'Debt Capital Markets', 'Restructuring', 'Corporate Strategy', 'Fairness Opinions' ),
    ),
    array(
        'slug'        => 'research',
        'numeral'     => 'IV',
        'name'        => 'Global Investment Research',
        'tagline'     => 'Independent research that shapes investment decisions across global portfolios.',
        'description' => 'Post Oak Global Investment Research delivers proprietary research and market intelligence across global economies, capital markets, and sectors. Our research platform integrates macroeconomic analysis, sector-specific equity and credit research, quantitative strategy, and thematic thought leadership to equip institutional investors with the insights needed to navigate rapidly evolving markets. Research coverage spans developed and emerging markets, with dedicated analysts covering major industries including energy, technology, financials, healthcare, consumer goods, and industrials.',
        'link'        => home_url( '/global/capabilities/research' ),
        'disciplines' => array( 'Macro & Economics', 'Equity Research', 'Credit Research', 'Quantitative Strategy', 'ESG Research', 'Thematic Insights' ),
    ),
    array(
        'slug'        => 'private-banking',
        'numeral'     => 'V',
        'name'        => 'Private Banking',
        'tagline'     => 'Personalised banking and financial services for discerning individuals.',
        'description' => 'Post Oak Private Banking offers bespoke financial services and concierge banking for high-net-worth and ultra-high-net-worth individuals and their families. We provide access to exclusive investment opportunities, credit solutions structured around complex personal balance sheets, and banking services calibrated to the demands of globally mobile, sophisticated clients. Our private bankers serve as trusted advisors, maintaining long-term relationships and coordinating across the full breadth of Post Oak\'s platform to deliver holistic, integrated financial solutions.',
        'link'        => home_url( '/global/capabilities/private-banking' ),
        'disciplines' => array( 'Premium Lending', 'Concierge Banking', 'Real Estate Finance', 'Exclusive Investments', 'Family Office Services', 'Cross-Border Solutions' ),
    ),
    array(
        'slug'        => 'wealth-management',
        'numeral'     => 'VI',
        'name'        => 'Wealth Management',
        'tagline'     => 'Holistic wealth planning and portfolio management across generations.',
        'description' => 'Post Oak Wealth Management provides comprehensive wealth planning, portfolio management, and legacy solutions for individuals, families, and family offices. Our advisors take a goals-based approach to financial planning, integrating investment management, tax strategy, estate planning, philanthropy, and risk management into a cohesive long-term plan. We leverage the full capabilities of the Post Oak platform to deliver institutional-quality investment strategies directly to private clients, ensuring that wealth is preserved, grown, and transferred in alignment with each family\'s values and aspirations.',
        'link'        => home_url( '/global/capabilities/wealth-management' ),
        'disciplines' => array( 'Financial Planning', 'Portfolio Management', 'Estate & Legacy', 'Tax Strategy', 'Philanthropy', 'Risk Management' ),
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
<section class="page-hero capabilities-hero" aria-label="Capabilities page hero">
    <div class="page-hero-bg" aria-hidden="true">
        <div class="page-hero-gradient"></div>
    </div>
    <div class="container">
        <div class="page-hero-content reveal-on-scroll">
            <div class="section-label">Our Capabilities</div>
            <h1 class="page-hero-title">A Diversified Financial<br>Services Platform</h1>
            <p class="page-hero-subtitle">
                Six integrated business divisions. One seamless firm. Post Oak delivers the full spectrum
                of financial services with institutional precision and a global perspective.
            </p>
        </div>
    </div>
    <div class="page-hero-scroll-hint" aria-hidden="true">
        <span>Explore Divisions</span>
        <div class="scroll-line"></div>
    </div>
</section><!-- .capabilities-hero -->


<!-- ============================================================
     CAPABILITIES OVERVIEW STRIP
     ============================================================ -->
<div class="capabilities-nav-strip" role="navigation" aria-label="Division quick navigation">
    <div class="container">
        <div class="cap-nav-grid">
            <?php foreach ( $capabilities as $cap ) : ?>
            <a href="#division-<?php echo esc_attr( $cap['slug'] ); ?>" class="cap-nav-item">
                <span class="cap-nav-numeral"><?php echo esc_html( $cap['numeral'] ); ?></span>
                <span class="cap-nav-name"><?php echo esc_html( $cap['name'] ); ?></span>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div><!-- .capabilities-nav-strip -->


<!-- ============================================================
     DIVISION SECTIONS
     ============================================================ -->
<?php foreach ( $capabilities as $index => $cap ) :
    $is_even = ( $index % 2 === 0 );
?>

<section
    id="division-<?php echo esc_attr( $cap['slug'] ); ?>"
    class="division-section section-pad <?php echo $is_even ? 'division-light' : 'division-dark'; ?>"
    aria-label="<?php echo esc_attr( $cap['name'] ); ?> division"
>
    <div class="container">
        <div class="division-grid <?php echo $is_even ? '' : 'division-grid--reversed'; ?>">

            <!-- Left: Identity -->
            <div class="division-identity reveal-on-scroll">
                <div class="division-numeral" aria-hidden="true"><?php echo esc_html( $cap['numeral'] ); ?></div>
                <div class="section-label">Division <?php echo esc_html( $cap['numeral'] ); ?></div>
                <h2 class="division-name"><?php echo esc_html( $cap['name'] ); ?></h2>
                <p class="division-tagline"><?php echo esc_html( $cap['tagline'] ); ?></p>
                <a href="<?php echo esc_url( $cap['link'] ); ?>" class="btn-primary">
                    Learn More <span aria-hidden="true">&rarr;</span>
                </a>
            </div><!-- .division-identity -->

            <!-- Right: Description + Disciplines -->
            <div class="division-detail reveal-on-scroll">
                <p class="division-description"><?php echo esc_html( $cap['description'] ); ?></p>

                <div class="division-disciplines">
                    <div class="disciplines-label">Key Areas</div>
                    <ul class="disciplines-list" role="list">
                        <?php foreach ( $cap['disciplines'] as $disc ) : ?>
                        <li class="disciplines-item">
                            <span class="discipline-bullet" aria-hidden="true"></span>
                            <?php echo esc_html( $disc ); ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div><!-- .division-disciplines -->
            </div><!-- .division-detail -->

        </div><!-- .division-grid -->
    </div><!-- .container -->
</section><!-- .division-section -->

<?php if ( $index < count( $capabilities ) - 1 ) : ?>
<div class="section-divider container" aria-hidden="true"></div>
<?php endif; ?>

<?php endforeach; ?>


<!-- ============================================================
     CTA BAND
     ============================================================ -->
<section class="cta-band reveal-on-scroll" aria-label="Call to Action">
    <div class="container">
        <div class="cta-band-inner">
            <div class="cta-band-text">
                <div class="section-label">Get Started</div>
                <h2 class="section-title">Work With Post Oak</h2>
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
