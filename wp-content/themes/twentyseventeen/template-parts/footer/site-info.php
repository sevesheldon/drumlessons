<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info">
	<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a> -->
	&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?> |
	<a href="http://kentoncodeworks.com/" title="KCW">Kenton Codeworks</a>
</div><!-- .site-info -->
