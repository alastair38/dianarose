<?php //get_template_part( 'parts/content', 'breadcrumbs' ); ?>

<article id="post-<?php the_ID(); ?>" class="<?php echo $post->post_name;?>" role="article" itemscope itemtype="http://schema.org/blogPost">

		<header class="article-header">

			<?php get_template_part( 'parts/content', 'breadcrumbs' ); ?>

			<h1 id="skip-target" class="entry-title single-title h4" itemprop="headline"><?php the_title();?></h1>
			<?php 
			// if(is_singular( 'post' )):

			// get_template_part( 'parts/content', 'byline' );

			// endif;


			get_template_part( 'parts/content', 'share' ); ?>

		</header> <!-- end article header -->

    <div class="entry-content" itemprop="articleBody">
			
		<?php the_content();?>

		</div> <!-- end article section -->

		<footer class="article-footer center">

			<?php if(current_user_can( 'edit_post', $post->ID )) {
					edit_post_link( __( 'Edit', 'textdomain' ), '<p>', '</p>', null, 'btn-flat btn-edit-post-link' );
				}?>

		</footer> <!-- end article footer -->

</article> <!-- end article -->
