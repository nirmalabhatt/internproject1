<?php get_header();?>

<br>
<h1 class="heading">our products</h1>
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
                    <h3><?php the_title(); ?></h3>
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

    <?php get_footer();?>