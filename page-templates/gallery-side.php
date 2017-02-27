<div class="gallery-side">
  <h2 class="label">Gallery</h2>
  <div class="gallery-content row">

    <?php
    // Display gallery items
    // WP_Query arguments
      $args = array(
        'page_id'	=> '39',
      );

      // The Query
      $query = new WP_Query( $args );

      // The Loop
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post();
          //the_content();
          echo do_shortcode('[gallery columns="2" type="rgg" size="fp-medium" ids="74,75,76,77"]');
        }
      } else {
        // no posts found
      }

      // Restore original Post Data
      wp_reset_postdata();?>
      <a class="see-more" href="#">See all photos and video →</a>
  </div>
</div>
