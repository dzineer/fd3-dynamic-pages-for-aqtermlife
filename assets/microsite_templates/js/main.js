

$(function() {
	// Cache the window object
	var $window = $(window);

	$parallax = (function(w){

		function createParallaxEffect(elType, maxScroll) {

			// Parallax background effect
			$(elType+'[data-type="background"]').each(function() {
				var $bgObj = $(this); // assigning the object

				$(w).scroll(function() {
					// scroll the background at var speed
					// the yPos is a negative value because we are 
					// scrolling it up!

					var yPos = -(w.scrollTop() / $bgObj.data('speed'));
					// put together our finial background position
					
					console.log(yPos);
					
					if(yPos > maxScroll) {
						yPos = maxScroll;	
					}
					
					console.log(yPos);					
					
					var coords = '50% ' + yPos + 'px';

					// move the background
					$bgObj.css( { backgroundPosition: coords } );
				});
			});

		}

		return { create: createParallaxEffect };

	}($window));

	$parallax.create('div', -1200);

});