<?php
  $size = $productThumbnailSize ? $productThumbnailSize : 'thumbnail';
?>

<?php foreach( $varieties as $variety ) { ?>
  <!-- carousel -->
  <div 
    class="product-carousel product-variety hidden" 
    data-variety-id="<?php echo $variety['id'] ?>"
  >
    <?php	foreach ($variety['images'] as $image) { ?>
      <div>
        <img 
          src="<?php echo $image['image']['sizes'][$size] ?>"  
          class="cursor-pointer product-image mb-2"
          data-url="<?php echo $image['image']['sizes']['large'] ?>"	
        />
      </div>
    <?php } ?>
  </div>
  <!-- /carousel -->
<?php } ?>