<?php
/**
 * Template Name: Corporate Governance
 * Leadership and oversight page for Post Oak Financial Services.
 *
 * @package PostOak
 */

get_header();

/* ---------------------------------------------------------------
 * DATA: Governance tabs and personnel
 * -------------------------------------------------------------- */

$governance_tabs = array(

    'board' => array(
        'label'   => 'Board of Directors',
        'members' => array(
            array(
                'initials' => 'JL',
                'name'     => 'James L. Whitmore',
                'title'    => 'Non-Executive Chairman',
                'bio'      => 'Mr. Whitmore brings over 35 years of experience in global financial services, having served in senior leadership roles at leading international banking institutions across the Americas, Europe, and Asia. He provides strategic oversight and governance direction to the Post Oak Board.',
            ),
            array(
                'initials' => 'SN',
                'name'     => 'Sandra N. Pemberton',
                'title'    => 'Independent Director',
                'bio'      => 'Ms. Pemberton is a distinguished legal and regulatory expert with extensive experience advising major financial institutions on corporate governance, compliance frameworks, and cross-border regulatory matters across North America and the European Union.',
            ),
            array(
                'initials' => 'RK',
                'name'     => 'Robert K. Ashford',
                'title'    => 'Independent Director',
                'bio'      => 'Mr. Ashford is a veteran investment professional with deep expertise in global capital markets, alternative investments, and institutional asset management. He currently serves on the boards of several prominent endowments and sovereign investment vehicles.',
            ),
            array(
                'initials' => 'MC',
                'name'     => 'Margaret C. Okonkwo',
                'title'    => 'Independent Director',
                'bio'      => 'Dr. Okonkwo is an internationally recognised economist and policy advisor, with prior roles at the International Monetary Fund and World Bank. She provides macroeconomic and emerging-markets expertise to the Board\'s investment and risk oversight functions.',
            ),
            array(
                'initials' => 'TP',
                'name'     => 'Thomas P. Harrington',
                'title'    => 'Independent Director',
                'bio'      => 'Mr. Harrington is a former chief executive of a Fortune 500 industrial corporation with a strong track record of international expansion. He contributes extensive operational, strategic, and cross-industry perspective to Post Oak\'s governance framework.',
            ),
        ),
    ),

    'executive' => array(
        'label'   => 'Executive Team',
        'members' => array(
            array(
                'initials' => 'AV',
                'name'     => 'Alexander V. Rousseau',
                'title'    => 'Chief Executive Officer',
                'bio'      => 'Mr. Rousseau founded Post Oak with a vision to build a next-generation financial services conglomerate with global reach and institutional-grade capabilities. He brings 25 years of experience across investment banking, private equity, and capital markets on three continents.',
            ),
            array(
                'initials' => 'CL',
                'name'     => 'Catherine L. Morrison',
                'title'    => 'President',
                'bio'      => 'Ms. Morrison oversees the day-to-day operations of Post Oak\'s business divisions and plays a central role in firm-wide strategy, client relationships, and cross-divisional integration. Her background spans wealth management, commercial banking, and senior executive leadership.',
            ),
            array(
                'initials' => 'DN',
                'name'     => 'Daniel N. Forsythe',
                'title'    => 'Chief Financial Officer',
                'bio'      => 'Mr. Forsythe leads Post Oak\'s finance, treasury, and investor relations functions. He has extensive experience in financial planning and analysis, capital structure optimisation, and reporting for complex multi-business financial institutions operating in global markets.',
            ),
            array(
                'initials' => 'YB',
                'name'     => 'Yuki B. Tanaka',
                'title'    => 'Chief Risk Officer',
                'bio'      => 'Ms. Tanaka oversees Post Oak\'s enterprise risk management framework, encompassing market, credit, operational, liquidity, and regulatory risk. She previously held senior risk roles at leading international banks and brings a rigorous, quantitative approach to risk governance.',
            ),
            array(
                'initials' => 'PH',
                'name'     => 'Patrick H. Callahan',
                'title'    => 'General Counsel',
                'bio'      => 'Mr. Callahan leads Post Oak\'s legal, compliance, and regulatory affairs function. He advises the Board and Executive Team on corporate governance, regulatory obligations, transactional legal matters, and litigation strategy across the firm\'s global jurisdictions.',
            ),
            array(
                'initials' => 'EM',
                'name'     => 'Elena M. Vásquez',
                'title'    => 'Chief Operating Officer',
                'bio'      => 'Ms. Vásquez is responsible for the operational infrastructure supporting Post Oak\'s global business, including technology, human capital, process engineering, and office management. She champions operational excellence and scalable growth across all geographies.',
            ),
        ),
    ),

    'asset-management' => array(
        'label'   => 'Asset Management',
        'members' => array(
            array(
                'initials' => 'GF',
                'name'     => 'Gregory F. Larsson',
                'title'    => 'Head of Asset Management',
                'bio'      => 'Mr. Larsson leads Post Oak Asset Management with a focus on delivering superior, risk-adjusted returns across institutional and alternative investment strategies. He has over two decades of portfolio management experience across global equities, fixed income, and alternatives.',
            ),
            array(
                'initials' => 'NW',
                'name'     => 'Natalie W. Chen',
                'title'    => 'Chief Investment Officer, Asset Management',
                'bio'      => 'Ms. Chen directs the investment philosophy, process, and portfolio construction across Post Oak\'s asset management strategies. Her expertise spans global macro, multi-asset allocation, and alternative investments, with prior experience at leading sovereign wealth funds.',
            ),
            array(
                'initials' => 'BA',
                'name'     => 'Benjamin A. Osei',
                'title'    => 'Head of Alternative Investments',
                'bio'      => 'Mr. Osei leads Post Oak\'s alternatives platform, overseeing private equity, real assets, and hedge fund strategies. He brings deep expertise in structuring complex alternative investment vehicles and managing institutional investor relationships across global markets.',
            ),
        ),
    ),

    'commercial-banking' => array(
        'label'   => 'Commercial Banking',
        'members' => array(
            array(
                'initials' => 'RL',
                'name'     => 'Richard L. Davenport',
                'title'    => 'Head of Commercial Banking',
                'bio'      => 'Mr. Davenport leads Post Oak Commercial Banking, overseeing corporate lending, treasury solutions, and trade finance. His career spans senior relationship management and credit leadership at major international commercial banks across North America and Europe.',
            ),
            array(
                'initials' => 'FO',
                'name'     => 'Frances O. Nwosu',
                'title'    => 'Head of Corporate Credit',
                'bio'      => 'Ms. Nwosu oversees credit underwriting and portfolio risk management for Post Oak\'s commercial banking division. She brings 20 years of structured credit and leveraged finance experience across mid-market and large-cap corporate clients.',
            ),
            array(
                'initials' => 'KM',
                'name'     => 'Kevin M. Holguin',
                'title'    => 'Head of Treasury & Cash Management',
                'bio'      => 'Mr. Holguin leads Post Oak\'s treasury and cash management services, delivering sophisticated liquidity, payment, and risk solutions to corporate clients with complex domestic and international treasury requirements.',
            ),
        ),
    ),

    'investment-banking' => array(
        'label'   => 'Investment Banking',
        'members' => array(
            array(
                'initials' => 'OB',
                'name'     => 'Olivier B. Dumont',
                'title'    => 'Head of Investment Banking',
                'bio'      => 'Mr. Dumont leads Post Oak Investment Banking globally, overseeing advisory and capital markets businesses. He has executed landmark M&A transactions and capital markets mandates across the Americas, Europe, and Asia throughout a 30-year career in investment banking.',
            ),
            array(
                'initials' => 'IA',
                'name'     => 'Isabelle A. Brennan',
                'title'    => 'Head of Mergers & Acquisitions',
                'bio'      => 'Ms. Brennan leads M&A advisory at Post Oak, advising boards and management teams on strategic transactions. She has deep sector expertise in financials, technology, and consumer industries and has advised on over $50 billion of transaction value across her career.',
            ),
            array(
                'initials' => 'MJ',
                'name'     => 'Marcus J. Ikenna',
                'title'    => 'Head of Capital Markets',
                'bio'      => 'Mr. Ikenna oversees Post Oak\'s equity and debt capital markets franchise, leading origination, structuring, and distribution of securities across public and private markets. His expertise spans IPOs, follow-on offerings, investment-grade bonds, and leveraged finance.',
            ),
        ),
    ),

    'research' => array(
        'label'   => 'Global Investment Research',
        'members' => array(
            array(
                'initials' => 'SV',
                'name'     => 'Sophia V. Reinholt',
                'title'    => 'Head of Global Investment Research',
                'bio'      => 'Dr. Reinholt leads Post Oak\'s research platform, integrating macroeconomic analysis, sector equity research, and quantitative strategy. She holds a doctorate in economics from a leading research university and previously led research functions at an international brokerage.',
            ),
            array(
                'initials' => 'AT',
                'name'     => 'Adrian T. Mukherjee',
                'title'    => 'Chief Economist',
                'bio'      => 'Mr. Mukherjee leads Post Oak\'s macroeconomic and cross-asset research, publishing widely followed analysis on global growth, monetary policy, and capital flows. He has held senior economist roles at central banks and international financial institutions.',
            ),
            array(
                'initials' => 'LH',
                'name'     => 'Laura H. Estrada',
                'title'    => 'Head of Equity Research',
                'bio'      => 'Ms. Estrada oversees Post Oak\'s equity research coverage across developed and emerging markets, managing a team of sector analysts covering over 300 companies globally. Her own research background spans technology, energy, and consumer sectors.',
            ),
        ),
    ),

    'private-banking' => array(
        'label'   => 'Private Banking',
        'members' => array(
            array(
                'initials' => 'CW',
                'name'     => 'Charles W. Montague',
                'title'    => 'Head of Private Banking',
                'bio'      => 'Mr. Montague leads Post Oak Private Banking, overseeing bespoke financial services for high-net-worth and ultra-high-net-worth clients globally. He has 25 years of private banking experience, having managed senior client relationships and portfolios at several of the world\'s premier private banks.',
            ),
            array(
                'initials' => 'VL',
                'name'     => 'Valentina L. Konig',
                'title'    => 'Head of UHNW Relationships',
                'bio'      => 'Ms. Konig leads Post Oak\'s ultra-high-net-worth client coverage, structuring bespoke credit, investment, and banking solutions for prominent individuals and family offices. She brings deep expertise in complex balance sheet management and cross-border financial planning.',
            ),
            array(
                'initials' => 'JT',
                'name'     => 'Jonathan T. Adeyemi',
                'title'    => 'Head of Family Office Services',
                'bio'      => 'Mr. Adeyemi leads Post Oak\'s family office advisory practice, coordinating investment management, tax planning, estate structuring, and philanthropy services for multi-generational family clients. He serves as a trusted advisor to some of the firm\'s most sophisticated private clients.',
            ),
        ),
    ),

    'wealth-management' => array(
        'label'   => 'Wealth Management',
        'members' => array(
            array(
                'initials' => 'HR',
                'name'     => 'Hannah R. Sullivan',
                'title'    => 'Head of Wealth Management',
                'bio'      => 'Ms. Sullivan leads Post Oak Wealth Management, delivering comprehensive financial planning, portfolio management, and legacy solutions to private clients and families. She brings a client-centric, goals-based philosophy to wealth management with 20 years of experience in the field.',
            ),
            array(
                'initials' => 'PT',
                'name'     => 'Philip T. Nakamura',
                'title'    => 'Chief Investment Officer, Wealth Management',
                'bio'      => 'Mr. Nakamura directs the investment strategy and portfolio construction for Post Oak\'s wealth management platform, ensuring clients benefit from institutional-calibre investment management within a personalised wealth planning context.',
            ),
            array(
                'initials' => 'AN',
                'name'     => 'Amara N. Diallo',
                'title'    => 'Head of Financial Planning',
                'bio'      => 'Ms. Diallo leads Post Oak\'s financial planning practice, integrating retirement planning, estate strategy, tax optimisation, and philanthropic planning for private clients. She is a Certified Financial Planner with deep expertise in cross-border and multi-generational wealth structures.',
            ),
        ),
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
<section class="page-hero governance-hero" aria-label="Corporate Governance hero">
    <div class="page-hero-bg" aria-hidden="true">
        <div class="page-hero-gradient"></div>
    </div>
    <div class="container">
        <div class="page-hero-content reveal-on-scroll">
            <div class="section-label">Governance</div>
            <h1 class="page-hero-title">Corporate Governance</h1>
            <p class="page-hero-subtitle">Leadership &amp; Oversight</p>
            <p class="page-hero-lead">
                Post Oak is governed by a distinguished Board of Directors and led by an experienced executive
                team committed to the highest standards of integrity, accountability, and long-term value creation
                for clients and stakeholders.
            </p>
        </div>
    </div>
</section><!-- .governance-hero -->


<!-- ============================================================
     SUB-NAVIGATION TABS
     ============================================================ -->
<div class="governance-tabs-wrapper" role="navigation" aria-label="Governance sections">
    <div class="container">
        <div class="governance-tab-nav" role="tablist">
            <?php foreach ( $governance_tabs as $tab_key => $tab ) : ?>
            <button
                class="gov-tab-btn <?php echo ( $tab_key === 'board' ) ? 'is-active' : ''; ?>"
                role="tab"
                aria-selected="<?php echo ( $tab_key === 'board' ) ? 'true' : 'false'; ?>"
                aria-controls="tab-panel-<?php echo esc_attr( $tab_key ); ?>"
                data-tab="<?php echo esc_attr( $tab_key ); ?>"
                id="tab-<?php echo esc_attr( $tab_key ); ?>"
            >
                <?php echo esc_html( $tab['label'] ); ?>
            </button>
            <?php endforeach; ?>
        </div><!-- .governance-tab-nav -->
    </div>
</div><!-- .governance-tabs-wrapper -->


<!-- ============================================================
     TAB PANELS
     ============================================================ -->
<section class="governance-panels section-pad">
    <div class="container">

        <?php foreach ( $governance_tabs as $tab_key => $tab ) : ?>

        <div
            class="gov-panel <?php echo ( $tab_key === 'board' ) ? 'is-active' : ''; ?>"
            id="tab-panel-<?php echo esc_attr( $tab_key ); ?>"
            role="tabpanel"
            aria-labelledby="tab-<?php echo esc_attr( $tab_key ); ?>"
            hidden="<?php echo ( $tab_key !== 'board' ) ? 'hidden' : ''; ?>"
        >
            <div class="panel-header reveal-on-scroll">
                <h2 class="panel-title"><?php echo esc_html( $tab['label'] ); ?></h2>
                <div class="panel-rule"></div>
            </div>

            <div class="exec-cards-grid">
                <?php foreach ( $tab['members'] as $member ) : ?>
                <div class="exec-card reveal-stagger">
                    <div class="exec-card-inner">
                        <div class="exec-avatar" aria-hidden="true">
                            <span class="exec-initials"><?php echo esc_html( $member['initials'] ); ?></span>
                        </div>
                        <div class="exec-info">
                            <h3 class="exec-name"><?php echo esc_html( $member['name'] ); ?></h3>
                            <p class="exec-title"><?php echo esc_html( $member['title'] ); ?></p>
                            <div class="exec-rule"></div>
                            <p class="exec-bio"><?php echo esc_html( $member['bio'] ); ?></p>
                        </div>
                    </div>
                </div><!-- .exec-card -->
                <?php endforeach; ?>
            </div><!-- .exec-cards-grid -->

        </div><!-- .gov-panel -->

        <?php endforeach; ?>

    </div><!-- .container -->
</section><!-- .governance-panels -->


<!-- ============================================================
     GOVERNANCE PRINCIPLES STRIP
     ============================================================ -->
<section class="section-pad governance-principles" aria-label="Governance principles">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <div class="section-label">Our Framework</div>
            <h2 class="section-title">Governance Principles</h2>
        </div>
        <div class="principles-grid">

            <div class="principle-item reveal-stagger" style="--stagger-delay: 0.05s;">
                <div class="principle-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="24" cy="24" r="20"/>
                        <polyline points="17,24 22,29 32,19"/>
                    </svg>
                </div>
                <h3 class="principle-name">Board Independence</h3>
                <p class="principle-desc">A majority of Post Oak\'s directors are independent, ensuring objective oversight free from conflicts of interest.</p>
            </div>

            <div class="principle-item reveal-stagger" style="--stagger-delay: 0.10s;">
                <div class="principle-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="8" y="12" width="32" height="28" rx="2"/>
                        <line x1="8" y1="20" x2="40" y2="20"/>
                        <line x1="20" y1="12" x2="20" y2="8"/>
                        <line x1="28" y1="12" x2="28" y2="8"/>
                    </svg>
                </div>
                <h3 class="principle-name">Regular Oversight</h3>
                <p class="principle-desc">The Board meets regularly and convenes dedicated audit, risk, and compensation committees to ensure rigorous oversight.</p>
            </div>

            <div class="principle-item reveal-stagger" style="--stagger-delay: 0.15s;">
                <div class="principle-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M24 6 L38 14 V26 C38 34 31 41 24 44 C17 41 10 34 10 26 V14 Z"/>
                        <polyline points="18,24 22,28 30,20"/>
                    </svg>
                </div>
                <h3 class="principle-name">Risk Management</h3>
                <p class="principle-desc">An enterprise-wide risk framework governs market, credit, operational, and liquidity risk across all Post Oak business lines.</p>
            </div>

            <div class="principle-item reveal-stagger" style="--stagger-delay: 0.20s;">
                <div class="principle-icon" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="24" cy="18" r="8"/>
                        <path d="M10 42 C10 34 16 28 24 28 C32 28 38 34 38 42"/>
                    </svg>
                </div>
                <h3 class="principle-name">Executive Accountability</h3>
                <p class="principle-desc">Compensation structures align executive incentives with long-term firm performance, client outcomes, and stakeholder value.</p>
            </div>

        </div><!-- .principles-grid -->
    </div><!-- .container -->
</section><!-- .governance-principles -->


<!-- ============================================================
     TAB SWITCHING INLINE SCRIPT
     ============================================================ -->
<script>
(function () {
    'use strict';

    var tabBtns  = document.querySelectorAll('.gov-tab-btn');
    var tabPanels = document.querySelectorAll('.gov-panel');

    function activateTab(targetKey) {
        tabBtns.forEach(function (btn) {
            var active = btn.dataset.tab === targetKey;
            btn.classList.toggle('is-active', active);
            btn.setAttribute('aria-selected', active ? 'true' : 'false');
        });
        tabPanels.forEach(function (panel) {
            var active = panel.id === 'tab-panel-' + targetKey;
            panel.classList.toggle('is-active', active);
            if (active) {
                panel.removeAttribute('hidden');
            } else {
                panel.setAttribute('hidden', 'hidden');
            }
        });
    }

    tabBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            activateTab(btn.dataset.tab);
            // Smooth-scroll the panel into view
            var targetPanel = document.getElementById('tab-panel-' + btn.dataset.tab);
            if (targetPanel) {
                targetPanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
}());
</script>

<?php get_footer(); ?>
