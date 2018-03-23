<?php
/*
Template Name: Home Page Template
*/
get_header();

?>

<div class="wide-container content-container">
	<div class="container row">		
			<div class="col span_16">
				<div class="row">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="article span_24 featured-article">
						<div class="feature-post-content single-post">	
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
				</div>
			</div>	
			<?php get_sidebar();?>
</div>

<?php get_footer();?>