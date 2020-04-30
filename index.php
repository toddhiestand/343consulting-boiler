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
	<div class="container narrow">		
		<div class="row paddingon">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="article col span_24">
					<div class="row">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					</div>
					<div class="row gutters">
						<div class="col span_8">
							<?php the_post_thumbnail('image-square'); ?>						
						</div>
						<div class="col span_16">
							<?php the_excerpt(); ?>
						</div>
					</div>		
				</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
				<?php get_template_part( 'inc/feature', 'pagination' ); ?>
		</div>
	</div>
</div>

<?php get_footer();?>