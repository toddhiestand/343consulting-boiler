
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




	
		 // Scroll to Div for the home page

function scrollToElement(selector, time, verticalOffset) {
	time = typeof(time) != 'undefined' ? time : 500;
	verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : -60;
	element = $(selector);
	offset = element.offset();
	offsetTop = offset.top + verticalOffset;
	$('html, body').animate({
		scrollTop: offsetTop
	}, time);		
}
			
$(document).ready(function() {
		
	$('#scroll-to-scrollsection1').click(function (e) {
		e.preventDefault();
		scrollToElement('#scrollsection1');
	});

	$('#scroll-to-scrollsection2').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection2');
		});

	$('#scroll-to-scrollsection3').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection3');
		});

	$('#scroll-to-scrollsection4').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection4');
		});

	$('#scroll-to-scrollsection5').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection5');
		});

	$('#scroll-to-scrollsection6').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection6');
		});

	$('#scroll-to-scrollsection7').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection7');
		});

	
});

</script>

<?php wp_footer();?>