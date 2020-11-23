<!-- product meta -->
<div class="product-meta">
  <!-- title -->
  <div class="product-title mb-3">
    <h1 class="title mt-0"><?php the_field('title'); ?></h1>
  </div>

  <!-- description -->
  <div class="product-description">
    <?php the_field('description'); ?>
  </div>
  <!-- /description -->

  <?php if( have_rows('variety') ): ?>
  <!-- varieties -->
  <div class="product-varieties">
    <div class="product-varieties">

      <!-- flavors -->
      <div class="product-flavors mb-2">
        <h3 class="title title-beta mb-2">Available Flavors:</h3>
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

      <!-- descriptions -->
      <div class="product-descriptions mb-2">
        <?php foreach( $varieties as $variety ) { ?>
          <div
            class="variety-description product-variety hidden" 
            data-variety-id="<?php echo $variety['id'] ?>"
          >
            <?php if($variety['description']): ?>
              <div class="title title-beta">Description</div>
              <p><?php echo $variety['description']; ?></p>
            <?php endif; ?>
          </div>
        <?php } ?>
      </div>
      <!-- /descriptions -->

      <!-- ingredients -->
      <div class="product-toggle">
        <div class="title title-beta cursor-pointer collapsed py-1" data-toggle="collapse" data-target="#collapseIngredients_<?php echo $variety['id'] ?>">
          <div class="d-flex align-items-center">
            <div class="mr-auto">Ingredients</div>
            <div>
              <i class="fas fa-plus"></i>
              <i class="fas fa-minus"></i>
            </div>
          </div>
        </div>
        <div class="product-toggle-content collapse" id="collapseIngredients_<?php echo $variety['id'] ?>">
          <div class="py-4">
            <p>Download our Ingredients doc:</p>

            <?php foreach( $varieties as $variety ) { ?>
              <div 
                class="product-ingredients product-variety hidden"
                data-variety-id="<?php echo $variety['id'] ?>"	
              >
                <?php if($variety['ingredients']) { ?>
                  <div class="badge active py-2 px-4">
                    <a href="<?php echo $variety['ingredients']['url'] ?>" class="open-new-window">
                      <?php echo $variety['ingredients']['filename'] ?>
                    </a>
                  </div>
                <?php } else { ?>
                  <p><em>Currently Unavailable</em></p>
                <?php } ?>
                
                <?php if ( !in_array( 'Yes', $variety['has_artificial_ingredients'] ) ) { ?>
                  <p class="accent mt-3"><small>* Does not contain artificial flavors or ingredients</small></p>
                <?php } ?>

              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <!-- /ingredients -->

      <!-- nutrition facts -->
      <div class="product-toggle">
        <div class="title title-beta cursor-pointer collapsed py-1" data-toggle="collapse" data-target="#collapseNutritionFacts_<?php echo $variety['id'] ?>">
          <div class="d-flex align-items-center">
            <div class="mr-auto">Nutrition Facts</div>
            <div>
              <i class="fas fa-plus"></i>
              <i class="fas fa-minus"></i>
            </div>
          </div>
        </div>
        <div class="product-toggle-content collapse" id="collapseNutritionFacts_<?php echo $variety['id'] ?>">
          <div class="py-3">
            <p>Download our Nutritional Facts doc:</p>

            <?php foreach( $varieties as $variety ) { ?>
              <div 
                class="product-nutrition product-variety hidden"
                data-variety-id="<?php echo $variety['id'] ?>"	
              >
                <?php if($variety['nutrition_facts']) { ?>
                  <div class="badge active py-2 px-4">
                    <a href="<?php echo $variety['nutrition_facts']['url'] ?>" class="open-new-window">
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