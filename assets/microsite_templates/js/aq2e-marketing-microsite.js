// our javascript

var aq2eScript = {};
aq2eScript.template_directory_uri = '/wp-content/plugins/fd3-dynamic-pages/assets/microsite_templates';

function include(url) {
		var path = aq2eScript.template_directory_uri + '/js/' + url;
		document.write('<script src="' + path + '"></script>');
		return false;
}

include('bootstrap.min.js');
include('jquery.cookie.js');
include('superfish.js');
include('device.min.js');
include('aq-stick-top.js');
include('jquery.mousewheel.min.js');
include('jquery.mobilemenu.js');
include('jquery.ui.totop.js');

/* bootstrap */

/* panel */

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

//year script

var currentYear = (new Date).getFullYear();

jQuery(document).ready(function() {
		
		jQuery("#copyright-year").text( '1999 - ' + (new Date).getFullYear() );
		
		jQuery('#companyName').text('AgentQuote');
		
});

/*========================================================*/
/* DEVICE.JS
 ========================================================*/

/* Stick up menu
 ========================================================*/


jQuery(window).load(function() {
		if (jQuery('html').hasClass('desktop')) {
				jQuery('#stuck_container').TMStickUp({
				})
		}
});

/* DEVICE.JS AND SMOOTH SCROLLIG
 ========================================================*/


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

jQuery(function(){
		jQuery('.sf-menu').mobileMenu();
});

jQuery(function(){
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
						jQuery('.sf-menu li').each(function(){
								
								if(jQuery(">ul", this)[0]){
										jQuery(">a", this).toggle(
														function(){
																return false;
														},
														function(){
																window.location.href = jQuery(this).attr("href");
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