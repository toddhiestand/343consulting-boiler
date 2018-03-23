<?php get_header();?>

<?php
  get_header();
  get_template_part( 'inc/sermon','header'); 
  get_template_part( 'inc/sermon','sorter'); 
?>


<div class="wide-container">
	<div class="container">		
		<div class="row gutters paddingtop">
			<div class="col span_12 body-content">
	      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

					
<?php if( $episode_content = get_the_powerpress_content() ) { ?>
 <fieldset class="episode-box">
 <legend>Podcast Episode</legend>
 <?php echo $episode_content; ?>
 </fieldset>
<?php } ?>

<?php the_content(); ?>

			</div>
			<div class="col span_12 sermon-meta">
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'preacher', '<h4>Preacher:</h4> ', ', ' ); ?></div>
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'passage', '<h4>Passage:</h4> ', ', ' ); ?></div>
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'topics', '<h4>Topics:</h4> ', ', ' ); ?></div>
			</div>
		</div>
		<div class="row">
			<div class="prevnext">
				<?php previous_post_link('%link', 'Previous Sermon'); ?>
				<?php next_post_link('%link', 'Next Sermon'); ?>
			</div>
		</div>
		<div class="row">
    	<p style="text-align: center;"><a class="button" href="<?php echo site_url(); ?>/sermons/">Back to All Sermons</a></p>
    </div>
			<?php endwhile; else: ?>
			<?php _e('Sorry, no posts matched your criteria.'); ?>
			<?php endif; ?>
	</div>
</div>


<?php get_footer();?>