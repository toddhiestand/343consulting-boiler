
	<div class="wide-container baseline">
	  <div class="container">
	    <div class="row gutters">
	      <div class="col span_12 centered"> 
	        <p>&copy; <?php echo date("Y") ?> <?php bloginfo( 'name' ); ?></p>
	     	</div>
	    </div>
	    <div class="row">
	      <p class="by">Site by <a target="_blank" href="https://www.343consulting.com"><img src="<?php bloginfo('template_directory'); ?>/images/343.png" alt="343 Consulting" /></a></p>
	    </div>
	  </div>
	</div>

</div><!-- end id container -->

</body>
</html>

<?php wp_footer();?>

 <script type="text/javascript">

		$('.hero-carousel').flickity({
		  // options
		  cellAlign: 'left',
		  wrapAround: true,
		  pageDots: false,
		  contain: true
		});

		$('.main-carousel').flickity({
		  // options
		  cellAlign: 'left',
		  wrapAround: true,
		  adaptiveHeight: false,
		  pageDots: false,
		  groupCells: true,
			groupCells: 2,
			groupCells: '80%',
		  contain: true
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
		
	$('#scrolltosection1').click(function (e) {
		e.preventDefault();
		scrollToElement('#scrollsection1');
	});

	$('#scrolltosection2').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection2');
		});

	$('#scrolltosection3').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection3');
		});

	$('#scrolltosection4').click(function (e) {
			e.preventDefault();
			scrollToElement('#scrollsection4');
		});

	
});

      

</script>

