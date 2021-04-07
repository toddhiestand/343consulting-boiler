<?php 
get_header();
?>

<div class="wide-container content-section <?php the_sub_field('padding_setting'); ?>">
	<div class="row">
		<div class="col-lg-12">
		
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>		
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>