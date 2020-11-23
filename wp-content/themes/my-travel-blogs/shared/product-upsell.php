<?php
  /**
   * Make-shift recommendation engine that gets similar products that belongs
   * to the same taxonomy
   */

  $queried_object = get_queried_object();

  $terms = get_the_terms( $queried_object->ID, 'product_categories' );

  // just grab the first product category it belongs to
  $term = $terms[0];
  $taxonomy = $term->taxonomy;
  $term_id = $term->term_id;
  $tax_slug = $term->slug;
  $tax_name = $term->name;
  $tax_with_term_id = $taxonomy . '_' . $term_id;

  $args = array(  
    'post_type' => 'product',
    'posts_per_page'=> 4,
    'post_status' => 'publish',
    'order' => 'ASC',
    'orderby' => 'rand',
    'post__not_in' => array(get_the_ID()),
    'tax_query' => array(
      array(
          'taxonomy' => 'product_categories',
          'field' => 'slug',
          'terms' => $tax_slug
      )
    )
  );

  $products = new WP_Query( $args ); 
?>

<!-- product upsell -->
<div class="product-upsell text-center">
  <h2 class="mb-5 title">You might also like</h2>

  <div class="products row">
    <?php
      while ( $products->have_posts() ) : 
        $products->the_post(); 
        $permalink = get_permalink($products->post->ID)
      ?>
        <?php include('product-varieties.php'); ?>
        <?php include('product-grid.php'); ?>
    <?php endwhile;?>
  </div>
</div>
<!-- /product upsell -->