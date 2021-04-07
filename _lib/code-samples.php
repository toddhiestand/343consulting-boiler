// A SAMPLE FIELD FOR ACF

<?php the_field('the_field');?>


// A SAMPLE REPEATER FIELD

<?php if(get_sub_field('repeater_field')): ?>
	<div class="items">
	<?php while(has_sub_field('repeater_field')): ?>
	     <div class="item">
	      <?php the_sub_field('repeater_item');?>
	    </div>
	  <?php endwhile; ?>
	</div>
<?php endif; ?>

// ONLY SHOW A FIELD OF ITS POPULATED

<?php if( $generaltitle = get_sub_field('title') ){ ?>
<h3 class="content-heading"><?php echo $generaltitle; ?></h3>
<?php }?>

// BXSLIDER UTILIZING ACF

<ul class="bxslider slider-header">
	<?php if(get_sub_field('slider_images')): ?>
     <?php while(has_sub_field('slider_images')): ?>
        <?php $bannerimage = wp_get_attachment_image_src(get_sub_field('image'), 'banner-image'); ?>
        <li class="<?php the_sub_field('darkened_overlay'); ?>" style="background-image: url(<?php echo $bannerimage[0]; ?>);">	
					<div class="slide-content col span_14 centered">
						<h2><?php the_sub_field('slide_title');?> </h2>
						<p class="intro"><?php the_sub_field('slide_content');?> </p>
					</div>
				</li>    
      <?php endwhile; ?>
  <?php endif; ?>
</ul>

<script>
	 $('.slider-header').bxSlider({
  		mode: 'fade',
		  minSlides: 1,
		  maxSlides: 1,
		  moveSlides: 0,
		  auto: true,
		  autoStart: true,
		  slideWidth: 0,
		  pager: true,
		  preloadImages: 'all'
	 }); 
</script>