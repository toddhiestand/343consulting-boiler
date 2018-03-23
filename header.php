<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
		<!-- mobile meta (hooray!) -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
	
	<!-- if page is content page -->
	<?php if (is_single()) { ?>
		<meta property="og:url" content="<?php the_permalink() ?>"/>
		<meta property="og:title" content="<?php single_post_title(''); ?>" />
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

	<!-- if page is others -->
	<?php } else { ?>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/fb-logo.png" /> 
	<?php } ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<nav class="pushy pushy-right mobileshow">
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'mobilemenu' ) ); ?>
</nav>
<div class="site-overlay"></div>

<div id="container">

<div class="wide-container header-container pin">
	<div class="container row">
		<header class="row">
			<div class="col span_8 siteid">
			<a class="menu-btn mobileshow" href="#">&#9776;</a> 
				<h1><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="navigation mobilehide col span_16">
				<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'mobilemenu mobilehide' ) ); ?>
			</div>
		</header>
	</div>
</div>
