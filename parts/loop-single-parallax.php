<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/blogPost">

	<div class="bg parallax-container" >

		<header class="article-header">

			<h1 class="entry-title single-title h2 bold upper center" itemprop="headline"><?php the_title();?></h1>

		</header> <!-- end article header -->

		<div class="parallax"><img src="<?php the_post_thumbnail_url('large'); ?>"></div>

	</div>

  <div class="entry-content container" itemprop="articleBody">

		<?php the_content(); ?>

	   <?php wp_link_pages(); ?>

	</div> <!-- end article section -->

	<footer class="article-footer center">

	</footer> <!-- end article footer -->

</article> <!-- end article -->
