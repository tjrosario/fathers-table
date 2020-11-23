<?php
/**
 * The template for displaying a product
 *
 */

	get_header(); 

	include('shared/product-varieties.php');
?>
	<section id="productDetail" class="product-detail-page py-5">
		<div class="container">

			<div class="breadcrumbs"><?php get_product_breadcrumbs(); ?></div>

			<div class="row">

				<div class="two-tone-layout"><!-- two tone layout start -->

					<div class="col-xs-12" id="content"><!-- primary start -->
						<div class="row">
							<div class="col-xs-2 pt-4 col-a">
								<?php 
									$productThumbnailSize = 'thumbnail';
									include('shared/product-variety-images.php'); 
								?>
							</div>

							<div class="col-xs-10 col-md-6 col-b pt-4">
								<div id="productMainImage" class="position-relative">
									<div class="loader">
										<i class="fas fa-spinner fa-spin"></i>
									</div>
								</div>
							</div>

							<div class="col-xs-12 col-md-4 col-c pt-4">

								<?php include('shared/product-meta.php') ?>
								
							</div>
						</div>

						<?php
/* 						while ( have_posts() ) : the_post();

							// get_template_part( 'template-parts/content', 'detail' );

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop. */
						?>

					</div>


				</div>
			
			</div>
			
			<?php include('shared/product-upsell.php') ?>

		</div>

	</section>

<?php
get_footer();
