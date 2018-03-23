<?php

get_header();

?>

<div class="wide-container content-container">
	<div class="container row">		
		<main role="main" class="row gutters">
			<div class="col span_16 centered">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="article">
						<?php the_post_thumbnail('image-wide'); ?>						
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
				</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
				<?php get_template_part( 'inc/feature', 'pagination' ); ?>
			</div>
		</main>
</div>

<?php get_footer();?>