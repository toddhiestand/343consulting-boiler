<?php 
/* 
Template Name: Events Listing Template
*/
get_header();
?>

<?php $headerimage = wp_get_attachment_image_src(get_field('events_header_image','option'), 'header-image'); ?>
<div class="wide-container hero short" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
  <div class="hero-inner reveal">
      <h1>Events</h1>
  </div>
</div>

<div class="wide-container">
	<div class="container">		
		<div role="main" class="row gutters paddingtop">
			<div class="col span_24">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>		
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
			</div>	
		</div>
	</div>
</div>



<?php get_footer(); ?>