<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SavelievIhor
 */

?>

	<footer id="colophon" class="footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://github.com/cloudy1gor', 'savelievihor' ) ); ?>">
				<?php
				/* translators: %s: Created by author name */
				printf( esc_html__( 'Created by %1$s', 'savelievihor' ), 'Ihor Saveliev' );
				?>
			</a>
		</div><!-- .site-info -->

        <h2>Footer 1</h2>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
