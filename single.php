<?php get_header();?>

<div class="wide-container">
	<div class="container row">		
		<main role="main" class="row gutters">
			<div class="col span_16">
				<div class="row">
		      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="article span_24 featured-article">
						<div class="single-post">	
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<?php the_post_thumbnail( 'image-single' ); ?>
								<?php the_content(); ?>
								<?php the_tags('<span class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
								<p class="categories"> Categories: <?php the_category(',') ?></p>
								<div class="prevnext">
									<?php previous_post_link('%link', 'Previous Post'); ?>
									<?php next_post_link('%link', 'Next Post'); ?>
								</div>
							</div>
					</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
				</div>
			</div>	
			<?get_template_part('sidebar-single');?>
		</main>
</div>

<?php get_footer();?>