<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<!-- <div id="page-sidebar-left" role="main"> -->
<div id="page-contact" role="main">
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
  <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <header>
          <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
          <?php the_content(); ?>
      </div>

      <form data-abide="ikndvs-abide" novalidate="">
					  <div data-abide-error="" class="alert callout" style="display: none;">
					    <p><i class="fi-alert"></i> There are some errors in your form.</p>
					  </div>
					  <div class="row">
					    <div class="small-12 columns">
					      <label>Number Required
					        <input type="text" placeholder="1234" aria-describedby="exampleHelpText" required="" pattern="number">
					        <span class="form-error">
					          Yo, you had better fill this out, it's required.
					        </span>
					      </label>
					      <p class="help-text" id="exampleHelpText">Here's how you use this input field!</p>
					    </div>
					    <div class="small-12 columns">
					      <label>Nothing Required!
					        <input type="text" placeholder="Use me, or don't" aria-describedby="exampleHelpTex" data-abide-ignore="">
					      </label>
					      <p class="help-text" id="exampleHelpTex">This input is ignored by Abide using `data-abide-ignore`</p>
					    </div>
					  </div>
					  <div class="row">
					    <fieldset class="large-6 columns">
					      <legend>Check these out</legend>
					      <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
					      <input id="checkbox2" type="checkbox" required=""><label for="checkbox2">Checkbox 2</label>
					      <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
					    </fieldset>
					  </div>
					  <div class="row">
					    <fieldset class="large-6 columns">
					      <button class="button" type="submit" value="Submit">Submit</button>
					    </fieldset>
					  </div>
					</form>

      <footer>
          <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
          <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
  </article>
<?php endwhile;?>

<form class="main-content">
  <p>Interested? Please fill out information below to register now.</p>

  <label>First name
    <input type="text" placeholder="First Name" aria-describedby="exampleHelpText">
  </label>

  <label>Last name
    <input type="text" placeholder="Last Name" aria-describedby="exampleHelpText">
  </label>

  <label class="">Are you looking for Group or Individual classes?
    <select>
      <option value="null">Select option</option>
      <option value="group">Group</option>
      <option value="individual">Individual</option>
      <option value="both">Both</option>
      <option value="unsure">Not sure</option>
    </select>
  </label>

  <label class="">Rate your experience
    <select>
      <option value="null">Select option</option>
      <option value="beginner">Beginner</option>
      <option value="intermediate">Intermediate</option>
      <option value="expert">Expert</option>
    </select>
  </label>
  <p class="help-text" id="exampleHelpText">*Not required</p>

  <fieldset class="">
    <label>Rate your experience</label>
    <input type="radio" name="experience" value="beginner" id="experienceBeginner" required><label for="experienceBeginner">Beginner</label>
    <input type="radio" name="experience" value="intermediate" id="experienceIntermediate"><label for="experienceIntermediate">Intermediate</label>
    <input type="radio" name="experience" value="expert" id="experienceExpert"><label for="experienceExpert">Expert</label>
  </fieldset>
  <!-- <fieldset class="large-6 columns">
    <legend>Check these out</legend>
    <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
    <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
    <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
  </fieldset> -->

  <label>
    Got a question?
    <textarea placeholder="Leave a message"></textarea>
  </label>

  <button class="button" type="submit" value="Submit">Submit</button>

</form>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php //get_sidebar(); ?>

</div>

<?php get_footer();
