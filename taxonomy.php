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
        <div class="article sermon col span_24">
            <div class="col span_10">
                <?php the_post_thumbnail('image-square'); ?>                      
            </div>
            <div class="col span_14 article-content">
                <p class="time"> <?php the_time('F j, Y'); ?></p>
                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                <?php the_field('short_intro');?>
                <div class="meta-section">
                    <p class="meta"><?php echo get_the_term_list( $post->ID, 'series', 'Series: ', ', ' ); ?></p>
                    <p class="meta"><?php echo get_the_term_list( $post->ID, 'preacher', 'Preacher: ', ', ' ); ?></p>
                </div>

            </div>
        </div>
        <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
        <?php endif; ?>
    </div>

        <?php get_template_part( 'inc/feature', 'pagination' ); ?>


    <div class="row">
    	<p style="text-align: center;"><a class="button" href="<?php echo site_url(); ?>/sermons/">Back to All Sermons</a></p>
    </div>

			</div>
		</main>
	</div>
</div>


<?php get_footer() ?>


