<?php get_header();?>

<div class="wide-container content-container">
	<div class="container">		
		<main role="main" class="row gutters">
			<div class="col span_24">
				<div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
				</div>
			</div>	
		</main>
</div>

<?php get_footer();?>