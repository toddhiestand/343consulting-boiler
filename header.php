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

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>

<body <?php body_class(); ?>>

<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'pushy pushy-left mobilemenu' ) ); ?>	
<div class="site-overlay"></div>

<div id="container">


<?php if ('on' == get_field('alert_status','option')) { ?>   
	<div class="wide-container alert">
		<div class="container">
			<p class="alert-content"><i class="far fa-bell"></i> <a href="<?php the_field('alert_link','option');?>"><?php the_field('alert_text','option');?> <i class="fas fa-angle-right"></i>
</a></p>
		</div>
	</div>	
<?php } ?>

<div class="wide-container header-container pin">
	<div class="container wide">
	<header class="row">
		<div class="col span_6 siteid">
			<p class="menu-icon"><button class="menu-btn mobileshow">&#9776; Menu</button></p>
			<h1><a href="<?php echo site_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
		</div>
		<div class="navigation col span_18">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'mobilehide' , 'container_id' => 'cssmenu' ) ); ?>	
		</div>
	</header>
</div>
</div>



