<article id="post-<?php the_ID(); ?>" class="feat">

  <?php
  if ( has_post_thumbnail() ) {
  the_post_thumbnail( array(300, 300) );
} else {
  
  if(function_exists('get_field')):
  
    // check if ACF is activated to before grabbing field values
    
  $image = get_field("default_image", "options");
  
  echo '<img src="' . $image['url'] . '" width="'. $image['sizes']['card-thumbnail size-width'] . '" height="' . $image['sizes']['card-thumbnail size-height'] . '" />';
  
  endif;
}?>

	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>

</article>
