<?php get_header();?>

<?php
  get_header();
  get_template_part( 'inc/sermon','header'); 
  get_template_part( 'inc/sermon','sorter'); 
?>


<div class="wide-container">
	<div class="container">		
		<div class="row gutters paddingtop">
			<div class="col span_6">
        	<?php the_post_thumbnail('image-square'); ?>                      
      </div>
			<div class="col span_12 body-content">
	      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<?php the_content(); ?>
			</div>
			<div class="col span_6 sermon-meta">
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'preacher', '<h4>Preacher:</h4> ', ', ' ); ?></div>
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'passage', '<h4>Passage:</h4> ', ', ' ); ?></div>
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'series', '<h4>Series:</h4> ', ', ' ); ?></div>
				<div class="sermon-meta-section"><?php echo get_the_term_list( $post->ID, 'topics', '<h4>Topics:</h4> ', ', ' ); ?></div>
			</div>
		</div>
		<div class="row" style="margin-top: 30px;border-top: 1px solid #f0f0f0;">
			<div class="prevnext">
				<?php previous_post_link('%link', '<span class="ss-icon ss-air">navigateleft</span> Previous Sermon'); ?>
				<?php next_post_link('%link', 'Next Sermon <span class="ss-icon ss-air">navigateright</span>'); ?>
			</div>
		</div>
		<div class="row paddingon">
    	<p style="text-align: center;"><a class="button" href="<?php echo site_url(); ?>/sermons/">Back to All Sermons</a></p>
    </div>
			<?php endwhile; else: ?>
			<?php _e('Sorry, no posts matched your criteria.'); ?>
			<?php endif; ?>
	</div>
</div>


<?php get_footer();?>