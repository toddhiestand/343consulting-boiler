<?php while(the_flexible_field("header_options")): ?>
	  <?php if(get_row_layout() == "image_header"): // layout: Main Content with bg image ?> 

	  	<?php $headerimage = wp_get_attachment_image_src(get_sub_field('background_image'), 'header-image'); ?>

	  	<div class="wide-container page-header" style="color:#fff;background-image: url(<?php echo $headerimage[0]; ?>);height: <?php the_field('header_size');?>vh;">
				<?php if ('on' == get_field('overlay_setting')) { ?>   
				<style type="text/css">
						
						.page-header:after {
							content: " ";
							display: block;
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							background: <?php the_field('overlay_color');?>;
							opacity: .<?php the_field('overlay_transparency');?>;
						}
				</style>
        <?php } ?>

				<div class="row">
					<div class="header-content">
					  	<?php if( $imgtitle = get_sub_field('title') ){ ?>
              		<h1 style="text-align: <?php the_sub_field('title_alignment');?>"><?php echo $imgtitle; ?></h1>
            	<?php }?>  	
					  	<?php if( $imgintro = get_sub_field('short_content') ){ ?>
              	<?php echo $imgintro; ?>
            	<?php }?>  	
            	<?php if( $headercontent = get_sub_field('header_content') ){ ?>
              	<?php echo $headercontent; ?>
            	<?php }?>  	
					</div>
				</div>
			</div>
				
		<?php elseif(get_row_layout() == "video_header"): // layout: General Content with bg image ?> 
	
	    	 <div class="wide-container video-header">
		     
	    	 		<?php if ('on' == get_field('overlay_setting')) { ?>   
				<style type="text/css">
						
						.video-header:after {
							content: " ";
							display: block;
							position: absolute;
							top: 0;
							left: 0;
							width: 100%;
							height: 100%;
							background: <?php the_field('overlay_color');?>;
							opacity: .<?php the_field('overlay_transparency');?>;
						}
				</style>
        <?php } ?>

		      <video playsinline autoplay muted loop id="bgvid">
		        <source src="<?php the_sub_field('webm_file');?>" type="video/mp4">
		        <source src="<?php the_sub_field('mp4_file');?>" type="video/mp4">
		      </video>
		      <div id="videocontent">
		        	<?php if( $vidtitle = get_sub_field('title') ){ ?>
              	<h1 style="text-align: <?php the_sub_field('title_alignment');?>"><?php echo $vidtitle; ?></h1>
            	<?php }?>  	
					  	<?php if( $vidintro = get_sub_field('short_content') ){ ?>
              	<?php echo $vidintro; ?>
            	<?php }?>  	
		      </div>
		    </div>



		<?php elseif(get_row_layout() == "simple_header"): // layout: General Content with bg image ?> 
	
	    	<div class="wide-container simple-header" style="background: <?php the_sub_field('background_color');?>">
	    		<div class="container">
	    			<h1><?php the_title();?></h1>
	    		</div>
	      </div>
	    
	 	<?php endif; ?><!-- end flexible sections -->
		<?php endwhile; ?><!-- end flexible fields -->

