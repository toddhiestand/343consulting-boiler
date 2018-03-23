
<div class="wide-container content-container dropdown-container">
	<div class="container">		
		<div class="row paddingon gutters">
			<div class="col span_6 sorter">
				 <h3>By Preacher</h3>

        <?php function click_taxonomy_dropdown($taxonomy) { ?>
          <form action="/" method="get">
          <select name="cat" id="cat" class="postform">
          <option value="-1">Choose one...</option>
          <?php
          $terms = get_terms($taxonomy);
          foreach ($terms as $term) {
            printf( '<option class="level-0" value="%s">%s</option>', $term->slug, $term->name );
          }
          echo '</select></form>';
          ?>
        <?php } ?>
          
          <?php click_taxonomy_dropdown( 'preacher' ); ?>
          <script type="text/javascript"><!--
            var dropdown1 = document.getElementById("cat");
            function onCatChange() {
              if ( dropdown1.options[dropdown1.selectedIndex].value > '' ) {
                location.href = "<?php echo get_option('home'); ?>/sermons/preacher/"+dropdown1.options[dropdown1.selectedIndex].value;
              }
            }
          dropdown1.onchange = onCatChange;
          --></script>
			</div>

			<div class="col span_6 sorter">
			 <h3>By Topic</h3>
          
       <?php function click_taxonomy_dropdown_1($taxonomy) { ?>
          <form action="/" method="get">
          <select name="cat1" id="topic" class="postform">
          <option value="-1">Choose one...</option>
          <?php
          $terms = get_terms($taxonomy);
          foreach ($terms as $term) {
            printf( '<option class="level-0" value="%s">%s</option>', $term->slug, $term->name );
          }
          echo '</select></form>';
          ?>
        <?php } ?>
          
          <?php click_taxonomy_dropdown_1( 'topics' ); ?>
          <script type="text/javascript"><!--
            var dropdown = document.getElementById("topic");
            function onCat1Change() {
              if ( dropdown.options[dropdown.selectedIndex].value > '' ) {
                location.href = "<?php echo get_option('home'); ?>/sermons/topic/"+dropdown.options[dropdown.selectedIndex].value;
              }
            }
          dropdown.onchange = onCat1Change;
          --></script>
         
			</div>

      <div class="col span_6 sorter">
       <h3>By Book of Bible</h3>

        <?php function click_taxonomy_dropdown_2($taxonomy) { ?>
          <form action="/" method="get">
          <select name="cat2" id="passage" class="postform">
          <option value="-1">Choose one...</option>
          <?php
          $terms = get_terms($taxonomy);
          foreach ($terms as $term) {
            printf( '<option class="level-0" value="%s">%s</option>', $term->slug, $term->name );
          }
          echo '</select></form>';
          ?>
        <?php } ?>
          
          <?php click_taxonomy_dropdown_2( 'passage' ); ?>
          <script type="text/javascript"><!--
            var dropdown2 = document.getElementById("passage");
            function onCat2Change() {
              if ( dropdown2.options[dropdown2.selectedIndex].value > '' ) {
                location.href = "<?php echo get_option('home'); ?>/sermons/passage/"+dropdown2.options[dropdown2.selectedIndex].value;
              }
            }
          dropdown2.onchange = onCat2Change;
          --></script>
      </div>


      <div class="col span_6 sorter">
       <h3>By Series</h3>

        <?php function click_taxonomy_dropdown_3($taxonomy) { ?>
          <form action="/" method="get">
          <select name="cat3" id="series" class="postform">
          <option value="-1">Choose one...</option>
          <?php
          $terms = get_terms($taxonomy);
          foreach ($terms as $term) {
            printf( '<option class="level-0" value="%s">%s</option>', $term->slug, $term->name );
          }
          echo '</select></form>';
          ?>
        <?php } ?>
          
          <?php click_taxonomy_dropdown_3( 'series' ); ?>
          <script type="text/javascript"><!--
            var dropdown3 = document.getElementById("series");
            function onCat3Change() {
              if ( dropdown3.options[dropdown3.selectedIndex].value > '' ) {
                location.href = "<?php echo get_option('home'); ?>/sermons/series/"+dropdown3.options[dropdown3.selectedIndex].value;
              }
            }
          dropdown3.onchange = onCat3Change;
          --></script>
      </div>

		</div>
  </div>
</div>