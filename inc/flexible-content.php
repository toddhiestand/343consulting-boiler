<?php $i = 0; ?><!-- add a number to each section to make calling them easier --> 

<?php while(the_flexible_field("content_sections")): ?>
  
<?php $i++; ?>

  <?php if(get_row_layout() == "main_content"): // layout: Main Content with bg image ?> 
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section main-content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_titles_&_intro')) { ?>   
          <div class="row">
            <div class="col span_24 centered-section">
            <?php if( $generaltitle = get_sub_field('title') ){ ?>
                <h3 class="content-heading"><?php echo $generaltitle; ?></h3>
              <?php }?>
              <?php if( $general_intro = get_sub_field('intro') ){ ?>
                <p><?php echo $general_intro; ?></p>
              <?php }?>
          </div>
        </div>
        <?php } ?>
        <div class="row">
          <div class="col span_24">
            <p><?php the_sub_field("content"); ?></p>
          </div>
        </div>
      </div>
    </div>


    <?php elseif(get_row_layout() == "general_content"): // layout: General Content with bg image ?> 
    <?php $bgbannerimage = wp_get_attachment_image_src(get_sub_field('background_image'), 'banner-image'); ?>
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container general_content content-section bgimage_content_section <?php the_sub_field('darkened_overlay'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background-image: url(<?php echo $bgbannerimage[0]; ?>);>);">
      <div class="container">
        <div class="row">
          <div class="col span_24 centered-section">
            <?php if( $general_title = get_sub_field('title') ){ ?>
                <h3 class="content-heading"><?php echo $general_title; ?></h3>
              <?php }?>
              <?php if( $general_content = get_sub_field('content') ){ ?>
                <p><?php echo $general_content; ?></p>
              <?php }?>
          </div>
        </div>
      </div>
    </div>

  <?php elseif(get_row_layout() == "general_no_bg_image"): // layout: General Conent no image ?>
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section general_content_section_bgcolor" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <div class="row">
          <div class="col span_24 centered-section">
            <?php if( $noimage_title = get_sub_field('title') ){ ?>
              <h3 class="content-heading"><?php echo $noimage_title; ?></h3>
            <?php }?>
            <?php if( $noimage_content = get_sub_field('content') ){ ?>
              <p><?php echo $noimage_content; ?></p>
            <?php }?>
          </div>
        </div>
      </div>
    </div>  
  
  

  <?php elseif(get_row_layout() == "full_width_image"): // layout: General Content with bg image ?> 
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container general_content content-section fullwidthimage">
        <?php if ('yes' == get_sub_field('make_image_a_link')) { ?>   
          <a href="<?php the_sub_field("link"); ?>">  
        <?php }?>
        <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'banner'); ?>
          <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image')) ?>" />
        <?php if ('yes' == get_sub_field('make_image_a_link')) { ?> 
          </a>
        <?php }?>
    </div>


   <?php elseif(get_row_layout() == "two_column_row_repeater"): // layout: Three Columns ?>
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_title_&_intro')) { ?>   
          <div class="row">
            <?php if( $threerow_title = get_sub_field('title') ){ ?>
              <h3 class="content-heading"><?php echo $threerow_title; ?></h3>
            <?php }?>  
            <?php if( $threerow_intro = get_sub_field('intro') ){ ?>
              <p class="intro"><?php echo $threerow_intro; ?></p>
            <?php }?>  
          </div>
        <?php } ?>
        <?php if( have_rows('rows') ): ?>
          <?php while( have_rows('rows') ): the_row(); ?>
            <?php if( have_rows('column_row') ): ?>
                <?php while( have_rows('column_row') ): the_row(); ?>
                  <div class="row">
                    <div class="col span_<?php the_sub_field('fist_column_width')?>">
                      <?php the_sub_field('row_1'); ?>
                    </div>     
                    <div class="col span_<?php the_sub_field('second_column_width')?>">
                      <?php the_sub_field('row_2'); ?>
                    </div>      
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>  


  <?php elseif(get_row_layout() == "three_column_row_repeater"): // layout: Three Columns ?>
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_title_&_intro')) { ?>   
          <div class="row">
            <?php if( $threerow_title = get_sub_field('title') ){ ?>
              <h3 class="content-heading"><?php echo $threerow_title; ?></h3>
            <?php }?>  
            <?php if( $threerow_intro = get_sub_field('intro') ){ ?>
              <p class="intro"><?php echo $threerow_intro; ?></p>
            <?php }?>  
          </div>
        <?php } ?>
        <?php if( have_rows('rows') ): ?>
          <?php while( have_rows('rows') ): the_row(); ?>
            <?php if( have_rows('column_row') ): ?>
                <?php while( have_rows('column_row') ): the_row(); ?>
                  <div class="row">
                    <div class="col span_8">
                      <?php the_sub_field('row_1'); ?>
                    </div>     
                    <div class="col span_8">
                      <?php the_sub_field('row_2'); ?>
                    </div>     
                    <div class="col span_8">
                      <?php the_sub_field('row_3'); ?>
                    </div>  
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>  


   <?php elseif(get_row_layout() == "four_column_row_repeater"): // layout: Three Columns ?>
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_title_&_intro')) { ?>   
          <div class="row">
            <?php if( $threerow_title = get_sub_field('title') ){ ?>
              <h3 class="content-heading"><?php echo $threerow_title; ?></h3>
            <?php }?>  
            <?php if( $threerow_intro = get_sub_field('intro') ){ ?>
              <p class="intro"><?php echo $threerow_intro; ?></p>
            <?php }?>  
          </div>
        <?php } ?>
        <?php if( have_rows('rows') ): ?>
          <?php while( have_rows('rows') ): the_row(); ?>
            <?php if( have_rows('column_row') ): ?>
                <?php while( have_rows('column_row') ): the_row(); ?>
                  <div class="row">
                    <div class="col span_6">
                      <?php the_sub_field('row_1'); ?>
                    </div>    
                    <div class="col span_6">
                      <?php the_sub_field('row_2'); ?>
                    </div>     
                    <div class="col span_6">
                      <?php the_sub_field('row_3'); ?>
                    </div> 
                    <div class="col span_6">
                      <?php the_sub_field('row_3'); ?>
                    </div>  
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>  


   <?php elseif(get_row_layout() == "five_column_row_repeater"): // layout: Three Columns ?>
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_title_&_intro')) { ?>   
          <div class="row">
            <?php if( $threerow_title = get_sub_field('title') ){ ?>
              <h3 class="content-heading"><?php echo $threerow_title; ?></h3>
            <?php }?>  
            <?php if( $threerow_intro = get_sub_field('intro') ){ ?>
              <p class="intro"><?php echo $threerow_intro; ?></p>
            <?php }?>  
          </div>
        <?php } ?>
        <?php if( have_rows('rows') ): ?>
          <?php while( have_rows('rows') ): the_row(); ?>
            <?php if( have_rows('column_row') ): ?>
                <?php while( have_rows('column_row') ): the_row(); ?>
                  <div class="row">
                    <div class="col span_6">
                      <?php the_sub_field('row_1'); ?>
                    </div>    
                    <div class="col span_6">
                      <?php the_sub_field('row_2'); ?>
                    </div>     
                    <div class="col span_6">
                      <?php the_sub_field('row_3'); ?>
                    </div> 
                    <div class="col span_6">
                      <?php the_sub_field('row_3'); ?>
                    </div>  
                  </div>
                <?php endwhile; ?>
            <?php endif; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>  


  
    <?php elseif(get_row_layout() == "general_rotator"): // layout: Video Embed ?>
        <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="container">
              <?php if ('yes' == get_sub_field('show_title_&_intro')) { ?>   
                <div class="row">
                  <?php if( $rotator_title = get_sub_field('title') ){ ?>
                    <h3 class="content-heading"><?php echo $rotator_title; ?></h3>
                  <?php }?>
                  <?php if( $rotator_intro = get_sub_field('intro') ){ ?>
                    <p class="intro"><?php echo $rotator_intro; ?></p>
                  <?php }?>
                  </div>
              <?php } ?>
              <div class="row nopadtop">
                <ul class="general-slider">
                  <?php while(has_sub_field('rotator_content')): ?>
                    <div class="row nopadrow">
                    <li class="bx-general col span_18 centered"><?php the_sub_field('content'); ?> </li>
                    </div>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
        </div>


       <?php elseif(get_row_layout() == "multi_item_view_rotator"): // layout: Video Embed ?>
        <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="container">
              <?php if ('yes' == get_sub_field('show_title_&_intro')) { ?>   
                <div class="row">
                  <?php if( $rotator_title = get_sub_field('title') ){ ?>
                    <h3 class="content-heading"><?php echo $rotator_title; ?></h3>
                  <?php }?>
                  <?php if( $rotator_intro = get_sub_field('intro') ){ ?>
                    <p class="intro"><?php echo $rotator_intro; ?></p>
                  <?php }?>
                  </div>
              <?php } ?>
              <div class="row nopadtop">
                <ul class="multi-slider">
                  <?php while(has_sub_field('rotator_content')): ?>
                    <div class="row nopadrow">
                    <li class="bx-general col span_18 centered"><?php the_sub_field('content'); ?> </li>
                    </div>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
        </div>
      

      <?php elseif(get_row_layout() == "blog_posts_section"): // layout: Video Embed ?>
        <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
          <div class="container">  
            <?php if ('yes' == get_sub_field('show_title_&_intro')) { ?>   
              <div class="row">
               <?php if( $posts_title = get_sub_field('title') ){ ?>
                  <h3 class="content-heading"><?php echo $posts_title; ?></h3>
                <?php }?>
                <?php if( $posts_intro = get_sub_field('intro') ){ ?>
                  <p class="intro"><?php echo $posts_intro; ?></p>
                <?php }?>
              </div>
            <?php } ?>
            <div class="row">
              <?php query_posts( array('showposts' => '2') );?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col span_12">
                  <div class="article">
                    <p class="meta date"><?php the_time('F j, Y'); ?></p>
                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <?php the_post_thumbnail('image-square'); ?>    
                    <?php the_excerpt(); ?>     
                  </div>  
                </div>
              <?php endwhile; else: ?>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
            <p class="centered"><a class="button" href="<?php the_sub_field("articles_link"); ?>">More Articles</a>
          </div> 
        </div>   
        

  <?php endif; ?><!-- end flexible sections -->
<?php endwhile; ?><!-- end flexible fields -->