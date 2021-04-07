<?php $i = 0; ?><!-- add a number to each section to make calling them easier --> 

<?php while(the_flexible_field("page_content")): ?>
  
<?php $i++; ?>

 <?php if(get_row_layout() == "multi-column_content"): // layout: Main Content with custom columns and widths ?> 
    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('custom_class'); ?> <?php the_sub_field('background_color'); ?> <?php the_sub_field('padding_setting'); ?>">
      <div class="container <?php the_sub_field('container_width');?>">
      
        <?php if ('yes' == get_sub_field('add_title')) { ?>   
              <div class="row title">
                <div class="col-sm-12">
                  <h3 class="<?php the_sub_field('heading_type'); ?>"><?php the_sub_field('the_title'); ?></h3>
                </div>
              </div>
        <?php } ?>

        <?php if ('yes' == get_sub_field('add_intro')) { ?>   
              <div class="row intro">
                <div class="col-sm-12">
                  <?php the_sub_field('intro'); ?>
                </div>
              </div>
        <?php } ?>

        <?php if(get_sub_field('columns') == "2") { ?>
          <div class="row gutters">
            <?php if(get_sub_field('layout_type_2_columns') == "fiftyfifty") { ?>
              <div class="col-lg-6 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-6 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_2_columns') == "fourtysixty") { ?>
              <div class="col-lg-4 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-8 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_2_columns') == "sixtyfourty") { ?>
              <div class="col-lg-8 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-4 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
            <?php } ?>

             <?php if(get_sub_field('layout_type_2_columns') == "thirtyseventy") { ?>
              <div class="col-lg-2 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-10 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
            <?php } ?>

             <?php if(get_sub_field('layout_type_2_columns') == "seventythirty") { ?>
              <div class="col-lg-10 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-6 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
            <?php } ?>
          </div>

        <?php } ?>

        <?php if(get_sub_field('columns') == "3") { ?>
          <div class="row gutters">
            <?php if(get_sub_field('layout_type_3_columns') == "even") { ?>  
              <div class="col-lg-4 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-4 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
              <div class="col-lg-4 col-xs-12">
                <?php the_sub_field('column_3'); ?>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_3_columns') == "bigfirst") { ?>  
              <div class="col-lg-6 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-3 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
              <div class="col-lg-3 col-xs-12">
                <?php the_sub_field('column_3'); ?>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_3_columns') == "bigmiddle") { ?>  
              <div class="col-lg-3 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-6 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
              <div class="col-lg-3 col-xs-12">
                <?php the_sub_field('column_3'); ?>
              </div>
            <?php } ?>

            <?php if(get_sub_field('layout_type_3_columns') == "biglast") { ?>  
              <div class="col-lg-3 col-xs-12">
                <?php the_sub_field('column_1'); ?>
              </div>
              <div class="col-lg-3 col-xs-12">
                <?php the_sub_field('column_2'); ?>
              </div>
              <div class="col-lg-6 col-xs-12">
                <?php the_sub_field('column_3'); ?>
              </div>
            <?php } ?>
          </div>
        <?php } ?>

        <?php if(get_sub_field('columns') == "4") { ?>
          <div class="row gutters">
            <div class="col-xs-12 col-lg-3">
              <?php the_sub_field('column_1'); ?>
            </div>
            <div class="col-xs-12 col-lg-3">
              <?php the_sub_field('column_2'); ?>
            </div>
            <div class="col-xs-12 col-lg-3">
              <?php the_sub_field('column_3'); ?>
            </div>
            <div class="col-xs-12 col-lg-3">
              <?php the_sub_field('column_4'); ?>
            </div>
          </div>
        <?php } ?>    
      </div>
    </div>

    <?php elseif(get_row_layout() == "two_column_flexbox"): // layout: Large Quote with Background Image ?>

    <div id="<?php echo "scrollsection{$i}";?>" class="<?php the_sub_field('custom_class'); ?> wide-container content-section <?php the_sub_field('margin_setting'); ?>">
        <div class="row blockrow <?php the_sub_field('image_position');?>">
          <?php 
            $imagecolumn = wp_get_attachment_image_src(get_sub_field('image'), ''); 
          ?>  

          <div class="blockimg col-xs-12 col-lg-6 "  style="background-image: url(<?php echo $imagecolumn[0]; ?>);">
            <!-- place holder for image-->
          </div>  

          <div class="imageblock col-xs-12 col-lg-6">
            <div class="imageblockcontent">
               <p><?php the_sub_field('text_column');?></p>
            </div>
          </div>
      </div> 
    </div>

    <?php elseif(get_row_layout() == "basic_slider"): // layout: Large Quote with Background Image ?>

    <div id="<?php echo "scrollsection{$i}";?>" class="<?php the_sub_field('custom_class'); ?> wide-container content-section <?php the_sub_field('padding_setting'); ?> <?php the_sub_field('background_color'); ?>">
      <div class="container <?php the_sub_field('container_width');?>">
      
        <?php if ('yes' == get_sub_field('add_title')) { ?>   
              <div class="row title">
                <div class="col-sm-12">
                  <h3 class="<?php the_sub_field('heading_type'); ?>"><?php the_sub_field('the_title'); ?></h3>
                </div>
              </div>
        <?php } ?>

        <?php if ('yes' == get_sub_field('add_intro')) { ?>   
            <div class="row intro">
              <div class="col-sm-12">
                <?php the_sub_field('intro'); ?>
              </div>
            </div>
          
        <?php } ?>
        
          <div class="row">
            <div class="col-xs-12">
             <?php if(get_sub_field('slides')): ?>
              <div class="main-carousel" data-flickity>
              <?php while(has_sub_field('slides')): ?>
                <div class="carousel-cell">
                  <?php the_sub_field('slide_content');?>
                </div>
              <?php endwhile; ?>
              </div>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>

    <?php elseif(get_row_layout() == "accordion_content"): // layout: Large Quote with Background Image ?>

    <div id="<?php echo "scrollsection{$i}";?>" class="wide-container content-section <?php the_sub_field('padding_setting'); ?> <?php the_sub_field('background_color'); ?>">
      <div class="container <?php the_sub_field('container_width');?>">
      
        <?php if ('yes' == get_sub_field('add_title')) { ?>   
          <div class="row title">
            <div class="col-sm-12">
              <h3 class="<?php the_sub_field('heading_type'); ?>"><?php the_sub_field('the_title'); ?></h3>
            </div>
          </div>
        <?php } ?>

        <?php if ('yes' == get_sub_field('add_intro')) { ?>   
          <div class="row intro">
            <div class="col-sm-12">
              <?php the_sub_field('intro'); ?>
            </div>
          </div>          
        <?php } ?>
        
        <?php if(get_sub_field('accordion')): ?>
          <div id="accordion">
          <?php while(has_sub_field('accordion')): ?>
            <h3><?php the_sub_field('title');?></h3>
            <div class="accordion-section">
              <?php the_sub_field('content');?>
            </div>
          <?php endwhile; ?>
          </div>
        <?php endif; ?>
        </div>
      </div>

    <?php elseif(get_row_layout() == "single_column_content"): // layout: Large Quote with Background Image ?>

    <div id="<?php echo "scrollsection{$i}";?>" class="<?php the_sub_field('custom_class'); ?> wide-container content-section <?php the_sub_field('padding_setting'); ?> <?php the_sub_field('background_color'); ?>">
      <div class="container <?php the_sub_field('container_width');?>">
      
        <?php if ('yes' == get_sub_field('add_title')) { ?>   
              <div class="row title">
                <div class="col-sm-12">
                  <h3 class="<?php the_sub_field('heading_type'); ?>"><?php the_sub_field('the_title'); ?></h3>
                </div>
              </div>
        <?php } ?>

        <?php if ('yes' == get_sub_field('add_intro')) { ?>   
            <div class="row intro">
              <div class="col-sm-12">
                <?php the_sub_field('intro'); ?>
              </div>
            </div>
          
        <?php } ?>
        
          <div class="row">
            <div class="col-sm-12">
              <?php the_sub_field('content'); ?>
            </div>
          </div>

      </div>
    </div>

  <?php endif; ?><!-- end flexible sections -->
<?php endwhile; ?><!-- end flexible fields -->