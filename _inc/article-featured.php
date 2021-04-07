<div class="row">
<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'image-wide', true);
?>
<div class="article span_24 featured-article">
	<div class="new"><span class="new-text <?php the_field('feature_title') ?>"><?php the_field('feature_title') ?></span></div>
	<div class="article-header" style="background-image: url(<?php echo $thumb_url[0];?>);">
		<div class="article-title">
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<?php if( $guestname = get_field('guest_blogger_name') ){ ?> 
		<span class="avatar">
			<?php $image = wp_get_attachment_image_src(get_field('guest_blogger_image'), 'image-square'); ?>
			<img class="alignleft" src="<?php echo $image[0]; ?>" alt="<?php get_field('guest_blogger_name');?>" />
		</span>
		<span class="authorlink">By <?php the_field('guest_blogger_name'); ?></span>
		<?php }?>
		</div>
	</div>
	<div class="feature-post-content">
		<?php the_excerpt(); ?>
	</div>
</div>

</div>