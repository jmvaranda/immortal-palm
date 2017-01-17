<?php
/*
Template Name: Front
*/
get_header(); ?>



<header id="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<div class="tagline-overlay">
				<h1><?php bloginfo( 'description');?></h1>
				<h4 class="subheader">Understanding internal martial arts, physical health, and spiritual well-being. <a href="#">Learn more </a></h4>
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
<?php do_action( 'foundationpress_after_content' ); ?>

<section id="content-main">

<section class="benefits">
	<div class="martial-arts">
		<h2 class="label">Courses</h2>
		<div class="martial-arts-grid">
			<div class="wing-chun">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wing-chun.svg" alt="wing-chun" class="svg">
				<h3>Wing Chun</h3>
				<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
		</div>

			<div class="tong-bei">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tong-bei.svg" alt="tong-bei" class="svg">
				<h3>Tong Bei</h3>
				<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

		</div>

			<div class="tai-chi">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tai-chi.svg" alt="tai-chi" class="svg">
				<h3>Tai Chi</h3>
				<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>
			</div>

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
					<li class="is-active orbit-slide">
						<div>
							<h3 class="text-center">Trevor says</h3>
							<p class="text-center">"I have practiced traditional martial arts for well over 20 years. Everything from mma to Qi gong.  Although I have trained with pro fighters and world champions, I still learn something new from every session with Asher. And several things I thought I knew, he has taught me to do better. He has improved my MMA fight skills–stand-up and ground–and he has improved my health. Lots of people can talk a good game. Asher can do… and teach."</p>
							<p><a href="#">Read full testimonial</a></p>
						</div>
					</li>
					<li class="orbit-slide">
						<div>
							<h3 class="text-center">You can also throw some text in here!</h3>
							<p class="text-center">"I have been training in various martial arts and combative systems for over 30 years including boxing, Thai boxing, and several military systems.  I hold ranks in a few, including of note Brazilian Jiu Jitsu and a WWII combatives-based system.  Currently I am a combatives instructor at a local company, which trains hundreds of people each year in real world self-defense.  Part of my job is to investigate new arts, systems, and training methods.  With the majority of these being just marketing hype or showy techniques that are difficult to perform under pressure, it is rare that I run across an authentic system that works; Asher Bowers’s Universal Martial Concepts is just such a system. He has successfully combined three martial arts, modernized them, and created a fighting system that captures the intensity and training of MMA with the hard-hitting power of internal martial arts.  With his advanced knowledge of body mechanics, understanding of the fight, and ability to teach how to generate intense power on demand, he has developed a system that people can learn and use well into their old age."</p>
						</div>
					</li>
					<li class="orbit-slide">
						<div>
							<h3 class="text-center">You can also throw some text in here!</h3>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
						</div>
					</li>
					<li class="orbit-slide">
						<div>
							<h3 class="text-center">You can also throw some text in here!</h3>
							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde harum rem, beatae ipsa consectetur quisquam. Rerum ratione, delectus atque tempore sed, suscipit ullam, beatae distinctio cupiditate ipsam eligendi tempora expedita.</p>
						</div>
					</li>
				</ul>
				<nav class="orbit-bullets">
				 <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
				 <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
				 <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
				 <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
			 </nav>
		 </div>
	</div>
</section>
<hr>
<section class="recent-updates">
	<div class="news-posts">
		<h2 class="label">News</h2>
		<?php
		// Get the last 4 News posts test
		query_posts( 'category_name=news&posts_per_page=4' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content-front', get_post_format() ); ?>
			<!-- Do special_cat stuff... -->
		<?php endwhile; ?>
	</div>

	<div>
	</div>

</section>

</section>
<!-- End Content Main -->


<?php get_footer();
