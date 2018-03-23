<?php
	get_header();
	get_template_part( 'inc/sermon','header'); 
	get_template_part( 'inc/sermon','sorter'); 
?>


<div class="wide-container content-container">
  <div class="container">   

    <div class="row paddingon">
      <h1>Sorting Sermons By: <?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); echo $term->name; ?></h1>
    </div>
   
    <div class="row paddingon">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php get_template_part( 'inc/sermon','content'); ?>
        <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
        <?php endif; ?>
    </div>

    <?php get_template_part( 'inc/feature', 'pagination' ); ?>

    <div class="row paddingbottom">
    	<p style="text-align: center;"><a class="button" href="<?php echo site_url(); ?>/sermons/">Back to All Sermons</a></p>
    </div>

	</div>
</div>


<?php get_footer() ?>


