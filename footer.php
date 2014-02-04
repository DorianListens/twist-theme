<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Site developed by <a href="http://dorianlistens.com" target="_blank">Dorian Listens</a></p>
		</div><!-- .site-info -->
		<div class="twist-tag">
		<h2 class="site-description">Creative <div class="green">Investment</div> Solutions</h2>
	</div><!-- .twist-tag -->
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>