<?php
  get_header();
  get_template_part( 'inc/sermonf','header'); 
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



			
		
	</div>
</div>


<?php get_footer() ?>

