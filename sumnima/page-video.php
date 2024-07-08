<?php get_header();?>
<section class="containerg about-dispay forpadding" id="video-gallery">
  <div class="heading-section video-heading">
  <a href="<?php echo site_url('/video'); ?>">
      <h2 class="video-gallary-text"> Our Videos </h2>
  </a> 
      <h2 class="text-success">Watch Our Rececent Videos</h2>
      <p class="description-text"> These are some of our recent videos about us and our products.</p>
  </div>
  <div class="row w-100">
    <div class="col owl-carousel owl-theme videos">
        <?php
        $video_query = new WP_Query(array(
            'post_type' => 'video',
            'posts_per_page' => 20,
        ));

        while ($video_query->have_posts()) : $video_query->the_post();
            $video_url = get_field('video_url'); 
            ?>
            <iframe width="80%" height="320px" src="<?php echo esc_url($video_url); ?>" title="<?php the_title(); ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>

</section>
<?php get_footer();?>