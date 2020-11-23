
<div class="item col-md-3" data-id="">
  <div class="product-image position-relative mb-4">

    <?php if (get_field('image')) : ?>
      <img src="<?php echo get_field('image')['sizes']['medium'] ?>" class="" />
    <?php endif; ?>

    <div class="product-quickview btn btn-primary">Quick View</div>
  </div>

  <h2 class="mb-3">
    <a href="<?php echo $permalink; ?>">
      <?php the_field('title') ?>
    </a>
  </h2>
  
  <?php if (get_field('short_description')) : ?>
    <div class="product-short-description">
      <p><?php the_field('short_description') ?></p>
    </div>
  <?php endif; ?>

  <div class="hidden">
    <div class="product-quickview-info">
      <?php 
        $productThumbnailSize = 'large';
        include('product-variety-images.php'); 
      ?>
      <?php include('product-meta.php') ?>
    </div>
  </div>
</div>