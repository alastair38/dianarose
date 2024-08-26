<article>

<div class="feat">
<?php

$excerpt = get_the_excerpt();

if ( has_post_thumbnail($post->ID) ) {
echo get_the_post_thumbnail($post->ID, array(600, 600) );
} else {
  
if(function_exists('get_field')):
  
$image = get_field("default_image", "options");

echo '<img src="' . $image['url'] . '" width="'. $image['sizes']['blog-thumbnail size-width'] . '" height="' . $image['sizes']['blog-thumbnail size-height'] . '" />';
endif;

}?>

<div class="feat-content">
  <h3><a href="<?php the_permalink($post->ID) ?>" rel="bookmark"><?php the_title(); ?></a></h3>
  <?php if($excerpt){?>
	<span><?php echo $excerpt; ?></span>
  <?php } ?>
</div>

</div>
</article>