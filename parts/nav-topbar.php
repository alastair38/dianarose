<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->
	 <?php

	 ?>
	 <a id=skip_lnk href="#skip-target">Skip to content</a>
	 <nav aria-label="Main site navigation">
	 	<div class="nav-wrapper">

			<?php if ( is_front_page() ) :?>
				<h1 class="brand-logo display-type">
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</h1>
			<?php else : ?>
				<span class="brand-logo display-type">
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</span>
			<?php endif;?>

			<div class="hide-on-med-and-down right">
				<?php joints_top_nav(); ?>
			</div>


			<a href="#" data-target="slide-out" class="sidenav-trigger right"><span class="material-icons">menu</span></a>

			<div id="slide-out" class="sidenav show-on-medium-and-down">
<a href="<?php bloginfo('url'); ?>" class="mobile-brand-logo bold"><?php bloginfo('name'); ?></a>

    <?php joints_off_canvas_nav(); ?>
		<?php if ($logo_image){?>
		<img class="mobile-brand-logo" src="<?php echo $logo_image['sizes']['blog-thumbnail size'];?>" width="200" height="200" alt="<?php bloginfo('name'); ?> logo"/>
		<?php
		} else {?>

		<?php }?>
	</div>




	  </div>


	 </nav>
