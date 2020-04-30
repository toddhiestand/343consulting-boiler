<?php
  get_header();
  get_template_part( 'inc/sermon','header'); 
  get_template_part( 'inc/sermon','sorter'); 
?>

<div class="wide-container content-container">
  <div class="container">   
	<div class="row paddingtop">
		<p style="text-align:center"><a class="button small" style="background: #39bbf7" href="<?php the_field('itunes_link','option');?>"><span class="ss-icon ss-pika">music</span> Subscribe using iTunes</a></p>  
    <p style="text-align:center"><a class="button small" style="background: #39bbf7" href="<?php the_field('google_play_link','option');?>"><span class="ss-icon ss-pika">music</span> Subscribe using Google Play</a></p>
	</div>

    <div class="row paddingon">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part( 'inc/sermon','content'); ?>
      <?php endwhile; else: ?>
      <?php _e('Sorry, no posts matched your criteria.'); ?>
      <?php endif; ?>
    </div>

    <?php get_template_part( 'inc/feature', 'pagination' ); ?>
		 
	</div>
</div>


<?php get_footer() ?>

