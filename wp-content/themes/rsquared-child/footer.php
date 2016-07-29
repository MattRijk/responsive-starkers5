<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

	<footer>

<?php
	get_sidebar( 'footer' );
?>

	
	<div class="content">
		<a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			&copy;<?php bloginfo( 'name' ); ?>
		</a>

		<?php do_action( 'starkers_credits' ); ?>
		<!--
		<a href="<?//php echo esc_url( __('http://wordpress.org/', 'starkers') ); ?>" title="<?//php esc_attr_e('Semantic Personal Publishing Platform', 'starkers'); ?>" rel="generator"> 
			<?//php printf( __('Proudly powered by %s.', 'starkers'), 'WordPress' ); ?>
		</a>-->
		<a title="Privacy Policy" href="#">Privacy Policy</a>
		<a title="Terms of Service" href="#">Terms of Service</a>
	</div>
	
	</footer>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>