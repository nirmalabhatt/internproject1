
<?php get_header();?>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <!-- <img src="img/banner1.jpg" class="d-block w-100" alt="..."> -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" class="d-block w-100" alt="...">

            </div>
            <div class="carousel-item">
            <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.jpg" class="d-block w-100" alt="...">

            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <section class="container  forpadding" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-text-wrapper about-dispay">
                            
                            <div>
                                <h5 id="about-skin">About Skinlite</h5>
                                <hr class="underline">
                                <h2>Our Short Introduction</h2>
                                <p>Skinlite is a Sumnima Herbal cosmetics brand established on Chaitra-12,2070 (BS), which is much appreciated for disclosing the full list of ingredients for its products. Each of the items is uniquely formulated with certified natural components for ensuring maximum efficacy, ultimate safety and a luxurious experience
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" id="aboutimage">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about.jpeg" alt="about-imgae">
                    </div>
                </div>
            </div>
            </section>

            
            
            
        <section class="containerg about-dispay forpadding" id="products">
            <div class="heading-section">
                <div class="w-100 solid-divider">
                    <a href="<?php echo site_url('/products'); ?>">
                        <h3 class="heading" id="skinp">Skinlite Products</h3></a>
                </div>
                <h2 id="OrganicProducts">Our Some Organic Products</h2>
                <p class="description-text"> Skinlite Sumnima Herbal products are free from harmful chemicals and toxins, making them safe
                    and suitable for everyday use. With a focus on quality, affordability, and sustainability,
                    Skinlite Sumnima Herbal has become a trusted choice in Nepal. </p>
            </div>

<div class="row w-100 mt-4">
            <?php 
        $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
    );
    $products = new WP_Query($args);
    while ($products->have_posts()) {
        $products->the_post();
    ?>
     <div class="col-lg-3 col-md-6 col-12 product-item">
         <div class="product-content-wrapper">
         <div class="product-image">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </a>
         </div>
            <div class="product-details">
                <a href="<?php the_permalink(); ?>">
                    <h3 class="product-name"><?php the_title(); ?></h3>
                </a>
                <span class="product-price">Rs -230</span> &ensp;
                  <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                <a class="view-product-details-button ml-auto" href="<?php the_permalink(); ?>"> View Details</a>
            </div>
         </div>
    </div>
  <?php
    }
    wp_reset_query(); 
    ?>
</div>
</section>



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
            'posts_per_page' => 2,
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

<section class="containerg about-dispay forpadding test" id="testimonial">
  <a href="<?php echo site_url('/testimonial'); ?>">
      <h2 class="section-heading heading"> our testimonials </h2>
  </a> 
      <h2 class="text-success textsay" >What Clients Say About Us</h2>
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
