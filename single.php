<?php get_header();?>


<?php $headerimage = wp_get_attachment_image_src(get_field('blog_header_image','option'), 'header-image'); ?>
<div class="wide-container hero short" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
  <div class="hero-inner reveal">
      <h1>News</h1>
  </div>
</div>


<div class="wide-container">
	<div class="container">		
		<div class="row paddingtop">
			<div class="col-sm-12">
				<p><a href="/blog"><i class="fal fa-long-arrow-left"></i> All Posts</a></p>
			</div>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-sm-12">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</div>
	
		<div class="prevnext row">
			<div class="col-sm-6">
				<?php previous_post_link('%link', 'Previous Post'); ?>
			</div>
			<div class="col-sm-6">
				<?php next_post_link('%link', 'Next Post'); ?>
			</div>
		</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
		</div>
	</div>	
</div>

<?php get_footer();?>