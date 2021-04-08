<?php 
	get_header();
?>

<div class="wide-container hero short" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' );?>);";>
  <div class="hero-inner reveal">
		<h1 class="page-title"><?php the_title();?></h1>
  </div>
</div>

<div class="wide-container content-section <?php the_sub_field('padding_setting'); ?>">
	<div class="container">
		<div class="row paddingtop">
			<div class="col-lg-12">
	        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>		
					<?php endwhile; else: ?>
					<?php _e('Sorry, no posts matched your criteria.'); ?>
					<?php endif; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>