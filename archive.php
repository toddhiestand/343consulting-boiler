<?php
get_header();
?>

<?php $headerimage = wp_get_attachment_image_src(get_field('blog_header_image','option'), 'header-image'); ?>


<div class="wide-container hero short" style="background-image: url(<?php echo $headerimage[0]; ?>);";>
	<div class="container">
  	<div class="row paddingtop">
			<div class="col-lg-12">
        <header>
        <h1>Blog</h1>
					<?php if (have_posts()) : ?>
					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					<?php /* If this is a category archive */ if (is_category()) { ?>				
							<h4>Category: <?php echo single_cat_title(); ?></h4>
			 		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
							<h4>Archive for <?php the_time('F jS, Y'); ?></h4>
					<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
							<h4>Archive for <?php the_time('F, Y'); ?></h4>
					<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
							<h4>Archive for <?php the_time('Y'); ?></h4>
				    <?php /* If this is a search */ } elseif (is_search()) { ?>
							<h4>Search Results</h4>
				    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
							<h4>Author Archive</h4>
					<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
							<h4>Blog Archives</h4>
					<?php } ?>
				</header><!-- end row-->
      </div>
    </div>
  </div>
</div>


<div class="wide-container">
	<div class="container">		
		<div class="row paddingtop">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="article col-xs-12 col-lg-6">	
					<p class="smalltext"><?php the_time('F jS, Y'); ?></p>
						<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('image-wide'); ?></a>
						<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<?php the_excerpt();?>
					</div>
				<?php endwhile; else: ?>
				
				<?php _e('Sorry, there are no posts at this time.'); ?>
				<?php endif; ?>
		</div>
		<div class="row">
			<?php get_template_part( 'inc/feature', 'pagination' ); ?>
		</div>
		</div>
	</div>

<?php get_footer();?>


<?php get_footer() ?>
