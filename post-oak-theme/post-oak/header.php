<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<!-- Page Transition Overlay -->
<div class="page-transition-overlay" aria-hidden="true"></div>

<!-- ============================================================
     SITE HEADER
     ============================================================ -->
<header class="site-header" id="site-header" role="banner">

	<!-- Logo -->
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php esc_attr_e( 'Post Oak Financial Services — Home', 'post-oak' ); ?>">
		<span class="site-logo__name">Post Oak</span>
		<span class="site-logo__tagline">Financial Services</span>
	</a>

	<!-- Primary Navigation -->
	<nav class="primary-nav" id="primary-nav" aria-label="<?php esc_attr_e( 'Primary Navigation', 'post-oak' ); ?>">
		<ul class="primary-nav__list" role="list">

			<!-- Capabilities — Mega Menu -->
			<li class="primary-nav__item has-dropdown" aria-haspopup="true" aria-expanded="false">
				<a href="<?php echo esc_url( home_url( '/capabilities/' ) ); ?>"
				   class="primary-nav__link"
				   aria-haspopup="true"
				   aria-expanded="false"
				   id="nav-capabilities">
					<?php esc_html_e( 'Capabilities', 'post-oak' ); ?>
				</a>

				<!-- Mega Menu: Capabilities -->
				<div class="mega-menu"
				     role="region"
				     aria-label="<?php esc_attr_e( 'Capabilities menu', 'post-oak' ); ?>"
				     aria-labelledby="nav-capabilities">
					<div class="mega-menu__inner mega-menu__inner--capabilities">

						<!-- Left: Section header -->
						<div class="mega-menu__header">
							<span class="mega-menu__label"><?php esc_html_e( 'Our Capabilities', 'post-oak' ); ?></span>
							<h2 class="mega-menu__header-title">
								<?php esc_html_e( 'Global Financial Expertise', 'post-oak' ); ?>
							</h2>
							<p class="mega-menu__header-desc">
								<?php esc_html_e( 'Comprehensive financial solutions delivered by specialists across every major market.', 'post-oak' ); ?>
							</p>
						</div>

						<!-- Right: Capability links grid -->
						<div class="mega-menu__grid" role="list">

							<a href="<?php echo esc_url( home_url( '/capabilities/asset-management/' ) ); ?>"
							   class="mega-menu__item"
							   role="listitem">
								<span class="mega-menu__item-title"><?php esc_html_e( 'Asset Management', 'post-oak' ); ?></span>
								<span class="mega-menu__item-desc"><?php esc_html_e( 'Disciplined investment strategies across global asset classes for institutional and private clients.', 'post-oak' ); ?></span>
							</a>

							<a href="<?php echo esc_url( home_url( '/capabilities/commercial-banking/' ) ); ?>"
							   class="mega-menu__item"
							   role="listitem">
								<span class="mega-menu__item-title"><?php esc_html_e( 'Commercial Banking', 'post-oak' ); ?></span>
								<span class="mega-menu__item-desc"><?php esc_html_e( 'Tailored credit, lending, and treasury solutions for corporate and middle-market enterprises.', 'post-oak' ); ?></span>
							</a>

							<a href="<?php echo esc_url( home_url( '/capabilities/investment-banking/' ) ); ?>"
							   class="mega-menu__item"
							   role="listitem">
								<span class="mega-menu__item-title"><?php esc_html_e( 'Investment Banking', 'post-oak' ); ?></span>
								<span class="mega-menu__item-desc"><?php esc_html_e( 'Advisory, capital markets, and M&amp;A execution for leading corporations and sponsors.', 'post-oak' ); ?></span>
							</a>

							<a href="<?php echo esc_url( home_url( '/capabilities/global-investment-research/' ) ); ?>"
							   class="mega-menu__item"
							   role="listitem">
								<span class="mega-menu__item-title"><?php esc_html_e( 'Global Investment Research', 'post-oak' ); ?></span>
								<span class="mega-menu__item-desc"><?php esc_html_e( 'Proprietary economic analysis and equity research spanning 60 countries and 2,000+ securities.', 'post-oak' ); ?></span>
							</a>

							<a href="<?php echo esc_url( home_url( '/capabilities/private-banking/' ) ); ?>"
							   class="mega-menu__item"
							   role="listitem">
								<span class="mega-menu__item-title"><?php esc_html_e( 'Private Banking', 'post-oak' ); ?></span>
								<span class="mega-menu__item-desc"><?php esc_html_e( 'Bespoke banking, lending, and concierge services for high-net-worth individuals and families.', 'post-oak' ); ?></span>
							</a>

							<a href="<?php echo esc_url( home_url( '/capabilities/wealth-management/' ) ); ?>"
							   class="mega-menu__item"
							   role="listitem">
								<span class="mega-menu__item-title"><?php esc_html_e( 'Wealth Management', 'post-oak' ); ?></span>
								<span class="mega-menu__item-desc"><?php esc_html_e( 'Comprehensive planning, tax optimisation, and multigenerational wealth preservation strategies.', 'post-oak' ); ?></span>
							</a>

						</div><!-- .mega-menu__grid -->
					</div><!-- .mega-menu__inner -->
				</div><!-- .mega-menu -->
			</li><!-- /Capabilities -->

			<!-- About Us — Dropdown -->
			<li class="primary-nav__item has-simple-dropdown" aria-haspopup="true" aria-expanded="false">
				<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
				   class="primary-nav__link"
				   aria-haspopup="true"
				   aria-expanded="false"
				   id="nav-about">
					<?php esc_html_e( 'About Us', 'post-oak' ); ?>
				</a>
				<div class="simple-dropdown"
				     role="menu"
				     aria-label="<?php esc_attr_e( 'About Us submenu', 'post-oak' ); ?>"
				     aria-labelledby="nav-about">
					<a href="<?php echo esc_url( home_url( '/about/our-people/' ) ); ?>"
					   class="simple-dropdown__link"
					   role="menuitem"><?php esc_html_e( 'Our People', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/about/corporate-history/' ) ); ?>"
					   class="simple-dropdown__link"
					   role="menuitem"><?php esc_html_e( 'Corporate History', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/about/ethics-compliance/' ) ); ?>"
					   class="simple-dropdown__link"
					   role="menuitem"><?php esc_html_e( 'Ethics &amp; Compliance', 'post-oak' ); ?></a>
					<a href="<?php echo esc_url( home_url( '/about/environmental-social-governance/' ) ); ?>"
					   class="simple-dropdown__link"
					   role="menuitem"><?php esc_html_e( 'Environmental Social &amp; Governance', 'post-oak' ); ?></a>
				</div>
			</li><!-- /About Us -->

			<!-- Corporate Governance -->
			<li class="primary-nav__item">
				<a href="<?php echo esc_url( home_url( '/corporate-governance/' ) ); ?>"
				   class="primary-nav__link">
					<?php esc_html_e( 'Corporate Governance', 'post-oak' ); ?>
				</a>
			</li>

			<!-- Culture -->
			<li class="primary-nav__item">
				<a href="<?php echo esc_url( home_url( '/culture/' ) ); ?>"
				   class="primary-nav__link">
					<?php esc_html_e( 'Culture', 'post-oak' ); ?>
				</a>
			</li>

			<!-- Offices -->
			<li class="primary-nav__item">
				<a href="<?php echo esc_url( home_url( '/offices/' ) ); ?>"
				   class="primary-nav__link">
					<?php esc_html_e( 'Offices', 'post-oak' ); ?>
				</a>
			</li>

			<!-- Contact -->
			<li class="primary-nav__item">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
				   class="primary-nav__link"
				   style="color:var(--green-accent);">
					<?php esc_html_e( 'Contact', 'post-oak' ); ?>
				</a>
			</li>

		</ul><!-- .primary-nav__list -->
	</nav><!-- .primary-nav -->

	<!-- Mobile Hamburger Button -->
	<button class="nav-hamburger"
	        id="nav-hamburger"
	        aria-label="<?php esc_attr_e( 'Toggle navigation menu', 'post-oak' ); ?>"
	        aria-controls="mobile-nav"
	        aria-expanded="false">
		<span class="nav-hamburger__bar"></span>
		<span class="nav-hamburger__bar"></span>
		<span class="nav-hamburger__bar"></span>
	</button>

</header><!-- .site-header -->

<!-- ============================================================
     MOBILE NAVIGATION
     ============================================================ -->
<nav class="mobile-nav"
     id="mobile-nav"
     role="navigation"
     aria-label="<?php esc_attr_e( 'Mobile Navigation', 'post-oak' ); ?>"
     aria-hidden="true">

	<ul class="mobile-nav__list" role="list">

		<!-- Capabilities -->
		<li class="mobile-nav__item">
			<a href="<?php echo esc_url( home_url( '/capabilities/' ) ); ?>"
			   class="mobile-nav__link">
				<?php esc_html_e( 'Capabilities', 'post-oak' ); ?>
			</a>
			<ul class="mobile-nav__sub" role="list">
				<li><a href="<?php echo esc_url( home_url( '/capabilities/asset-management/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Asset Management', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/capabilities/commercial-banking/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Commercial Banking', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/capabilities/investment-banking/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Investment Banking', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/capabilities/global-investment-research/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Global Investment Research', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/capabilities/private-banking/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Private Banking', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/capabilities/wealth-management/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Wealth Management', 'post-oak' ); ?></a></li>
			</ul>
		</li>

		<!-- About Us -->
		<li class="mobile-nav__item">
			<a href="<?php echo esc_url( home_url( '/about/' ) ); ?>"
			   class="mobile-nav__link">
				<?php esc_html_e( 'About Us', 'post-oak' ); ?>
			</a>
			<ul class="mobile-nav__sub" role="list">
				<li><a href="<?php echo esc_url( home_url( '/about/our-people/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Our People', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/corporate-history/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Corporate History', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/ethics-compliance/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Ethics &amp; Compliance', 'post-oak' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/about/environmental-social-governance/' ) ); ?>" class="mobile-nav__sub-link"><?php esc_html_e( 'Environmental Social &amp; Governance', 'post-oak' ); ?></a></li>
			</ul>
		</li>

		<!-- Corporate Governance -->
		<li class="mobile-nav__item">
			<a href="<?php echo esc_url( home_url( '/corporate-governance/' ) ); ?>"
			   class="mobile-nav__link">
				<?php esc_html_e( 'Corporate Governance', 'post-oak' ); ?>
			</a>
		</li>

		<!-- Culture -->
		<li class="mobile-nav__item">
			<a href="<?php echo esc_url( home_url( '/culture/' ) ); ?>"
			   class="mobile-nav__link">
				<?php esc_html_e( 'Culture', 'post-oak' ); ?>
			</a>
		</li>

		<!-- Offices -->
		<li class="mobile-nav__item">
			<a href="<?php echo esc_url( home_url( '/offices/' ) ); ?>"
			   class="mobile-nav__link">
				<?php esc_html_e( 'Offices', 'post-oak' ); ?>
			</a>
		</li>

		<!-- Contact -->
		<li class="mobile-nav__item">
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
			   class="mobile-nav__link"
			   style="color:var(--green-accent);">
				<?php esc_html_e( 'Contact', 'post-oak' ); ?>
			</a>
		</li>

	</ul><!-- .mobile-nav__list -->
</nav><!-- .mobile-nav -->

<!-- Skip to content link (accessibility) -->
<a class="skip-link screen-reader-text"
   href="#main-content"
   style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">
	<?php esc_html_e( 'Skip to content', 'post-oak' ); ?>
</a>
