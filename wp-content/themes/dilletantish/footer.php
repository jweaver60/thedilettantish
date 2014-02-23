<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dilletantish
 */
?>

	<div class="row">
		<div class="small-12 columns">
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="http://wordpress.org/" rel="generator"><?php printf( __( 'Proudly powered by %s', 'dilletantish' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'dilletantish' ), 'dilletantish', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div>
	</div>

</div><!-- end container -->


<?php wp_footer(); ?>
	<script>
	  $(document).foundation();
	</script>
</body>
</html>