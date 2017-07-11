// our javascript

var aq2eScript = {};
aq2eScript.template_directory_uri = '/wp-content/plugins/fd3-dynamic-pages/assets/microsite_templates';

function include(url) {
		var path = aq2eScript.template_directory_uri + '/js/' + url;
		document.write('<script src="' + path + '"></script>');
		return false;
}

/* bootstrap */
include('bootstrap.min.js');

/* fd3 parallax */
include('fd3-parallax.min.js');

include('jquery.carouFredSel-6.0.4-packed.js');

/* panel */
include('jquery.cookie.js');

jQuery(window).scroll(
				function(){
						if (
										jQuery(this).scrollTop() > 0) {
								jQuery("#advanced").css({position:'fixed'});
						}else{
								jQuery("#advanced").css({position:'relative'});
						}
				}
);

jQuery(function() {
		$slider = (function(){
				
				function createSliderEffect(parent, children, rateProperty, imageProperty) {
						
						var $parent = jQuery('.'+parent);
						var rate = $parent.data(rateProperty);
						var position = 0;
						var imgPaths = new Array();
						
						rate = 6000;
						
						var el = jQuery('.banner-image');
						
						jQuery(el).each(function() {
								var $imgObj = jQuery(this); // assigning the object
								imgPaths.push($imgObj);
						});
						
						var updateImage = function() {
								
								if( position == 0 ) {
										
										imgPaths[position].toggleClass("opaque");
										position = position + 1;
										
										setTimeout(updateImage, rate);
								}
								else if( position < imgPaths.length ) {
										
										imgPaths[position-1].toggleClass("opaque");
										imgPaths[position].toggleClass("opaque");
										position = position + 1;
										
										setTimeout(updateImage, rate);
								}
								else {
										
										imgPaths[position-1].toggleClass("opaque");
										position = 0;
										imgPaths[position].toggleClass("opaque");
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

include('jquery.mobilemenu.js');
include('jquery.ui.totop.js');

$(function () {
		$().UItoTop({ easingType: 'easeOutQuart' });
});

jQuery(function(){
		jQuery('.sf-menu').mobileMenu();
});

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