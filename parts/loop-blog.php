<article id="post-<?php the_ID(); ?>" class="blog-card">

  <?php
  
  if(function_exists('get_field')):
    $blog_link = get_field('blog_link');
  endif;

  if ( has_post_thumbnail() ) {
  the_post_thumbnail( array(300, 300) );
}?>

  <div class="card-content">

		<h2><?php the_title(); ?></h2>
  	<!-- <span class="date"><?php the_time('F j, Y');?></span> -->

    <?php

    the_excerpt();

  	// if( strtotime( $post->post_date ) > strtotime('-7 day') ) {
  	// 		echo '<span class="new badge"></span>';
  	// }
  	

if( !empty($blog_link) ) {
echo '<div class="article-link"><a itemprop="sameAs" aria-label="Read ' . get_the_title() . '" href="' . $blog_link . '"><span>Read Article</span><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
<path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
<path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
</svg></a></div>';
} else {
  echo '<div class="article-link"><a aria-label="Read ' . get_the_title() . '" href="' . the_permalink() . '" rel="bookmark">Read Article</a></div>';
}
	
  
  ?>

  </div>

</article>
