	</div><!-- #main-content (closed by page/index template) -->
</main>

<?php
/**
 * Post Oak — Footer Template
 *
 * Global offices, navigation links, legal bar, disclaimer, and wp_footer().
 *
 * @package post-oak
 * @version 1.0.0
 */
?>

<!-- ============================================================
     SITE FOOTER
     ============================================================ -->
<footer class="site-footer" id="site-footer" role="contentinfo">

	<!-- ---- OFFICES SECTION ---- -->
	<section class="footer-offices" aria-label="<?php esc_attr_e( 'Global Offices', 'post-oak' ); ?>">
		<div class="container">
			<div class="footer-offices__top">

				<!-- Brand -->
				<div class="footer-offices__brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"
					   class="footer-logo"
					   aria-label="<?php esc_attr_e( 'Post Oak Financial Services', 'post-oak' ); ?>">
						<div class="footer-logo__name">Post Oak</div>
						<div class="footer-logo__tagline">Financial Services</div>
					</a>
					<p class="footer-offices__desc">
						<?php esc_html_e( 'A multinational financial services conglomerate with presence across North America, Europe, and Asia-Pacific.', 'post-oak' ); ?>
					</p>
				</div><!-- .footer-offices__brand -->

				<!-- Offices Grid -->
				<div class="offices-grid">

					<!-- Houston — HQ -->
					<div class="office-item">
						<h3 class="office-item__city office-item__city--hq">
							<?php esc_html_e( 'Houston', 'post-oak' ); ?>
						</h3>
						<address class="office-item__address">
							1700 Post Oak Blvd, Suite 600<br>
							Houston, TX 77056<br>
							United States
						</address>
						<a href="tel:+17135550100" class="office-item__phone">+1 (713) 555-0100</a>
					</div>

					<!-- New York -->
					<div class="office-item">
						<h3 class="office-item__city">
							<?php esc_html_e( 'New York', 'post-oak' ); ?>
						</h3>
						<address class="office-item__address">
							745 Fifth Avenue<br>
							New York, NY 10151<br>
							United States
						</address>
						<a href="tel:+12125550200" class="office-item__phone">+1 (212) 555-0200</a>
						<span class="office-item__placeholder"><?php esc_html_e( 'Placeholder', 'post-oak' ); ?></span>
					</div>

					<!-- London -->
					<div class="office-item">
						<h3 class="office-item__city">
							<?php esc_html_e( 'London', 'post-oak' ); ?>
						</h3>
						<address class="office-item__address">
							1 Canada Square<br>
							Canary Wharf<br>
							London E14 5AB, United Kingdom
						</address>
						<a href="tel:+442055500300" class="office-item__phone">+44 20 555 0300</a>
						<span class="office-item__placeholder"><?php esc_html_e( 'Placeholder', 'post-oak' ); ?></span>
					</div>

					<!-- Singapore -->
					<div class="office-item">
						<h3 class="office-item__city">
							<?php esc_html_e( 'Singapore', 'post-oak' ); ?>
						</h3>
						<address class="office-item__address">
							1 Raffles Quay<br>
							Singapore 048583
						</address>
						<a href="tel:+6565550400" class="office-item__phone">+65 6555 0400</a>
						<span class="office-item__placeholder"><?php esc_html_e( 'Placeholder', 'post-oak' ); ?></span>
					</div>

				</div><!-- .offices-grid -->
			</div><!-- .footer-offices__top -->
		</div><!-- .container -->
	</section><!-- .footer-offices -->

	<!-- ---- FOOTER LINKS ---- -->
	<section class="footer-links" aria-label="<?php esc_attr_e( 'Footer Navigation', 'post-oak' ); ?>">
		<div class="container">
			<div class="footer-links__grid">

				<!-- Column 1: Capabilities -->
				<nav class="footer-col" aria-label="<?php esc_attr_e( 'Capabilities', 'post-oak' ); ?>">
					<h4 class="footer-col__title"><?php esc_html_e( 'Capabilities', 'post-oak' ); ?></h4>
					<ul class="footer-col__list" role="list">
						<li><a href="<?php echo esc_url( home_url( '/capabilities/asset-management/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Asset Management', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/commercial-banking/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Commercial Banking', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/investment-banking/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Investment Banking', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/global-investment-research/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Global Investment Research', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/private-banking/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Private Banking', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/capabilities/wealth-management/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Wealth Management', 'post-oak' ); ?></a></li>
					</ul>
				</nav>

				<!-- Column 2: About Us -->
				<nav class="footer-col" aria-label="<?php esc_attr_e( 'About Us', 'post-oak' ); ?>">
					<h4 class="footer-col__title"><?php esc_html_e( 'About Us', 'post-oak' ); ?></h4>
					<ul class="footer-col__list" role="list">
						<li><a href="<?php echo esc_url( home_url( '/about/our-people/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Our People', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/about/corporate-history/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Corporate History', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/about/ethics-compliance/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Ethics &amp; Compliance', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/about/environmental-social-governance/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Environmental Social &amp; Governance', 'post-oak' ); ?></a></li>
					</ul>
				</nav>

				<!-- Column 3: Corporate Governance -->
				<nav class="footer-col" aria-label="<?php esc_attr_e( 'Corporate Governance', 'post-oak' ); ?>">
					<h4 class="footer-col__title"><?php esc_html_e( 'Corporate Governance', 'post-oak' ); ?></h4>
					<ul class="footer-col__list" role="list">
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Governance Overview', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/board-of-directors/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Board of Directors', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/audit-committee/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Audit Committee', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/compensation-committee/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Compensation Committee', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/nominating-committee/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Nominating Committee', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/risk-management/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Risk Management', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/shareholder-information/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Shareholder Information', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/corporate-governance/governance-documents/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Governance Documents', 'post-oak' ); ?></a></li>
					</ul>
				</nav>

				<!-- Column 4: Legal -->
				<nav class="footer-col" aria-label="<?php esc_attr_e( 'Legal', 'post-oak' ); ?>">
					<h4 class="footer-col__title"><?php esc_html_e( 'Legal', 'post-oak' ); ?></h4>
					<ul class="footer-col__list" role="list">
						<li><a href="<?php echo esc_url( home_url( '/legal/terms-of-use/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Terms of Use', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/privacy-policy/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Privacy Policy', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/cookie-policy/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Cookie Policy', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/regulatory-disclosures/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Regulatory Disclosures', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/securities-disclosures/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Securities Disclosures', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/important-legal-information/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Important Legal Information', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/conflicts-of-interest/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Conflicts of Interest', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/business-continuity/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Business Continuity', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/accessibility/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Accessibility', 'post-oak' ); ?></a></li>
						<li><a href="<?php echo esc_url( home_url( '/legal/corporate-legal-entities/' ) ); ?>" class="footer-col__link"><?php esc_html_e( 'Corporate Legal Entities', 'post-oak' ); ?></a></li>
					</ul>
				</nav>

			</div><!-- .footer-links__grid -->
		</div><!-- .container -->
	</section><!-- .footer-links -->

	<!-- ---- FOOTER BOTTOM BAR ---- -->
	<div class="footer-bottom">
		<div class="container">
			<div class="footer-bottom__inner">

				<!-- Copyright -->
				<p class="footer-copyright">
					<?php
					printf(
						/* translators: %s: current year */
						esc_html__( '&copy; %s Post Oak, Inc. All rights reserved.', 'post-oak' ),
						esc_html( gmdate( 'Y' ) )
					);
					?>
				</p>

				<!-- Center tagline -->
				<p class="footer-tagline">Post Oak</p>

				<!-- Legal links row -->
				<nav class="footer-legal-links" aria-label="<?php esc_attr_e( 'Legal Links', 'post-oak' ); ?>">
					<a href="<?php echo esc_url( home_url( '/legal/terms-of-use/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Terms of Use', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/privacy-policy/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Privacy Policy', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/cookie-policy/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Cookie Policy', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/regulatory-disclosures/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Regulatory Disclosures', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/securities-disclosures/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Securities Disclosures', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/important-legal-information/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Important Legal Information', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/conflicts-of-interest/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Conflicts of Interest', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/business-continuity/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Business Continuity', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/accessibility/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Accessibility', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/legal/corporate-legal-entities/' ) ); ?>" class="footer-legal-links__link"><?php esc_html_e( 'Corporate Legal Entities', 'post-oak' ); ?></a>
				</nav>

			</div><!-- .footer-bottom__inner -->
		</div><!-- .container -->
	</div><!-- .footer-bottom -->

	<!-- ---- DISCLAIMER ---- -->
	<div class="footer-disclaimer">
		<div class="container">
			<p>
				<?php esc_html_e( 'Post Oak, Inc. is a holding company. Services are provided through its subsidiaries and affiliates. This website is for informational purposes only and does not constitute an offer or solicitation. Investments involve risk. Past performance is not indicative of future results. Certain products and services may not be available in all jurisdictions. Please consult your local regulatory authority for further information.', 'post-oak' ); ?>
			</p>
		</div>
	</div><!-- .footer-disclaimer -->

</footer><!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
