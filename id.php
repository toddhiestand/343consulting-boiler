<div class="wide-container header-container pin">
	<div class="container max siteidrow">
		<header class="row">
			<div class="col-xs-4 siteid">
				<h1><a style="background-image: url(<?php the_field('site_logo','option');?>);" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<button class="menu-btn"><i class="fas fa-signal-alt-3 fa-rotate-270"></i></button>
			</div>
			<div class="navigation col-xs-8 mobilehide">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'cssmenu' ) ); ?>
			</div>
		</header>
	</div>
</div>