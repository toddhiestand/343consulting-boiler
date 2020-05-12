<div class="wide-container header-container pin">
	<div class="container max">
		<header class="row">
			<div class="col span_6 siteid">
				<h1><a style="background-image: url(<?php the_field('site_logo','option');?>);" href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
				<p class="menu-icon"><button class="menu-btn mobileshow"><i class="fas fa-bars"></i></button></p>
			</div>
			<div class="navigation col span_18 mobilehide">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_id' => 'cssmenu' ) ); ?>
			</div>
		</header>
	</div>
</div>