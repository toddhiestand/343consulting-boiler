
    </div>
</div>

<div class="wide-container">
    <div class="container">
        <div class="row">
            <p class="smalltext">&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?></p>
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