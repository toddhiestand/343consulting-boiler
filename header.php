<!DOCTYPE HTML>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php bloginfo( 'name' ); ?> - <?php wp_title( '|' ); ?></title>
	<?php wp_head(); ?>
	<?php the_field('header_scripts','option');?>
	<script src="https://kit.fontawesome.com/b0e493f392.js" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>

	<div class="pushy pushy-right mobilemenu">
		<div class="mobile-id">
			<a href="<?php echo site_url(); ?>"><img class="mobilelogo" width="200" src="<?php the_field('site_logo','option');?>" alt="<?php bloginfo('name'); ?>"></a>
			<p class="closebtn pushy-link"><a href="#"><i class="fa fa-times"></i></a></p>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'container_class' => '' ) ); ?>		
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



