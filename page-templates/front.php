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
					<a href="#" class="inline-button">Learn more </a>

			</div>
		</div>
		<a role="button" class="register-classes large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">Sign up for classes</a>
	</div>
	<div class="hero-gradient"></div>
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
			<a class="wing-chun" href="<?php echo site_url();?>/martial-arts/wing-chun/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wing-chun.svg" alt="wing-chun" class="svg">
				<h3>Wing Chun</h3>
				<p>Wing chun is designed to defeat your opponent by redirecting the force of incoming strikes while attacking simultaneously. </p>
			</a>
			<hr class="show-for-small-only">
			<a class="tong-bei" href="<?php echo site_url();?>/martial-arts/tong-bei/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tong-bei.svg" alt="tong-bei" class="svg">
				<h3>Tong Bei</h3>
				<p>Tong Bei is an aggressive long to mid range martial art that employs fast, relaxed and precise movements to attack your opponent.</p>
			</a>
			<hr class="show-for-small-only">
			<a class="tai-chi" href="<?php echo site_url();?>/martial-arts/tai-chi/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tai-chi.svg" alt="tai-chi" class="svg">
				<h3>Tai Chi</h3>
				<p>Tai chi is a 500 year old martial art based on relaxed circular movements. Its training principals are the same as wing chun: root, structure and sensitivity.</p>
			</a>

		</div>
	</div>
</section>

<hr>

<section class="why-umc">

	<div class="testimonials-module">
		<h2 class="label">Testimonials</h2>

			<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
				<button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
				<button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

				<ul class="orbit-container">
					<?php
					// Show last 4 testimonial posts in Orbit slider
					// WP_Query arguments
					 $args = array(
						 'post_type' => array( 'post' ),
						 'category_name' => 'testimonial',
						 'posts_per_page' => 3,
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
		 							<p><a class="inline-button" href="#">Read full testimonial</a></p>
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
			 </nav>
		 </div>

	</div>
	<?php include ('gallery-side.php'); ?>
	<?php // echo do_shortcode('[gallery columns="4" size="fp-medium" ids="74,75,76,77,78"]'); ?>


</section>
<hr>





<section class="recent-updates-contact">
	<div class="news-posts">
		<h2 class="label">News</h2>


		<?php
		// WP_Query arguments
		 $args = array(
			 'post_type' => array( 'post' ),
			 'category_name' => 'news',
			 'posts_per_page' => 3,
		 );
		 // The Query
		 $query = new WP_Query( $args );

		 // The Loop
		 if ( $query->have_posts() ) {
			 while ( $query->have_posts() ) {
				 $query->the_post();	?>
				 <article class="post-<?php the_ID();?>">
						<?php
							// Featured image
							if ( has_post_thumbnail() ) {?>
							<div class="featured media">
								<?php // the_post_thumbnail( 'category-thumb' ); ?></div>
						<?php }?>
						<div class="recent-content">
							<h3>
								<a href="<?php the_permalink();?>"><?php the_title();?></a>
							</h3>
							<div class="recent-excerpt">
								<?php //the_content();
										the_excerpt();
								?>
								<a href="<?php the_permalink();?>">See full post →</a>
							</div>
						</div>

						</article>
						<hr>
				<?php }} else {
			 // no posts found
		 }
		 // Restore original Post Data
		 wp_reset_postdata();
		?>

	</div>

	<div class="contact-side">
		<h2 class="label">Register</h2>
		<p>Interested? Please fill out information below to register now.</p>
		<?php echo do_shortcode('[contact-form-7 id="112" title="Register"]');?>

		</div>
	</section>

</section>
<!-- End Content Main -->


<?php get_footer();
