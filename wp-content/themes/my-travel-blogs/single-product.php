<?php
/**
 * The template for displaying a product
 *
 */

	get_header(); 

	$varieties =  get_field('variety');
	$productImages = array();

	if ($varieties) {
		for ($i=0; $i < count($varieties); $i++) {
			 $varieties[$i]['id'] = uniqid();
			 $item = $varieties[$i]['image'];
			 $item['variety_id'] = $varieties[$i]['id'];
			 array_push($productImages, $item);
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
								<?php foreach( $varieties as $variety ) { ?>
									<!-- carousel -->
									<div 
										class="product-carousel product-variety" 
										data-variety-id="<?php echo $variety['id'] ?>"
									>
										<?php	foreach ($variety['images'] as $image) { ?>
											<img 
												src="<?php echo $image['image']['sizes']['thumbnail'] ?>"  
												class="cursor-pointer product-image mb-2"
												data-url="<?php echo $image['image']['url'] ?>"	
											/>
										<?php } ?>
									</div>
									<!-- /carousel -->
								<?php } ?>
							</div>

							<div class="col-md-6">
								<div id="productMainImage" class="position-relative">
									<div class="loader">
										<i class="fas fa-spinner fa-spin"></i>
									</div>
								</div>
							</div>

							<div class="col-md-4">
								<!-- title -->
								<h1 class="mt-0 mb-4"><?php the_field('title') ?></h1>

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
											<div class="product-flavors mb-5">
												<h3 class="title mb-2">Available Flavors:</h3>
												<?php foreach( $varieties as $variety ) { ?>
													<div 
														class="badge cursor-pointer item-toggle py-2 px-4 mb-2"
														data-variety-id="<?php echo $variety['id'] ?>"	
													>
														<?php echo $variety['name'] ?>
													</div>
												<?php } ?>
											</div>
											<!-- /flavors -->

											<!-- ingredients -->
											<div class="product-toggle">
												<div class="product-toggle-title title cursor-pointer collapsed py-1" data-toggle="collapse" data-target="#collapseIngredients">
													<div class="d-flex align-items-center">
														<div class="mr-auto">Ingredients</div>
														<div>
															<i class="fas fa-plus"></i>
															<i class="fas fa-minus"></i>
														</div>
													</div>
												</div>
												<div class="product-toggle-content collapse" id="collapseIngredients">
													<div class="py-3">
														<p>Download our Ingredients doc:</p>

														<?php foreach( $varieties as $variety ) { ?>
															<div 
																class="product-ingredients product-variety"
																data-variety-id="<?php echo $variety['id'] ?>"	
															>
																<?php if($variety['ingredients']) { ?>
																	<div class="badge active py-2 px-4">
																		<a href="<?php echo $variety['ingredients']['url'] ?>" download>
																			<?php echo $variety['ingredients']['filename'] ?>
																		</a>
																	</div>
																<?php } else { ?>
																	<p><em>Currently Unavailable</em></p>
																<?php } ?>
															</div>
														<?php } ?>
													</div>
												</div>
											</div>
											<!-- /ingredients -->

											<!-- nutrition facts -->
											<div class="product-toggle">
												<div class="product-toggle-title title cursor-pointer collapsed py-1" data-toggle="collapse" data-target="#collapseNutritionFacts">
													<div class="d-flex align-items-center">
														<div class="mr-auto">Nutrition Facts</div>
														<div>
															<i class="fas fa-plus"></i>
															<i class="fas fa-minus"></i>
														</div>
													</div>
												</div>
												<div class="product-toggle-content collapse" id="collapseNutritionFacts">
													<div class="py-3">
														<p>Download our Nutritional Facts doc:</p>

														<?php foreach( $varieties as $variety ) { ?>
															<div 
																class="product-nutrition product-variety"
																data-variety-id="<?php echo $variety['id'] ?>"	
															>
																<?php if($variety['nutrition_facts']) { ?>
																	<div class="badge active py-2 px-4">
																		<a href="<?php echo $variety['nutrition_facts']['url'] ?>" download>
																			<?php echo $variety['nutrition_facts']['filename'] ?>
																		</a>
																	</div>
																<?php } else { ?>
																	<p><em>Currently Unavailable</em></p>
																<?php } ?>
															</div>
														<?php } ?>
													</div>
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
