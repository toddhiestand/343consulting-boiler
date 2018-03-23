<?php 
/*
	Template Name: Page with Sidebar 
*/
get_header();?>

<div class="wide-container content-container">
	<div class="container row">		
		<main role="main" class="row gutters">
			<div class="col span_16">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>		
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
			</div>	
			<?get_template_part('sidebar-single');?>
		</main>
</div>

<?php get_footer();?>