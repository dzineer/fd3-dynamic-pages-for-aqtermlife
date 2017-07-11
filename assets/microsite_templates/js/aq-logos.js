slider = (function(w){

  function createSliderEffect(parent, children, rateProperty, imageProperty) {

      var $parent = $('.'+parent);
      var $rate = $parent.data(rateProperty);
      var $handler;
      var position = 0;
      var maxSize = 0;
      var imgPaths = new Array();

      rate = 6000;

      var el = '.' + parent + ' ' + '.' + children + '[data-' + imageProperty + '="image"]';

      $(el).each(function() {
        var $imgObj = $(this); // assigning the object
        imgPaths.push($imgObj.data(children));    
      });

      var updateImage = function() {

        if(position < imgPaths.length) {

          $parent.css( { background: 'url('+imgPaths[position]+')', backgroundSize: 'cover' } );
          position = position + 1;

          setTimeout(updateImage, rate);
        }
        else {

          position = 0;
          $parent.css( { background: 'url('+imgPaths[position]+')', backgroundSize: 'cover' } );
          position = 1;
          
          setTimeout(updateImage, rate);
        }
                    
      };

      updateImage();
  }

  return { create: createSliderEffect };

})( $(window) );