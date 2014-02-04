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
			<span class="twist-tag">
		<h2 class="site-description">Creative <span class="green">Investment</span> Solutions</h2>
		</span><!-- .twist-tag -->
			<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | Site developed by <a href="http://dorianlistens.com" target="_blank">Dorian Listens</a></p>
		</div><!-- .site-info -->
		
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>