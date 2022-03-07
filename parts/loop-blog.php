<article id="post-<?php the_ID(); ?>" class="blog-card">

  <?php

  $blog_link = get_field('blog_link');

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
  	

if( $blog_link ) {
echo '<div class="article-link"><a itemprop="sameAs" href="' . $blog_link . '">View Article</a></div>';
} else {
  echo '<div class="article-link"><a href="' . the_permalink() . '" rel="bookmark">View Article</a></div>';
}
	
  
  ?>

  </div>

</article>
