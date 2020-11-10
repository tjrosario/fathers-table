<?php
/**
 * The template for displaying a product
 *
 */

	get_header(); 

	$varieties =  get_field('variety');
	$productImages = array();

	if ($varieties) {
		foreach ($varieties as $variety) {
			array_push($productImages, $variety['image']);
		}
	}
?>

	<section id="productDetail" class="product-detail-page py-5">
		<div class="container">

			<div class="row">

				<div class="two-tone-layout"><!-- two tone layout start -->

					<div class="col-xs-12" id="content"><!-- primary start -->


						<div class="row">
							<div class="col-md-2">
								<!-- carousel -->
								<div class="product-carousel">
									<?php foreach ($productImages as $productImage) { ?>
										<img 
											src="<?php echo $productImage['sizes']['thumbnail'] ?>"  
											data-url="<?php echo $productImage['url'] ?>"	
											class="cursor-pointer"
										/>
									<?php } ?>
								</div>
							</div>

							<div class="col-md-6">
								
							</div>

							<div class="col-md-4">
								<!-- title -->
								<h1 class="mt-0"><?php the_field('title') ?></h1>

								<div class="product-meta">

									<!-- description -->
									<div class="product-description">
										<?php the_field('description'); ?>
									</div>

									<?php if( have_rows('variety') ): ?>
									<!-- varieties -->
									<div class="product-varieties">
										<div class="product-varieties">

											<!-- flavors -->
											<div class="product-flavors">
												<h3 class="title">Available Flavors</h3>
												<?php while( have_rows('variety') ) : the_row(); ?>
													<div class="badge"><?php echo get_sub_field('name') ?></div>
												<?php endwhile; ?>
											</div>
											<!-- /flavors -->
											
											<!-- ingredients -->
											<div class="product-toggle">
												<div class="product-toggle-title title cursor-pointer" data-toggle="collapse" data-target="#collapseIngredients">
													Ingredients
												</div>
												<div class="product-toggle-content collapse" id="collapseIngredients">
													<?php while( have_rows('variety') ) : the_row(); ?>
														<div class="product-ingredients">
															<img src="<?php echo get_sub_field('ingredients')['url'] ?>" alt="Ingredients" />
														</div>
													<?php endwhile; ?>
												</div>
											</div>
											<!-- /ingredients -->

											<!-- nutrition facts -->
											<div class="product-toggle">
												<div class="product-toggle-title title cursor-pointer" data-toggle="collapse" data-target="#collapseNutritionFacts">
													Nutrition Facts
												</div>
												<div class="product-toggle-content collapse" id="collapseNutritionFacts">
													<?php while( have_rows('variety') ) : the_row(); ?>
														<div class="product-nutrition">
															<img src="<?php echo get_sub_field('nutrition_facts')['url'] ?>" alt="Nutrition Facts" />
														</div>
													<?php endwhile; ?>
												</div>
											</div>
											<!-- /nutrition facts -->

										</div>
									</div>
									<?php 
										endif; 
									?>
								</div>
								<!-- /product meta -->
								
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

		</div>

	</section>

<?php
get_footer();
