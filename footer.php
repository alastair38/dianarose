		<footer class="page-footer black-text center" role="contentinfo">
		
			<div id="inner-footer" class="row no-margin-bot">

				<?php if( have_rows('logos', 'option') ):

					$count = count(get_field('logos', 'option'));
					$cols = 12 / $count;
					$section_title = get_field('logos_title', 'option');
					?>

		    <div id="funder-logos" class="row">


					<?php if($section_title) {
						echo '<p>';
						_e($section_title, 'acbase');
						echo '</p>';
					} ?>
					<div class="flex">

			    <?php while( have_rows('logos', 'option') ): the_row();
					$image = get_sub_field('image_file');
					$logo_text = get_sub_field('logo_text');

					?>

		      <div class="col <?php echo 's' . $cols;?>">

						<a href="<?php the_sub_field('link_to'); ?>"><?php
							if($logo_text) {
								echo '<p>
								' . $logo_text . '
								</p>';
							}
						?><img class="responsive-img" alt="<?php echo $image['alt']; ?>" src="<?php echo $image['sizes']['medium']; ?>"></a>
					</div>

		    	<?php endwhile; ?>
					</div>

				</div>

				<?php endif;

				// $fb = get_field("facebook", "options");
				// $twitter = get_field("twitter", "options");
				//$contact = get_field("contact_page", "options");
				//

				//
				// if($fb):
				// 	echo '<li><a href="' . $fb . '">Facebook<svg class="icon icon-facebook right"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-facebook"></use></svg></a></li>';
		 		// endif;
				//
				// if($twitter):
				// 	echo '<li><a href="https://twitter.com/' . $twitter . '">Twitter<svg class="icon icon-twitter right" aria-hidden="true"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-twitter"></use></svg></a></li>';
		 		// endif;
				//
				// if($contact):
				// echo '<ul id="contact" class="col s12">';
				// 	echo '<li><a href="' . $contact . '">Contact<svg class="icon icon-mail right" aria-hidden="true"><use xlink:href="' . get_stylesheet_directory_uri() . '/assets/icons/symbol-defs.svg#icon-mail"></use></svg></a></li>';
				// echo '</ul>';
		 		// endif;
				//


				?>
				<div class="col s12">
					<p class="source-org copyright">
						<?php bloginfo('name'); ?> &copy; <?php echo date("Y");?>
					</p>
				</div>

			</div> <!-- end #inner-footer -->

		</footer> <!-- end .footer -->
	<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
