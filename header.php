<!DOCTYPE HTML>

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
		<!-- mobile meta (hooray!) -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
		<title><?php bloginfo( 'name' ); ?> - <?php wp_title( '|' ); ?></title>

	<!-- if we aren't using Yoast for some reason 
	 if page is content page 
	<?php if (is_single()) { ?>
		<meta property="og:url" content="<?php the_permalink() ?>"/>
		<meta property="og:title" content="<?php single_post_title(''); ?>" />
		<meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID)); }?>" />

	 if page is others 
	<?php } else { ?>
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:image" content="<?php the_field('social_sharing_image','option');?>" /> 
	<?php } ?>
	-->

	<?php wp_head(); ?>

	<script src="https://kit.fontawesome.com/04b8b33d61.js" crossorigin="anonymous"></script>


</head>

<body <?php body_class(); ?>>

<div class="pushy pushy-left mobilemenu">
	<a href="<?php echo site_url(); ?>"><img class="mobilelogo" width="200" src="<?php the_field('site_logo','option');?>" alt="<?php bloginfo('name'); ?>"></a>
	<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'container_class' => '' ) ); ?>		
	
	<div class="menu-content">
		<p><a style="color: #fff" href="tel:5039415473">Call us:<br/> 503-941-5473</a></p>
		<p>Address<br/>
			11738 SE Durango Ct.<br/>
		  Clackamas, OR 97015</p>
	</div>
</div>

<div class="site-overlay"></div>

<div id="container">

<?php get_template_part('id'); ?>

<?php if ('on' == get_field('alert_status','option')) { ?>   
	<div class="wide-container alert">
		<div class="container">
			<p class="alert-content"><i class="far fa-bell"></i> <a href="<?php the_field('alert_link','option');?>"><?php the_field('alert_text','option');?> <i class="fas fa-angle-right"></i>
</a></p>
		</div>
	</div>	
<?php } ?>



