<?php 

get_header();
?>

<?php $headerimage = wp_get_attachment_image_src(get_field('blog_header_image','option'), 'header-image'); ?>
<div class="wide-container hero short" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
  <div class="hero-inner reveal">
      <h1>Whoops! Page Not Found</h1>
  </div>
</div>


<div class="wide-container">
	<div class="container">
		<section class="row center-xs paddingon ">
			<div class="col-sm-6">
				<h2 style="text-align: center;">It looks like we have a problem</h2>
				<p style="text-align: center;">Looking for something specific? Go ahead and search our site</p>
				<?php get_search_form();?>
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>