
  <?php
  if(function_exists('get_field')):
  
  $images = get_field('gallery');
  if( $images ): ?>

  <div class="slider">
    <?php foreach( $images as $image ): ?>
    <div style="background: url(<?php echo $image['url'];?>) no-repeat center center; background-size: cover;">
      <p><?php echo $image['caption']; ?></p>
    </div>
    <?php endforeach; ?>
  </div>
  <?php endif;
endif;?>
