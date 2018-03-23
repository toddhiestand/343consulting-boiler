<?php $headerimage = wp_get_attachment_image_src(get_field('sermons_header','option'), 'full'); ?>
<div class="wide-container page-header" style="background-image: url(<?php echo $headerimage[0]; ?>);height: <?php the_field('header_height');?>vh">
  <div class="header-content">
    <h1>Sermons</h1>
  </div>
</div>