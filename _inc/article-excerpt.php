<?php
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'image-square', true);
?>

<div class="article span_grid secondary-article">
	<div class="article-header" style="background-image: url(<?php echo $thumb_url[0];?>);">
		<div class="article-title">
			<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
			<?php if( $guestname = get_field('guest_blogger_name') ){ ?> 
		<span class="authorlink">By <?php the_field('guest_blogger_name'); ?></span>
		<?php }?>
		</div>
	</div>
</div>

