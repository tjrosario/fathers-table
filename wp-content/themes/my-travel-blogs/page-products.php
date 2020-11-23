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

	<section class="products-page" id="productListing">

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

		</div><!-- #main -->
	
  </section><!-- #primary -->
  
  

<?php
get_footer();

