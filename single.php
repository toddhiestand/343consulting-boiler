<?php get_header();?>


<?php $headerimage = wp_get_attachment_image_src(get_field('blog_header_image','option'), 'header-image'); ?>
<div class="wide-container hero short" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
  <div class="hero-inner reveal">
      <h1>News</h1>
  </div>
</div>


<div class="wide-container">
	<div class="container">		
		<div class="row paddingon">
			      				<p><a href="/blog"><i class="fal fa-long-arrow-left"></i> All Posts</a></p>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="prevnext">
						<?php previous_post_link('%link', 'Previous Post'); ?>
						<?php next_post_link('%link', 'Next Post'); ?>
					</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
		</div>
	</div>	
</div>

<?php get_footer();?>