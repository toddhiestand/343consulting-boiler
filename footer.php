	<div class="wide-container baseline paddingon">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-xs-4">
	  			<?php if ( is_active_sidebar( 'footer-column-1' ) ) : ?>
						<?php dynamic_sidebar( 'footer-column-1' ); ?>
					<?php endif; ?>
	  			
	  		</div>
	  		<div class="col-xs-4">
	  			<?php if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-column-2' ); ?>
					<?php endif; ?>
	  			
	  		</div>
	  		<div class="col-xs-4">
	  			<?php if ( is_active_sidebar( 'footer-column-2' ) ) : ?>
						<?php dynamic_sidebar( 'footer-column-2' ); ?>
					<?php endif; ?>
	  		</div>
	  	</div>
	    <div class="row paddingtop">
	      <div class="col-sm-12"> 
	        <p class="smalltext fineprint">&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?></p>
	        <p class="by">Site by <a target="_blank" href="https://liminalcreative.com"><img src="<?php bloginfo('template_directory'); ?>/_images/liminal-dark.png" alt="Liminal Creative"></a></p>
	     	</div>
	    </div>
	  </div>
	</div>

</div><!-- end id container -->

</body>
</html>

<?php wp_footer();?>

<?php the_field('header_scripts','option');?>