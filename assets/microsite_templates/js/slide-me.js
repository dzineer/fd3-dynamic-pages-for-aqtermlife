$(function() {

	var slider = $(".slidingDiv");
	var button = $(".click-me");

	var state = { opened: false, closed: true };
    var sliderObj = { closed: { width: 400, duration: 500 }, opened:{ width: 600, duration: 500 } };
	//slider.hide();

	button.on("click", function(e) {
		//slider.slideToggle();

	   var effect='slide';
	   var options = { direction: 'left' };
	   var duration = 500;

	   if(state.opened) {
	   	slider.animate( {width:sliderObj.closed.width}, sliderObj.closed.duration, function() {} );	
	   	state.opened = false;
	   	state.closed = true;
	   }
	   else if(state.closed) {
	   	slider.animate( {width:sliderObj.opened.width}, sliderObj.opened.duration, function() {} );	
	   	state.closed = false;
	   	state.opened = true;
	   }
   


	});

});



    