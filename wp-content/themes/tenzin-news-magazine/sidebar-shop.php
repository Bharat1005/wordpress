<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tenzin_News_Magazine
 */

if ( ! is_active_sidebar( 'sidebar-e-commerce' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-e-commerce' ); ?>
</aside><!-- #secondary -->
