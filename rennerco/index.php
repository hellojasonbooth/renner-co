<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package renner&co
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php query_posts('posts_per_page=1&post_type=intro'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Hero Element -->
		<div class="hero">
			<div class="hero-inner">
				<h1 class="hero-text">
					<?php the_content(); ?>
				</h1>
				<img class="arrow" src="<?php bloginfo('template_url'); ?>/assets/arrow-down.svg">
				<p class="hero-descriptor">Full site coming soon</p>
			</div>
		</div>
		<?php
			endwhile;
			endif;
		?>

		<!-- Full Width Image -->
		<div class="full-width-image">
			<img src="<?php bloginfo('template_url'); ?>/assets/image-01.png">
		</div>

		<?php query_posts('post_type=about'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- Intro Section -->
		<div class="intro-section" id="info">
			<div class="intro-inner">
				<div class="content col-50 p-lg">
					<div>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="col-50 p-lg">

				<?php if( get_field('studio_image') ): ?>
    				<img src="<?php the_field('studio_image'); ?>" />
				<?php endif; ?>

					<!-- <img src="<?php bloginfo('template_url'); ?>/assets/image-02.png"/> -->
				</div>
			</div>
		</div>
		<?php
			endwhile;
			endif;
		?>

		<div class="project-wrap" id="projects">

			<div class="project-title">
				<h2>Recent Projects</h2>
			</div>
			<div class="project-grid">
			<?php query_posts('posts_per_page=20&category_name=projects'); ?>
	

				<?php
				if ( have_posts() ) :

					// number variable
					$item_number = 1;

					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/content', get_post_type() );
						$item_number++;
					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>

			<div class="project-footer-title">
				<h2>Visit our <a href="#">Instagram</a> page in the meantime.</h2>
			</div>

		</div>


		<div class="contact-info" id="contact">
		<?php query_posts('post_type=contact'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="map col-50">
				<img src="<?php bloginfo('template_url'); ?>/assets/map.png">
			</div>
			<div class="contact-content col-50">
				<?php the_content(); ?>
			</div>
		<?php
			endwhile;
			endif;
		?>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
