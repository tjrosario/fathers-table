<?php
/**
* Template Name: Taxonomy - Product Category
*/
  get_header(); 

  function my_posts_where( $where ) {
    $where = str_replace("meta_key = 'variety_$", "meta_key LIKE 'variety_%", $where);
    return $where;
  }

  add_filter('posts_where', 'my_posts_where');

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

  $category_products = new WP_Query( $args ); 

  // filters
  $filter_search = $_GET['search'];
  $filter_sizes = $_GET['size'];
  $filter_ounces = $_GET['ounces'];
  $filter_flavors = $_GET['flavor'];

  if (!empty($filter_search) ) {
    $args['meta_query'][] = array(
      'key' => 'title',
      'value' => $filter_search[0],
      'compare' => 'LIKE'
    );
  }

  if (!empty($filter_sizes) ) {
    $args['meta_query'][] = array(
      'key' => 'variety_$_size',
      'value' => $filter_sizes,
      'compare' => 'IN'
    );
  }

  if (!empty($filter_ounces) ) {
    $args['meta_query'][] = array(
      'key' => 'variety_$_ounces',
      'value' => $filter_ounces,
      'compare' => 'IN'
    );
  }

  if (!empty($filter_flavors) ) {
    $args['meta_query'][] = array(
      'key' => 'variety_$_flavor',
      'value' => $filter_flavors,
      'compare' => 'IN'
    );
  }

  $products = new WP_Query( $args ); 

  function get_available_filters($filter, $item_set) {
    $items = array();

    while ( $item_set->have_posts() ) : 
      $item_set->the_post(); 
      foreach ($item_set as $item) {
        $varieties = get_field('variety');
        foreach ($varieties as $variety) {
          array_push($items, $variety[$filter]);
        }
      }

      $items = array_unique($items);
      $items = array_filter($items);
      $items = array_filter(array_map('trim', $items));
      sort($items);
    endwhile;

    return $items;
  }
?>
<!-- 
<pre>
  <?php 
    print_r($args); 
  ?>
</pre> -->

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

            <div class="d-flex align-items-baseline">
              <h5 
                class="title collapsed cursor-pointer" 
                data-toggle="collapse"
                data-target="#collapseFilters"
              >
                Filter
                <i class="fas fa-angle-up ml-2"></i>
                <i class="fas fa-angle-down ml-2"></i>
              </h5>

              <form class="search">
                <div class="form-group ml-5 position-relative">
                  <input 
                    type="text" 
                    class="form-control" 
                    placeholder="Search..." 
                    value="<?php echo $filter_search[0]; ?>"  
                  />
                  <button type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </div>
            
            <!-- active filters -->
            <div class="active-filters mt-4 d-flex">
              <?php foreach ($filter_sizes as $size) { ?>
                <div
                  class="badge mr-2 mb-3 cursor-default active"
                  data-filter="size"
                  data-value="<?php echo $size ?>"
                >
                  <?php echo $size; ?>
                  <i class="fas fa-times cursor-pointer remove ml-3"></i>
                </div>
              <?php } ?>

              <?php foreach ($filter_ounces as $ounce) { ?>
                <div
                  class="badge mr-2 mb-3 cursor-default active"
                  data-filter="ounces"
                  data-value="<?php echo $ounce ?>"
                >
                  <?php echo $ounce; ?>
                  <i class="fas fa-times cursor-pointer remove ml-3"></i>
                </div>
              <?php } ?>

              <?php foreach ($filter_flavors as $flavor) { ?>
                <div
                  class="badge mr-2 mb-3 cursor-default active"
                  data-filter="flavor"
                  data-value="<?php echo $flavor ?>"
                >
                  <?php echo $flavor; ?>
                  <i class="fas fa-times cursor-pointer remove ml-3"></i>
                </div>
              <?php } ?>

              <?php if ($filter_search) { ?>
                <div
                  class="badge mr-2 mb-3 cursor-default active"
                  data-filter="search"
                  data-value="<?php echo $filter_search[0] ?>"
                >
                  "<?php echo $filter_search[0]; ?>"
                  <i class="fas fa-times cursor-pointer remove ml-3"></i>
                </div>
              <? } ?>
            </div>
            <!-- /active filters -->

            <div class="collapse" id="collapseFilters">
              <div class="pb-4">

                <!-- sizes -->
                <?php
                  $sizes = get_available_filters('size', $category_products);
                ?>

                <?php if ($sizes) { ?>
                  <h6 class="subtitle mb-3">By Size:</h6>
                  <?php foreach( $sizes as $size ) { ?>
                    <a 
                      class="
                        badge apply cursor-pointer mr-2 mb-3 
                        <?php if (in_array($size, $filter_sizes)) echo 'active'; ?>
                      "
                      data-filter="size"
                      data-value="<?php echo $size ?>"
                    >
                      <?php echo $size; ?>
                    </a>
                  <?php } ?>
                <?php } ?>
                <!-- /sizes -->

                <!-- ounces -->
                <?php
                  $ounces = get_available_filters('ounces', $category_products);
                ?>

                <?php if ($ounces) { ?>
                  <h6 class="subtitle mb-3">By Ounce:</h6>
                  <?php foreach( $ounces as $ounce ) { ?>
                    <a 
                      class="
                        badge apply cursor-pointer mr-2 mb-3 
                        <?php if (in_array($ounce, $filter_ounces)) echo 'active'; ?>
                      "
                      data-filter="ounces"
                      data-value="<?php echo $ounce ?>"
                    >
                      <?php echo $ounce; ?>
                    </a>
                  <?php } ?>
                <?php } ?>
                <!-- /ounces -->

                <!-- flavors -->
                <?php
                  $flavors = get_available_filters('flavor', $category_products);
                ?>

                <?php if ($flavors) { ?>
                  <h6 class="subtitle mb-3">By Flavor:</h6>
                  <?php foreach( $flavors as $flavor ) { ?>
                    <a 
                      class="
                        badge apply cursor-pointer mr-2 mb-3 
                        <?php if (in_array($flavor, $filter_flavors)) echo 'active'; ?>
                      "
                      data-filter="flavor"
                      data-value="<?php echo $flavor ?>"
                    >
                      <?php echo $flavor; ?>
                    </a>
                  <?php } ?>
                <?php } ?>
                <!-- flavors -->

                <div class="actions d-flex justify-content-end mt-2">
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

<?php wp_reset_postdata();  ?>

<?php
get_footer();