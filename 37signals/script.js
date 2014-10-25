$(document).ready(function(){
	$("#basecamp").hover(function () {
	 $("#headers").toggleClass('invisible');		
		});
	$('#basecamp').hover(function() {
		$('#basecampheader').toggleClass('invisible');
		});
	$('#basecamp').mouseenter(function() {
		$('.basecamparrow').show();
		});
	$('#basecamp').mouseleave(function () {
			$('.basecamparrow').hide();
		});
	
$("#highrise").hover(function () {
	 $("#headers").toggleClass('invisible');		
		});
	$('#highrise').hover(function() {
		$('#highriseheader').toggleClass('invisible');
		});
	$('#highrise').mouseenter(function() {
		$('.highrisearrow').show();
		});
	$('#highrise').mouseleave(function () {
			$('.highrisearrow').hide();
		});

$("#campfire").hover(function (){
	$('#headers').toggleClass('invisible');
		});
	$('#campfire').hover(function() {
		$('#campfireheader').toggleClass('invisible');
		});
	$('#campfire').mouseenter(function (){
		$('.campfirearrow').show();
		});	
	 $('#campfire').mouseleave(function () {
	 	$('.campfirearrow').hide();
		});	 	

	});