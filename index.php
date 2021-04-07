<?php

get_header();

?>

<?php $headerimage = wp_get_attachment_image_src(get_field('blog_header_image','option'), 'header-image'); ?>
<div class="wide-container hero short" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
  <div class="hero-inner reveal">
      <h1>News</h1>
  </div>
</div>


<div class="wide-container">
	<div class="container">		
		<div class="row paddingtop">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="article col-xs-12 col-lg-6">	
					<p class="smalltext"><?php the_time('F jS, Y'); ?></p>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('image-wide'); ?></a>
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
					</div>
				<?php endwhile; else: ?>
				
				<?php _e('Sorry, there are no posts at this time.'); ?>
				<?php endif; ?>
		</div>
		<div class="row">
			<?php get_template_part( 'inc/feature', 'pagination' ); ?>
		</div>
		</div>
	</div>

<?php get_footer();?>