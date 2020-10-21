<?php while(the_flexible_field("header_options")): ?>
	  <?php if(get_row_layout() == "image_header"): // layout: Main Content with bg image ?> 

	  	<?php $headerimage = wp_get_attachment_image_src(get_sub_field('background_image'), 'header-image'); ?>

	  	<div class="wide-container hero <?php the_sub_field('header_size');?>" style="color:#fff;background-image: url(<?php echo $headerimage[0]; ?>);background-position: <?php the_sub_field('background_image_position');?>;">
					<div class="hero-inner">
					  	<?php if( $headertitle = get_sub_field('title') ){ ?>
              		<h1><?php echo $headertitle; ?></h1>
            	<?php }?>  	
            	<?php if( $headersubtitle = get_sub_field('subtitle') ){ ?>
              		<?php echo $headersubtitle; ?>
            	<?php }?>  	
					</div>
			</div>

		<?php elseif(get_row_layout() == "video_header"): // layout: General Content with bg image ?> 
	
	    	 <div class="wide-container video-header hero <?php the_field('header_size');?>">

		      <video playsinline autoplay muted loop id="bgvid">
		        <source src="<?php the_sub_field('webm_file');?>" type="video/mp4">
		        <source src="<?php the_sub_field('mp4_file');?>" type="video/mp4">
		      </video>
		      <div class="hero-inner">
		        	<?php if( $videotitle = get_sub_field('title') ){ ?>
              		<h1><?php echo $videotitle; ?></h1>
            	<?php }?>  	
            	<?php if( $videosubtitle = get_sub_field('subtitle') ){ ?>
              		<?php echo $videosubtitle; ?>
            	<?php }?> 	
		      </div>
		    </div>

		<?php elseif(get_row_layout() == "simple_header"): // layout: General Content with bg image ?> 
	
	    	<div class="wide-container simple-header" style="background: <?php the_sub_field('background_color');?>">
	    		<div class="container">
	    			<h1 style="text-align: <?php the_sub_field('title_alignment');?>;color: <?php the_sub_field('title_color');?>; "><?php the_title();?></h1>
	    		</div>
	      </div>
	    
	 	<?php endif; ?><!-- end flexible sections -->
		<?php endwhile; ?><!-- end flexible fields -->

