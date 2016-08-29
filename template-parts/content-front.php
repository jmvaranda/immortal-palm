<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php //the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
