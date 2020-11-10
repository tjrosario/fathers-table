<?php
/**
* Template Name: Taxonomy - Product Category
*/
  get_header(); 

  $cat_slug = get_queried_object()->slug;
  $cat_name = get_queried_object()->name;

  $args = array(  
    'post_type' => 'product',
    'posts_per_page'=> -1,
    'post_status' => 'publish',
    'order' => 'ASC',
    'tax_query' => array(
      array(
          'taxonomy' => 'product_categories',
          'field' => 'slug',
          'terms' => $cat_slug
      )
    )
  );

  $loop = new WP_Query( $args ); 
?>

<section id="blog" class="blog-section bizberg_default_page">

<div class="container">

  <div class="row">

    <div class="two-tone-layout"><!-- two tone layout start -->

      <div class="col-xs-12" id="content"><!-- primary start -->
        

        <div class="product-category">
          <h1 class="mb-5"><?php echo $cat_name; ?></h1>

          <div class="products row">
          <?php
            while ( $loop->have_posts() ) : 
              $loop->the_post(); 
              $permalink = get_permalink($loop->post->ID)
            ?>
              <div class="item col-md-3" data-id="<?php echo the_ID() ?>">
                <div class="product-image position-relative mb-4">

                  <img src="<?php echo get_field('image')['sizes']['medium'] ?>" class="" />

                  <div class="product-quickview btn btn-primary">Quick View</div>
                </div>

                <h2 class="mb-3">
                  <a href="<?php echo $permalink; ?>">
                    <?php the_field('title') ?>
                  </a>
                </h2>
                
                <p><?php the_field('short_description') ?></p>

                <div class="product-gallery hidden" data-id="<?php echo the_ID() ?>">
                  <?php the_field('gallery') ?>
                </div>

                <div class="product-meta hidden">
                  <div class="product-description">
                    <h3>Description</h3>
                    <?php if (get_field('ingredients')) : ?>
                      <?php the_field('description'); ?>
                    <?php else: ?>
                      <p>Currently unavailable.</p>
                    <? endif; ?>
                  </div>

                  <div class="product-ingredients">
                    <h3>Ingredients</h3>
                    <?php if (get_field('ingredients')) : ?>
                      <img src="<?php echo get_field('ingredients')['url'] ?>" alt="Ingredients" />
                    <?php else: ?>
                      <p>Currently unavailable.</p>
                    <? endif; ?>
                  </div>

                  <div class="product-nutrition">
                    <h3>Nutrition Facts</h3>
                    <?php if (get_field('nutrition_facts')) : ?>
                      <img src="<?php echo get_field('nutrition_facts')['url'] ?>" alt="Nutrition Facts" />
                    <?php else: ?>
                      <p>Currently unavailable.</p>
                    <? endif; ?>
                  </div>
                </div>
              </div>

          <?php  endwhile;?>
          </div>
        </div>

      </div>

    </div>



    </div>

  </div>

</div><!-- #main -->

</section><!-- #primary -->

<?php include('quickview.php') ?>

<?php
get_footer();