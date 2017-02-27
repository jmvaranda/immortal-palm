<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>

	<div class="latest-news">

	</div>

	<div class="contact">
		<h4>Have questions?</h4>
		<p>Drop us a line at
		 <a href="#">umc@gmail.com</a> or <a href="#">contact us here</a>.</p>
	 </div>
</aside>
