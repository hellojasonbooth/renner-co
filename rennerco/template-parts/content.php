<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package renner&co
 */
global $item_number;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php rennerco_post_thumbnail(); ?>

	<header class="entry-header">
		<div class="entry-number">
			0<?php echo $item_number; ?>
		</div>

		<div class="entry-content">
			<!-- title of post -->
			<h2 class="entry-title">
				<?php the_title(); ?>
			</h2>

			<!-- descriptor of post -->
			<div class="entry-comment">
				<?php the_content(); ?>
			</div>
		</div>

	</header><!-- .entry-header -->


</article><!-- #post-<?php the_ID(); ?> -->
