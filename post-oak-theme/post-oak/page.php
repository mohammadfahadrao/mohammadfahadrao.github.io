<?php
/**
 * Post Oak — Page Template
 *
 * Default template for WordPress Pages. Outputs page content
 * within the global header/footer layout.
 *
 * @package post-oak
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main id="main-content" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		/*
		 * Page Hero Banner
		 * Shows a full-width page banner with the page title,
		 * using the featured image as background when available.
		 */
		?>
		<section class="page-banner"
		         aria-label="<?php the_title_attribute(); ?>"
		         style="
		           position: relative;
		           min-height: 420px;
		           display: flex;
		           align-items: flex-end;
		           background: var(--black);
		           overflow: hidden;
		           padding-top: var(--header-height);
		         ">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="page-banner__bg"
				     aria-hidden="true"
				     style="
				       position: absolute;
				       inset: 0;
				       z-index: 0;
				     ">
					<?php
					the_post_thumbnail( 'post-oak-hero', array(
						'style' => 'width:100%;height:100%;object-fit:cover;display:block;opacity:0.25;filter:grayscale(60%);',
						'alt'   => '',
					) );
					?>
				</div>
			<?php endif; ?>

			<!-- Gradient overlay -->
			<div aria-hidden="true" style="
			     position: absolute;
			     inset: 0;
			     background: linear-gradient(to bottom, rgba(10,10,10,0.5) 0%, rgba(10,10,10,0.95) 100%);
			     z-index: 1;
			     "></div>

			<!-- Left green accent line -->
			<div aria-hidden="true" style="
			     position: absolute;
			     left: 0;
			     top: var(--header-height);
			     bottom: 0;
			     width: 2px;
			     background: linear-gradient(to bottom, transparent, var(--green-accent) 40%, transparent);
			     z-index: 2;
			     opacity: 0.4;
			     "></div>

			<div class="container" style="position: relative; z-index: 3; padding-bottom: 60px;">

				<?php
				// Breadcrumb-style category or section label.
				$parent = wp_get_post_parent_id( get_the_ID() );
				if ( $parent ) :
					$parent_post = get_post( $parent );
					if ( $parent_post ) :
						?>
						<span class="section-label" style="margin-bottom: 12px;">
							<a href="<?php echo esc_url( get_permalink( $parent_post->ID ) ); ?>"
							   style="color: inherit; text-decoration: none;">
								<?php echo esc_html( $parent_post->post_title ); ?>
							</a>
						</span>
					<?php
					endif;
				else :
					?>
					<span class="section-label"><?php esc_html_e( 'Post Oak', 'post-oak' ); ?></span>
				<?php endif; ?>

				<h1 class="page-banner__title" style="
				    font-family: var(--font-serif);
				    font-weight: 300;
				    font-size: clamp(2.2rem, 5vw, 4rem);
				    color: var(--white);
				    line-height: 1.1;
				    letter-spacing: -0.015em;
				    max-width: 800px;
				    margin: 0;
				    ">
					<?php the_title(); ?>
				</h1>

			</div><!-- .container -->
		</section><!-- .page-banner -->

		<?php
		/*
		 * Page Body Content
		 */
		?>
		<section class="page-body section-pad" style="background: var(--black);">
			<div class="container">

				<div class="page-content-grid" style="
				     display: grid;
				     grid-template-columns: 1fr 320px;
				     gap: 80px;
				     align-items: start;
				     ">

					<!-- Main Content Column -->
					<article class="page-content" id="page-content-<?php the_ID(); ?>">

						<?php
						// Output the content through the standard WordPress filter chain.
						the_content();

						// Pagination for long pages (<!--nextpage--> tags).
						wp_link_pages( array(
							'before'      => '<nav class="page-links" aria-label="' . esc_attr__( 'Page navigation', 'post-oak' ) . '"><span class="page-links__label">' . esc_html__( 'Pages:', 'post-oak' ) . '</span>',
							'after'       => '</nav>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
						) );
						?>

					</article><!-- .page-content -->

					<!-- Sidebar / Aside Column -->
					<aside class="page-sidebar" role="complementary" aria-label="<?php esc_attr_e( 'Page Sidebar', 'post-oak' ); ?>" style="position: sticky; top: calc(var(--header-height) + 32px);">

						<?php if ( is_active_sidebar( 'sidebar-primary' ) ) : ?>
							<?php dynamic_sidebar( 'sidebar-primary' ); ?>
						<?php else : ?>

							<!-- Default sidebar content when no widgets are set -->
							<div class="sidebar-cta" style="
							     border: 1px solid rgba(255,255,255,0.08);
							     padding: 36px 28px;
							     margin-bottom: 32px;
							     ">
								<span class="section-label"><?php esc_html_e( 'Get in Touch', 'post-oak' ); ?></span>
								<h3 style="
								    font-family: var(--font-serif);
								    font-weight: 400;
								    font-size: 1.3rem;
								    color: var(--white);
								    line-height: 1.3;
								    margin-bottom: 16px;
								    ">
									<?php esc_html_e( 'Speak with a Specialist', 'post-oak' ); ?>
								</h3>
								<p style="
								   font-family: var(--font-sans);
								   font-weight: 300;
								   font-size: 0.78rem;
								   line-height: 1.8;
								   color: var(--text-muted);
								   margin-bottom: 24px;
								   ">
									<?php esc_html_e( 'Our advisors are available to discuss your financial objectives and how Post Oak can help you achieve them.', 'post-oak' ); ?>
								</p>
								<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"
								   class="btn-primary"
								   style="display: block; text-align: center;">
									<?php esc_html_e( 'Contact Us', 'post-oak' ); ?>
								</a>
							</div>

							<div class="sidebar-offices" style="
							     border: 1px solid rgba(255,255,255,0.05);
							     padding: 28px;
							     ">
								<span class="section-label"><?php esc_html_e( 'Headquarters', 'post-oak' ); ?></span>
								<address style="
								         font-style: normal;
								         font-family: var(--font-sans);
								         font-weight: 300;
								         font-size: 0.75rem;
								         line-height: 1.9;
								         color: var(--text-muted);
								         margin-bottom: 12px;
								         ">
									1700 Post Oak Blvd, Suite 600<br>
									Houston, TX 77056<br>
									United States
								</address>
								<a href="tel:+17135550100"
								   style="
								   font-family: var(--font-sans);
								   font-size: 0.78rem;
								   color: var(--green-accent);
								   text-decoration: none;
								   ">+1 (713) 555-0100</a>
							</div>

						<?php endif; ?>

					</aside><!-- .page-sidebar -->

				</div><!-- .page-content-grid -->

			</div><!-- .container -->
		</section><!-- .page-body -->

		<?php
		/*
		 * Comments section (enabled when theme support and page settings allow).
		 */
		if ( comments_open() || get_comments_number() ) :
			?>
			<section class="page-comments section-pad" style="background: var(--gray-dark); border-top: 1px solid rgba(255,255,255,0.05);">
				<div class="container">
					<?php comments_template(); ?>
				</div>
			</section>
		<?php endif; ?>

	<?php endwhile; ?>

</main><!-- .site-main -->

<?php get_footer(); ?>
