<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package northwood
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer col-md-12" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'northwood' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'northwood' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'northwood' ), 'northwood', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
</div>
<?php wp_footer(); ?>

</body>
</html>
