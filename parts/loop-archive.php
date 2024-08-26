<article id="post-<?php the_ID(); ?>" class="article-list">

	<h2><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	<?php


if(function_exists('get_field')):
  $desc = get_field("publication_description");
	if( $desc ): 
		echo $desc;
	 endif;
endif;

	


	?>
	<?php
	if( strtotime( $post->post_date ) > strtotime('-7 day') ) {
			echo '<span class="new badge"></span>';
	}
	?>

</article>
