
    </div>
</div>

<div class="wide-container baseline">
    <div class="container">
        <div class="row gutters">
          <div class="col span_12"> 
            <p>&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?></p>
         	</div>
         	<div class="col span_12 by343"> 
            <p class="by">Site by <a target="_blank" href="https://www.343consulting.com">343 Consulting</a></p>
          </div>
        </div>
    </div>
</div>
   
</body>

</html>

<script>

    // Clear the input boxes when clicked

	jQuery(document).ready(function() {

		jQuery.fn.cleardefault = function() {
		return this.focus(function() {
		if( this.value == this.defaultValue ) {
		this.value = "";
		}
		}).blur(function() {
		if( !this.value.length ) {
		this.value = this.defaultValue;
		}
		});
		};
		jQuery(".input_clear input, .input_clear textarea").cleardefault();

	});


</script>

<?php wp_footer();?>