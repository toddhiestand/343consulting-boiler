<?php
get_header();
?>

<div class="wide-container">    
	<div class="container">
  	<div class="row nopadrow">
      <div class="col span_24 centered">
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

<div class="wide-container content-container">
	<div class="container row">		
		<div class="col span_16">
			<?php while (have_posts()) : the_post(); ?>
        <div class="article">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
						<?php the_excerpt(); ?>
				</div>
				<?php endwhile; ?>
				
				<?php else : ?>
				
				<?php endif; ?>
		</div>
	</div>
</div>


<?php get_footer() ?>
