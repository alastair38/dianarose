		<footer class="page-footer black-text center" role="contentinfo">
		
			<div id="inner-footer" class="row no-margin-bot">

				<?php 
				
				if(function_exists('get_field')):
  
					
			
				
				if( have_rows('logos', 'option') ):

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
				endif;?>
				
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
