<?php get_header();?>
<section class="containerg about-dispay forpadding test" id="testimonial">
  <a href="<?php echo site_url('/testimonial'); ?>">
      <h2 class="section-heading heading"> our testimonials </h2>
  </a> 
      <h2 class="text-success textsay"> Welcome to the our testamonial Section  have a look What Clients Say About Us</h2>
      <div class="section-header text-center px-2">
        <h3>
            <i class="fas fa-quote-left fa-2x"></i></h3>
    </div>
  </div>
    <?php
        $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 4,
    );
        $testimonial = new WP_Query($args);
        while ( $testimonial->have_posts()) {
        $testimonial->the_post();
    ?>
        <div class="card" >
            <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
            </div>
            <div class="card-description">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
            </div>
        </div>
    <?php
    }
        wp_reset_query(); 
    ?>
</section>

<?php get_footer();?>
