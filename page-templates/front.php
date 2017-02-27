<?php
/*
Template Name: Front
*/
get_header(); ?>

<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-bg.jpg">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-bg.jpg" alt=""/>

</div> -->

<header id="front-hero" role="banner" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-bg.jpg">



	<div class="marketing">
		<div class="tagline">
			<div class="tagline-overlay">
				<h3><?php bloginfo( 'description');?></h3>

				<h4 class="subheader">
					Understanding internal martial arts, physical health, and spiritual well-being.</h4>
					<a href="#">Learn more </a>

			</div>
		</div>
		<a role="button" class="register-classes large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">Sign up for classes</a>
	</div>
</header>


<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<!-- <section class="intro" role="main"> -->
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php //the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php wp_reset_query(); ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<section id="content-main">

<section class="benefits">
	<div class="martial-arts">

		<!-- Update labels for production -->
		<a href="<?php echo get_permalink( 13 ); ?>"><h2 class="label">
			Courses
		</h2></a>



		<div class="martial-arts-grid">
			<a class="wing-chun" href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wing-chun.svg" alt="wing-chun" class="svg">
				<h3>Wing Chun</h3>
				<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
			</a>

			<a class="tong-bei" href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tong-bei.svg" alt="tong-bei" class="svg">
				<h3>Tong Bei</h3>
				<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>
			</a>

			<a class="tai-chi" href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tai-chi.svg" alt="tai-chi" class="svg">
				<h3>Tai Chi</h3>
				<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>
			</a>

		</div>
	</div>
</section>

<hr>

<section class="why-umc">

	<div class="testimonials-module">
		<h2 class="label">Testimonials</h2>

			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<ul class="orbit-container">
					<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
					<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

					<?php
					// WP_Query arguments
					 $args = array(
						 'post_type' => array( 'post' ),
						 'category_name' => 'testimonial',
						 'posts_per_page' => 4,
					 );
					 // The Query
					 $query = new WP_Query( $args );

					 // The Loop
					 if ( $query->have_posts() ) {
						 while ( $query->have_posts() ) {
							 $query->the_post();
							?>
							 <li class="is-active orbit-slide">

		 							<h3 class=""><?php the_title();?> says</h3>
								<blockquote>
		 							<quote class=""><?php //the_content();
									the_excerpt();?></quote>
		 							<p class=""><a href="#">Read full testimonial</a></p>
		 						</blockquote>
		 					</li>
							<?php }} else {
						 // no posts found
					 }
					 // Restore original Post Data
					 wp_reset_postdata();
					?>
				</ul>
				<nav class="orbit-bullets">
				 <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				 <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				 <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
				 <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
			 </nav>
		 </div>

	</div>
	<?php include ('gallery-side.php'); ?>
	<?php // echo do_shortcode('[gallery columns="4" size="fp-medium" ids="74,75,76,77,78"]'); ?>


</section>
<hr>





<section class="recent-updates">
	<div class="news-posts">
		<h2 class="label">News</h2>

		<?php
		// WP_Query arguments
		 $args = array(
			 'post_type' => array( 'post' ),
			 'category_name' => 'news',
			 'posts_per_page' => 4,
		 );
		 // The Query
		 $query = new WP_Query( $args );

		 // The Loop
		 if ( $query->have_posts() ) {
			 while ( $query->have_posts() ) {
				 $query->the_post();	?>

						<h3><?php the_title();?> says</h3>
						<p><?php the_content();?></p>

				<?php }} else {
			 // no posts found
		 }
		 // Restore original Post Data
		 wp_reset_postdata();
		?>

	</div>

	<div>
	</div>

</section>

</section>
<!-- End Content Main -->


<?php get_footer();
