//----Include-Function----
function include(url){ 
  document.write('<script src="js/'+ url + '"></script>'); 
  return false ;
}

/* bootstrap */
include('bootstrap.min.js');

/* fd3 parallax */
include('fd3-parallax.min.js');

include('jquery.carouFredSel-6.0.4-packed.js');

/* panel */
include('jquery.cookie.js');

$(window).scroll(
    function(){
        if (
            $(this).scrollTop() > 0) {
                $("#advanced").css({position:'fixed'});
            }else{
                $("#advanced").css({position:'relative'});
            }
        }
);  

$(function() {
  $slider = (function(){

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

  }());

  $slider.create('header-banner', 'image', 'rate', 'banner');  

});

$(function(){
    var
        strCookies1 = $.cookie('panel1'),
        isAnimate = false,
        isOpen = false;

    if(strCookies1==null){
        $.cookie('panel1', 'closed');
        strCookies1 = $.cookie('panel1');
        isOpen = false;
    }

    if(strCookies1=='opened'){
        $("#advanced").css({marginTop:'0px'}).removeClass('closed');
        isOpen = true;
        $('#stuck_container').trigger('rePosition', 50); //for sticky menu
    }else{
        $("#advanced").css({marginTop:'-71px'}).addClass('closed');
        isOpen = false;
        $('#stuck_container').trigger('rePosition', 0); //for sticky menu
    }

    $("#advanced .trigger").click(
        function(){
            if(!isOpen){
                $(this).find('strong').animate({opacity:0}).parent().parent('#advanced').removeClass('closed').animate({marginTop:'0px'}, 300);
                $.cookie('panel1','opened');
                strCookies1=$.cookie('panel1');

                isOpen = true;
                $('#stuck_container').trigger('rePosition', 50);
            }else{
                $(this).find('strong').animate({opacity:1}).parent().parent('#advanced').addClass('closed').animate({marginTop:'-50px'}, 300)
                $.cookie('panel1','closed');
                strCookies1=$.cookie('panel1');
                
                isOpen = false;
                $('#stuck_container').trigger('rePosition', 0); //for sticky menu
            }
        }
    )
});
/*--------- end panel *------------*/

//year sccript

var currentYear = (new Date).getFullYear();

$(document).ready(function() {

    $("#copyright-year").text( '1999 - ' + (new Date).getFullYear() );

    // Cache the window object

    parallax.create('div', '-500');

    /* sliding logos */

    var $c = $('#carousel'),
      $wWinddow = $(window);

    $c.carouFredSel({
      circular: true,            // Determines whether the carousel should be circular. 
      infinite: true,    
      align: false,
      items: 23,
      scroll: {
        items: 1,
        duration: 2000,
        timeoutDuration: 0,
        easing: 'linear'
        /* pauseOnHover: 'immediate' */
      }
    });

    $('#companyName').text('AgentQuote');

});

/*========================================================*/
/* DEVICE.JS
========================================================*/
include('device.min.js');

/* Stick up menu
========================================================*/
include('aq-stick-top.js');

$(window).load(function() { 
  if ($('html').hasClass('desktop')) {
      $('#stuck_container').TMStickUp({
      })
  }  
});

include('superfish.js');
/* DEVICE.JS AND SMOOTH SCROLLIG
========================================================*/
include('jquery.mousewheel.min.js');

include('jquery.simplr.smoothscroll.min.js');

$(function () { 
  if ($('html').hasClass('desktop')) {
      $.srSmoothscroll({
        step:150,
        speed:800
      });
  }   
});
/* Stellar.js
========================================================*/
/*
include('stellar/jquery.stellar.js');
$(document).ready(function() { 
  if ($('html').hasClass('desktop')) {
      $.stellar({
        horizontalScrolling: false,
        verticalOffset:0
      });
      

  }  
});
*/

/*-----*/
include('jquery.ui.totop.js');
$(function () {   
  $().UItoTop({ easingType: 'easeOutQuart' });
});

jQuery(function(){
      jQuery('.sf-menu').mobileMenu();
    })
$(function(){
// IPad/IPhone
  var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
    ua = navigator.userAgent,
 
    gestureStart = function () {
        viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0";
    },
 
    scaleFix = function () {
      if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
        viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
        document.addEventListener("gesturestart", gestureStart, false);
      }
    };
scaleFix();

// Menu Android
if(window.orientation!=undefined){
 var regM = /ipod|ipad|iphone/gi,
  result = ua.match(regM)
 if(!result) {
  $('.sf-menu li').each(function(){

   if($(">ul", this)[0]){
    $(">a", this).toggle(
     function(){
      return false;
     },
     function(){
      window.location.href = $(this).attr("href");
     }
    );
   } 
  })
 }
}
});
/* ------ fi fixed position on Android -----*/
var ua=navigator.userAgent.toLocaleLowerCase(),
 regV = /ipod|ipad|iphone/gi,
 result = ua.match(regV),
 userScale="";
if(!result){
 userScale=",user-scalable=0"
}
document.write('<meta name="viewport" content="width=device-width,initial-scale=1.0'+userScale+'">')
/*--------------*/
/* SEARCH
========================================================*/
/*$(window).load(function(){
    var obj;
    if((obj = $('.js-search')).length > 0){
        $(obj).find('.toggle').click(function(){
            if($('.js-search').hasClass('active')){
                $('.js-search').removeClass('active');
            }else{
                $('.js-search').addClass('active');
            }
        });
    }
});*/