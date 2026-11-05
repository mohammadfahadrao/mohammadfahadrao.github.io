<?php
/**
 * Post Oak — Index Template (Fallback)
 *
 * This is the most generic template file in a WordPress theme
 * and is required. It is used when no other template file is found.
 *
 * @package post-oak
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>

<main id="main-content" class="site-main" role="main">
	<div class="container section-pad">

		<?php if ( have_posts() ) : ?>

			<header class="archive-header" style="margin-bottom: 60px;">
				<?php
				if ( is_home() && ! is_front_page() ) :
					echo '<span class="section-label">' . esc_html__( 'Latest', 'post-oak' ) . '</span>';
					echo '<h1 class="section-title">' . esc_html( single_post_title() ) . '</h1>';
				elseif ( is_search() ) :
					echo '<span class="section-label">' . esc_html__( 'Search Results', 'post-oak' ) . '</span>';
					printf(
						'<h1 class="section-title">%s &ldquo;%s&rdquo;</h1>',
						esc_html__( 'Results for', 'post-oak' ),
						esc_html( get_search_query() )
					);
				else :
					echo '<span class="section-label">' . esc_html__( 'Insights', 'post-oak' ) . '</span>';
					echo '<h1 class="section-title">' . esc_html__( 'Latest Perspectives', 'post-oak' ) . '</h1>';
				endif;
				?>
			</header>

			<div class="posts-grid" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.05);">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'insight-card' ); ?> style="background:var(--black);padding:36px;display:flex;flex-direction:column;">

						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" class="insight-card__thumb" style="display:block;aspect-ratio:16/9;overflow:hidden;margin-bottom:24px;">
								<?php the_post_thumbnail( 'post-oak-card', array( 'style' => 'width:100%;height:100%;object-fit:cover;display:block;' ) ); ?>
							</a>
						<?php endif; ?>

						<span class="insight-card__category">
							<?php
							$cats = get_the_category();
							if ( ! empty( $cats ) ) {
								echo esc_html( $cats[0]->name );
							} else {
								echo esc_html__( 'Insight', 'post-oak' );
							}
							?>
						</span>

						<h2 class="insight-card__title" style="font-size:1.3rem;margin-bottom:16px;">
							<a href="<?php the_permalink(); ?>" style="text-decoration:none;color:inherit;">
								<?php the_title(); ?>
							</a>
						</h2>

						<div class="insight-card__excerpt">
							<?php echo wp_kses_post( get_the_excerpt() ); ?>
						</div>

						<div class="insight-card__meta">
							<?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
						</div>

					</article>
				<?php endwhile; ?>
			</div><!-- .posts-grid -->

			<?php
			the_posts_pagination( array(
				'mid_size'           => 2,
				'prev_text'          => esc_html__( '&larr; Previous', 'post-oak' ),
				'next_text'          => esc_html__( 'Next &rarr;', 'post-oak' ),
				'before_page_number' => '<span class="sr-only">' . esc_html__( 'Page', 'post-oak' ) . ' </span>',
			) );
			?>

		<?php else : ?>

			<div class="no-results" style="text-align:center;padding:80px 0;">
				<span class="section-label"><?php esc_html_e( 'Nothing Found', 'post-oak' ); ?></span>
				<h1 class="section-title" style="margin-bottom:24px;">
					<?php esc_html_e( 'No content available', 'post-oak' ); ?>
				</h1>
				<p style="font-family:var(--font-sans);font-weight:300;font-size:0.9rem;color:var(--text-muted);margin-bottom:40px;line-height:1.8;">
					<?php esc_html_e( 'It looks like nothing was found at this location. Please try using the search below.', 'post-oak' ); ?>
				</p>
				<?php get_search_form(); ?>
			</div>

		<?php endif; ?>

	</div><!-- .container -->
</main><!-- #main-content -->

<?php get_footer(); ?>
