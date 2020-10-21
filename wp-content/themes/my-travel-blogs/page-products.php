<?php
/**
* Template Name: Page - Products
*/
  get_header(); 

  $args = array(  
    'post_type' => 'product',
    'posts_per_page'=> -1,
    'post_status' => 'publish',
  );

  $loop = new WP_Query( $args ); 
?>

	<section id="blog" class="blog-section bizberg_default_page">

		<div class="container">

			<div class="row">

				<div class="two-tone-layout"><!-- two tone layout start -->

					<div class="col-xs-12" id="content"><!-- primary start -->

						<?php
						while ( have_posts() ) : the_post();

						  get_template_part( 'template-parts/content', 'page' );

						endwhile; // End of the loop.
            ?>
            

            <div class="products row">
            <?php
              while ( $loop->have_posts() ) : 
                $loop->the_post(); 
                $gallery = get_field('gallery');
              ?>
<!-- 
              <pre>
                <?php  
                  // print_r(get_fields()) 
                 // print_r (get_field('gallery'));
                ?>
              </pre> -->

                <div class="item col-md-3" data-id="<?php echo the_ID() ?>">
                  <div class="image position-relative mb-4">

                    <img src="<?php echo get_field('image')['sizes']['medium'] ?>" class="" />

                    <div class="quickview btn btn-primary">Quick View</div>
                  </div>
                  <h2 class="mb-3"><?php the_title() ?></h2>
                  <p><?php the_field('short_description') ?></p>

                  <div class="gallery hidden" data-id="<?php echo the_ID() ?>">
                    <?php the_field('gallery') ?>
                  </div>
                </div>
              
              <?php  endwhile;?>
            </div>

          </div>

        </div>



				</div>

			</div>

		</div><!-- #main -->
	
  </section><!-- #primary -->

  <div class="sidenav" id="sidenav">
    <div class="wrapper p-4">
      <div class="actions text-right row p-4 mt-4">
        <i class="fas fa-times close"></i>
      </div>
      <div id="quickViewProduct" class="mt-3"></div>
    </div>
  </div>
  
  <script>
    (function ($) {
      $(document).ready(function() {
        var $sidenav = $('#sidenav');
        var $quickViewProduct = $('#quickViewProduct');
        var $products = $('.products');

        $products.find('.item .image').on('click', function(e) {
          e.preventDefault();
          var $item = $(this).parents('.item');
          var $gallery = $item.find('.gallery').removeClass('hidden');

          var $quickViewGallery = $quickViewProduct.find('.gallery');

          if ($quickViewGallery.length) {
            var id = $quickViewGallery.data('id');
            var $item = $products.find('.item[data-id="' + id + '"]');
            $item.find('');

            $item.append($quickViewGallery.addClass('hidden'));
          }

          $quickViewProduct.html($gallery);
          toggleNav($sidenav, true);
        });

        $sidenav.find('.close').on('click', function() {
          toggleNav($sidenav, false, 1000);
        });
      });

      function toggleNav($ele, isOpen) {
        if (isOpen) {
          $ele.addClass('open');
        } else {
          $ele.removeClass('open');
        }
      }

    }(jQuery));
  </script>

<?php
get_footer();
