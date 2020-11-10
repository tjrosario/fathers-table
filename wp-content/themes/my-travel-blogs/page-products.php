<?php
/**
* Template Name: Page - Products
*/
  get_header(); 

  $productArgs = array(  
    'post_type' => 'product',
    'posts_per_page'=> -1,
    'post_status' => 'publish',
    'order' => 'ASC',
  );

  $products = new WP_Query( $productArgs ); 

  $taxonomy = 'product_categories';

  $terms = get_terms( array(
    'taxonomy' => $taxonomy,
    'hide_empty' => false,
  ));
?>

	<section id="blog" class="blog-section bizberg_default_page">

		<div class="container">

			<div class="row">

				<div class="two-tone-layout"><!-- two tone layout start -->

          <div class="col-xs-12" id="content"><!-- primary start -->
            <h1 class="mb-5"><?php the_title(); ?></h1>

						<?php
/* 						while ( have_posts() ) : the_post();

						  get_template_part( 'template-parts/content', 'page' );

						endwhile; // End of the loop. */
            ?>
<!--             
            <div class="filters btn-group mb-5">
            <?php
              // foreach ($terms as $term) :
            ?>
              <a class="btn btn-secondary mr-5" href="#"><?php //echo $term->name ?></a>
              
            <?php // endforeach; ?>
            </div> -->
            

            <div class="products row">
            <?php
              while ( $products->have_posts() ) : 
                $products->the_post(); 
                // $gallery = get_field('gallery');
                $permalink = get_permalink($products->post->ID)
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
<!-- 
                  <div class="product-gallery hidden" data-id="<?php // echo the_ID() ?>">
                    <?php // the_field('gallery') ?>
                  </div> -->

                  <div class="product-meta hidden">
                    <img src="<?php echo get_field('image')['sizes']['medium'] ?>" class="" />

                    <div class="product-description">
                      <?php the_field('short_description'); ?>
                    </div>

                    <?php if( have_rows('variety') ): ?>
                      <div class="product-varieties">
                        <h3>Available Flavors</h3>

                        <?php while( have_rows('variety') ) : the_row(); ?>
                          <div class="badge"><?php echo get_sub_field('name') ?></div>
                        <?php endwhile; ?>

                      </div>
                    <?php 
                      endif; 
                    ?>

                  </div>
                </div>
              
              <?php endwhile;?>
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