<?php $i = 0; ?><!-- add a number to each section to make calling them easier --> 

<?php while(the_flexible_field("default_content_sections")): ?>
  
<?php $i++; ?>

  <?php if(get_row_layout() == "general_content"): // layout: Main Content with bg image ?> 
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('padding_setting'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_titles_&_intro')) { ?>   
          <div class="row">
            <div class="col span_24 centered-section">
            <?php if( $title = get_sub_field('title') ){ ?>
              <h3><?php echo $title; ?></h3>
            <?php }?>
            <?php if( $introductionone = get_sub_field('introduction') ){ ?>
              <div class="introduction">
                <p><?php echo $introductionone; ?></p>
              </div>
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

   <?php elseif(get_row_layout() == "two_columns_section"): // layout: two Columns ?>
    
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('padding_setting'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_titles_&_intro')) { ?>   
          <div class="row">
            <?php if( $title = get_sub_field('title') ){ ?>
              <h3><?php echo $title; ?></h3>
            <?php }?>  
            <?php if( $introductiontwo = get_sub_field('introduction') ){ ?>
              <div class="introduction">
                <p><?php echo $introductiontwo; ?></p>
              </div>
            <?php }?>  
          </div>
        <?php } ?>
        <?php if( have_rows('two_column_repeater') ): ?>
          <?php while( have_rows('two_column_repeater') ): the_row(); ?>
            <div class="row gutters paddingbottom">
              <div class="col span_12">
                <?php the_sub_field('column_1'); ?>
              </div>     
              <div class="col span_12">
                <?php the_sub_field('column_2'); ?>
              </div>      
            </div>
          <?php endwhile; ?>
        <?php endif; ?>         
      </div>
    </div>  

    <?php elseif(get_row_layout() == "three_columns_section"): // layout: two Columns ?>
    
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('padding_setting'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_titles_&_intro')) { ?>   
          <div class="row">
            <?php if( $title = get_sub_field('title') ){ ?>
              <h3><?php echo $title; ?></h3>
            <?php }?>  
            <?php if( $introductionthree = get_sub_field('introduction') ){ ?>
              <div class="introduction">
                <p><?php echo $introductionthree; ?></p>
              </div>
            <?php }?> 
          </div>
        <?php } ?>
        <?php if( have_rows('three_column_repeater') ): ?>
          <?php while( have_rows('three_column_repeater') ): the_row(); ?>
            <div class="row gutters paddingbottom">
              <div class="col span_8">
                <?php the_sub_field('column_1'); ?>
              </div>     
              <div class="col span_8">
                <?php the_sub_field('column_2'); ?>
              </div>      
              <div class="col span_8">
                <?php the_sub_field('column_3'); ?>
              </div>      
            </div>
          <?php endwhile; ?>
        <?php endif; ?>         
      </div>
    </div>  


     <?php elseif(get_row_layout() == "four_columns_section"): // layout: two Columns ?>
    
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('padding_setting'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <?php if ('yes' == get_sub_field('use_titles_&_intro')) { ?>   
          <div class="row">
            <?php if( $title = get_sub_field('title') ){ ?>
              <h3><?php echo $title; ?></h3>
            <?php }?>  
            <?php if( $introductionfour = get_sub_field('introduction') ){ ?>
              <div class="introduction">
                <p><?php echo $introductionfour; ?></p>
              </div>
            <?php }?>  
          </div>
        <?php } ?>
        <?php if( have_rows('four_column_repeater') ): ?>
          <?php while( have_rows('four_column_repeater') ): the_row(); ?>
            <div class="row gutters paddingbottom">
              <div class="col span_6">
                <?php the_sub_field('column_1'); ?>
              </div>     
              <div class="col span_6">
                <?php the_sub_field('column_2'); ?>
              </div>      
              <div class="col span_6">
                <?php the_sub_field('column_3'); ?>
              </div>    
              <div class="col span_6">
                <?php the_sub_field('column_4'); ?>
              </div>      
            </div>
          <?php endwhile; ?>
        <?php endif; ?>         
      </div>
    </div>  


  <?php endif; ?><!-- end flexible sections -->
<?php endwhile; ?><!-- end flexible fields -->