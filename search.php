<?php

get_header();

?>

<div class="wide-container title-container">
	<div class="container">    
  	<div class="row nopadrow">
      <div class="col span_24 centered">
        <header>
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- end row-->
      </div>
    </div>
  </div>
</div>
			
<div class="wide-container">
	<div class="container">		
		<main role="main" class="row gutters">
			<div class="col span_16">
				<div class="row articles">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						 <div class="article">
							<div class="article-title">
								<a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
								<?php the_excerpt();?>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<div class="row">
					<div class="col span_24">
					<?php get_template_part( 'inc/feature', 'pagination' ); ?>
					</div>
				</div>
			</div>
			<?php get_sidebar();?>
		</main>
	</div>
</div>

<?php get_footer();?>