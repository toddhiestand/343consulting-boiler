<div class="wide-container header-container pin">
	<div class="container max">
		<header class="row">
			<div class="col-xs-12 col-lg-3 siteid">
				<h1><a style="background-image: url(<?php the_field('site_logo','option');?>);" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<a class="menu-btn"><i class="far fa-bars"></i></a>
			</div>
			<div class="navigation col-lg-9 col-xs-2 mobilehide">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'cssmenu' ) ); ?>
			</div>
		</header>
	</div>
</div>