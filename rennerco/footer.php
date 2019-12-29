<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package renner&co
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div>©<?php echo date('Y'); ?> Renner&Co <span class="grey">|</span> All rights reserved</div>
		<div class="social">
			<a href="#" class="ml-sm"><img src="<?php bloginfo('template_url'); ?>/assets/instagram.svg"></a>
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/linkedin.svg"></a>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
