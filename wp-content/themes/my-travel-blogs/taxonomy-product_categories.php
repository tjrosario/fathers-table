<?php
/**
* Template Name: Taxonomy - Product Category
*/
  get_header(); 

  $queried_object = get_queried_object();
  $name = $queried_object->name;
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;
  $tax_slug = $queried_object->slug;
  $tax_name = $queried_object->name;
  $tax_with_term_id = $taxonomy . '_' . $term_id;

  $args = array(  
    'post_type' => 'product',
    'posts_per_page'=> -1,
    'post_status' => 'publish',
    'order' => 'ASC',
    'tax_query' => array(
      array(
          'taxonomy' => 'product_categories',
          'field' => 'slug',
          'terms' => $tax_slug
      )
    )
  );

  $products = new WP_Query( $args ); 

  $queried_object = get_queried_object();
?>

<section class="product-category-page" id="productListing">
  <!-- hero -->
  <div 
    class="hero d-flex position-relative"
    style="background-image: url('<?php echo get_field('hero_image', $tax_with_term_id)['url'] ?>')"  
  >
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="hero-title"><?php echo $name ?></h1>
          <?php echo get_field('hero_content', $tax_with_term_id) ?>
        </div>
      </div>
    </div>

    <div class="wave"></div>
  </div>
  <!-- /hero -->

<div class="container">

  <div class="row">

    <div class="two-tone-layout"><!-- two tone layout start -->

      <div class="col-xs-12" id="content"><!-- primary start -->
        
        <div class="product-category py-5">

          <!-- filters -->
          <div class="filters mb-5">
            <h5 
              class="title collapsed cursor-pointer" 
              data-toggle="collapse"
              data-target="#collapseFilters"
            >
              Filter
              <i class="fas fa-angle-up ml-2"></i>
              <i class="fas fa-angle-down ml-2"></i>
            </h5>

            <div class="collapse" id="collapseFilters">
              <div class="py-4">

                <!-- flavors -->
                <?php
                  $flavors = array();
                  $i = 0;
                  while ( $products->have_posts() ) : 
                    $products->the_post(); 
                    foreach ($products as $product) {
                      $varieties = get_field('variety');
                      foreach ($varieties as $variety) {
                        array_push($flavors, $variety['flavor']);
                      }
                    }

                    $flavors = array_unique($flavors);
                    $flavors = array_filter($flavors);
                  ?>
                <?php endwhile; ?>

                <?php if ($flavors) { ?>
                  <h6 class="subtitle mb-3">By Flavor:</h6>
                  <?php foreach( $flavors as $flavor ) { ?>
                    <a 
                      class="badge cursor-pointer mr-2 mb-3"
                      data-filter="flavor"
                      data-value="<?php echo $flavor ?>"
                    >
                      <?php echo $flavor; ?>
                    </a>
                  <?php } ?>
                <?php } ?>
                <!-- flavors -->


                <div class="actions d-flex justify-content-end">
                  <button type="button" class="btn btn-white mr-4 cancel">
                    Reset filter
                  </button>
                  <button type="submit" class="btn btn-primary submit">
                    Apply filter
                  </button>
                </div>
            
              </div>
            </div>
          </div>
          <!-- /filters -->

          <div class="products row">
            <?php
              while ( $products->have_posts() ) : 
                $products->the_post(); 
                $permalink = get_permalink($products->post->ID)
              ?>
                <?php include('shared/product-varieties.php'); ?>
                <?php include('shared/product-grid.php'); ?>
            <?php endwhile;?>
          </div>
        </div>

      </div>

    </div>

    </div>

  </div>

</div><!-- #main -->

</section><!-- #primary -->

<?php include('shared/quickview.php') ?>

<?php
get_footer();