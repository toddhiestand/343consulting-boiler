 <div class="article sermon row gutters">
    <div class="col span_6">
        <?php the_post_thumbnail('image-square'); ?>                      
    </div>
    <div class="col span_18 article-content">
        <p class="time"> <?php the_time('F j, Y'); ?></p>
        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        <?php the_field('short_intro');?>
        <div class="meta-section">
            <p class="meta"><?php echo get_the_term_list( $post->ID, 'series', 'Series: ', ', ' ); ?></p>
            <p class="meta"><?php echo get_the_term_list( $post->ID, 'preacher', 'Preacher: ', ', ' ); ?></p>
        </div>

    </div>
</div>