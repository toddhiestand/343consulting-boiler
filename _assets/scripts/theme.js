  $( function() {
    $( "#accordion" ).accordion({
      heightStyle: "content",
      collapsible: true,
      active: false
    });
  } );

		$('.main-carousel').flickity({
		  // lets set some options
		  cellAlign: 'left', // align the cells especially the first one
		  adaptiveHeight: true, // adapative height to adjust to size of different slides
		  pageDots: true, // do we want the dots? 
		  prevNextButtons: true, // do we want the buttons?
		  draggable: true, // make it draggable, great for mobile 
		  wrapAround: true, // wrap it around 
		  groupCells: 1, // group the cells and by how many
			autoPlay: 1500 // make this false to turn this off
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

		$('#scrolltosection5').click(function (e) {
				e.preventDefault();
				scrollToElement('#scrollsection5');
			});

		$('#scrolltosection6').click(function (e) {
				e.preventDefault();
				scrollToElement('#scrollsection6');
			});

		$('#scrolltosection7').click(function (e) {
				e.preventDefault();
				scrollToElement('#scrollsection7');
			});

		
	});