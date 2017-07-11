/*
Copyright (c) 2012, Frank Decker. All Rights Reserved.
Version: 1.0.0
File: delano-tqe-secure-banner-min-obfus-1.0.0.js

Notes:

*/

window.jq = null;


jQuery(document).ready(function($) {
// Code that uses jQuery's $ can follow here.

	window.linkee = '';
	window.dialog = '';

	window.jq = $;
	
	if(typeof DELANO == "undefined" || !DELANO){ var DELANO = {}; }
	if(typeof DELANO.AQTQE == "undefined" || !DELANO.AQTQE ) { DELANO.AQTQE = {} ; }
	if(typeof DELANO.AQTQE.TQE == "undefined" || !DELANO.AQTQE.TQE ) { DELANO.AQTQE.TQE = {} ; }

	DELANO.Utils = {
		CHECKED: 1,
		NOT_CHECKED: 0,

		PackageData: function(dataToPackage) {
			var work = dataToPackage;
			var adj = work.length % 3;
			if (adj != 0)
			{
			  for (var indx = 0; indx < (3 - adj); indx++) { work = work + ' '; }
			}
			var tab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
			var out = "", c1, c2, c3, e1, e2, e3, e4;
			for (var i = 0; i < work.length; )
			{
			  c1 = work.charCodeAt(i++);
			  c2 = work.charCodeAt(i++);
			  c3 = work.charCodeAt(i++);
			  e1 = c1 >> 2;
			  e2 = ((c1 & 3) << 4) + (c2 >> 4);
			  e3 = ((c2 & 15) << 2) + (c3 >> 6);
			  e4 = c3 & 63;
			  if (isNaN(c2)) { e3 = e4 = 64; }
			  else if (isNaN(c3)) { e4 = 64; }
			  out += tab.charAt(e1) + tab.charAt(e2) + tab.charAt(e3) + tab.charAt(e4);
			}
			return out;
		},
		CleanPhoneNumber: function(n) {
			n = n.replace('(','');
			n = n.replace(')','');	
			n = n.replace('-','');	
			n = n.replace(' ','');	
			
			return n;
		}
	};

	DELANO.AQTQE.TQE.BANNER = {
		CHECKED: 1,
		NOT_CHECKED: 0,
		errorCount: null,
		errorStr: null,
		messages: [],
		seperator: "_",
		jsonObj: null,
		data: null,
		dataArr: null,
		domain: '127.0.0.1',
		scriptPath: '/tqe/update',
		URIType: 'https://',
		formType: 'POST',
		subscriberId: null,
		reaction: null,
		me: null,

		init: function(formId) {
			this.formId= $('#'+formId);
			$("#aq2e_send").bind("click", $.proxy(this.buttonHandler, this));
		},
		buttonHandler: function(e) {
			var butId = e.currentTarget.id;
			switch(butId) {
				case 'aq2e_send':
				if(DELANO.AQTQE.TQE.BANNER.validate()){
					DELANO.AQTQE.TQE.BANNER.secureDataJSONP();
					return false;
				}
				break;

				case 'aq2e_reset':
				DELANO.AQTQE.TQE.BANNER.formReset();
				return false;
				break;
			}

			return false;
		},
		secureData: function() {
			this.packagedData = DELANO.Utils.PackageData(this.formData);

			this.scriptPath = 'https://banner.aq2e.com/utils/enc/';
			this.jsonObj = { 'data': this.packagedData, 'URI': this.scriptPath };
			this.data = JSON.stringify(this.jsonObj);
			this.dataArr = { json:this.data };
			var compact = this.scriptPath + this.packagedData;
			var $parentClass = $(this);
			$.post(compact, "", $.proxy(this.send, this), "text");
			//$.ajax(sendObj);
		},
		/*
		secureDataJSONP: function() {
			this.packagedData = DELANO.Utils.PackageData(this.formData);
			this.scriptPath = 'http://banner.aq2e.com/utils/callback';
			var compact = this.scriptPath + this.packagedData;
			var surl = this.scriptPath;

			$.ajax({
				url: surl,
				data: {enc: this.packagedData},
				dataType: "jsonp",
				jsonp : "callback",
				jsonpCallback: "send"
				}).error(this.errors);		
		},	*/
		
		secureDataJSONP: function() {
			//just Send Out	and do redirecting in PHP
			this.packagedData = DELANO.Utils.PackageData(this.formData);
			this.scriptPath = 'https://banner.aq2e.com/t/p/';
			var compact = this.scriptPath + this.packagedData;
			var surl = this.scriptPath;							
			window.location = compact;						
		},			
		
		errors: function(XHR, textStatus, errorThrown){
				alert("ERREUR: " + textStatus);
				alert("ERREUR: " + errorThrown);
		},	
		send: function(rtndata) {
			this.scriptPath = 'https://banner.aq2e.com/tqe/process';
			this.packagedData = rtndata.message;
			window.location = this.scriptPath + '/' + this.packagedData;
			return;
			//$("#send").attr("href", this.scriptPath + '/' + this.packagedData);

			window.linkee = $("#send");

			window.dialog = $('<div id="insWindow" style="width:100%;height:100%"><iframe id="quotePage" height="100%" width="100%" frameborder="0" src=""></iframe></div')
					.dialog({
						autoOpen: false,
						title: window.linkee.attr('title'),
						width: 1000,
						height: 1000,
						center: true
					});		

			if($.browser.msie)  {
				window.location = this.scriptPath + '/' + this.packagedData;
			} 
			else { 
				window.dialog.dialog('open');
				$('#quotePage').attr("src", $("#send").attr("href"));
				
				var wWidth = $(window).width();
				var dWidth = wWidth * 0.9; //this will make the dialog 80% of the
			
				$('#insWindow').dialog('option', 'width', dWidth);
				$('#insWindow').dialog( 'option', 'position', 'center' );
			}

			return false;	
		},
		sendPJSON: function() {
			var surl =  "https://banner.aq2e.com/utils/responseJSONP";
			var id = 'test id';

	//$.post(compact, "", $.proxy(this.send, this), "text");
			$.ajax({
				url: surl,
				data: {id: id},
				dataType: "jsonp",
				jsonp : "callback",
				jsonpCallback: "jsonpcallback"
				});
		},
		selectedIndex: function(s) {
			  var ind = $('#'+s).prop('selectedIndex');
			  return ind;
		},
		validate: function() {

			this.formData = '';
			this.formMode = '2';

			this.formData += '|'+$('#'+'haqno').val();

			if (this.selectedIndex('aq2e_coverage') == 0 && $('#'+'aq2e_coverage').val() == "-1")
			{
				alert('Please select a coverage amount');
				$('#'+'aq2e_coverage').focus();
				return false;
			}
			this.formData += '|'+$('#'+'aq2e_coverage').val();

			if (this.selectedIndex('aq2e_term') == 0 && $('#'+'aq2e_term').val() == "-1")
			{
				alert('Please select a term');
				$('#'+'aq2e_term').focus();
				return false;
			}
			this.formData += '|'+$('#'+'aq2e_term').val();
			
			// note date is already string, converting to another date format
			
			if (this.selectedIndex('aq2e_month') == 0 && $('#'+'aq2e_month').val() == "-1")
			{
				alert('Please select a month');
				$('#'+'aq2e_month').focus();
				return false;
			}			
			
			this.formData += '|'+$( "#aq2e_month" ).val(); // mm

			if (this.selectedIndex('aq2e_day') == 0 && $('#'+'aq2e_day').val() == "-1")
			{
				alert('Please select a day');
				$('#'+'aq2e_day').focus();
				return false;
			}	

			this.formData += '|'+$( "#aq2e_day" ).val(); // dd
			
			if (this.selectedIndex('aq2e_year') == 0 && $('#'+'aq2e_year').val() == "-1")
			{
				alert('Please select a year');
				$('#'+'aq2e_year').focus();
				return false;
			}	
						
			this.formData += '|'+$( "#aq2e_year" ).val(); // yy

			if (this.selectedIndex('aq2e_state') == 0)
			{
				alert('Please select a state');
				$('#'+'aq2e_state').focus();
				return false;
			}
			
			this.formData += '|'+$('#'+'aq2e_state').val();
			
			if($('#'+'aq2e_period').val() == "-1" ) {
				alert('Please select a premium period');
				$('#'+'aq2e_period').focus();
				return false;				
			}
			
			this.formData += '|'+$('#'+'aq2e_period').val();		

/*
			if (this.selectedIndex('aq2e_gender') == 0 && $('#'+'aq2e_gender').val() == "-1")
			{
				alert('Please select a gender');
				$('#'+'aq2e_gender').focus();
				return false;
			}				
*/			
			this.formMode = 'z';
//			this.formData += '|'+ $('#'+'aq2e_gender').val();			
			this.formData += '|'+ $("input:radio[name ='gender']:checked").val();
/*			
			if (this.selectedIndex('aq2e_smoker') == 0 && $('#'+'aq2e_smoker').val() == "-1")
			{
				alert('Please select specify if you are a smoker');
				$('#'+'aq2e_smoker').focus();
				return false;
			}					
			
			if($('#'+'aq2e_smoker').val() == 0) {
				this.formData += '|'+ 'N';			
			}
			else {
				this.formData += '|'+ 'Y';			
			}
*/			
			this.formData += '|'+ $("input:radio[name ='tobacco']:checked").val();

			if ($('#aq2e_fname').length > 0) {
				
				if ($('#aq2e_fname').length != 0) {
					if($('#'+'aq2e_fname').val() == '' || $('#'+'aq2e_fname').val() == 'First name') {
						alert('Please specify your first name');
						$('#'+'aq2e_fname').focus();	
						return false;				
					}
					this.formData += '|'+$('#'+'aq2e_fname').val();
					this.formMode = 'z';
				}
				
				if ($('#aq2e_lname').length != 0) {
					if($('#'+'aq2e_lname').val() == '' || $('#'+'aq2e_lname').val() == 'Last name') {
						alert('Please specify your last name');
						$('#'+'aq2e_lname').focus();	
						return false;					
					}
					this.formMode = 'z';
					this.formData += '|'+$('#'+'aq2e_lname').val();
				}
				
				aaaa = $('#aq2e_phone').length;
				
				if ($('#aq2e_phone').length != 0) { // check if phone1,phone2,phone3 exists
					
					var p1 = $('#aq2e_phone').val();
					
					var digits = p1.length;
					
					if(digits < 10) {
						alert('Please specify a valid phone number');
						$('#'+'aq2e_phone').focus();
						return false;					
					}
					
					this.formMode = 'z';
					
					p1 = DELANO.Utils.CleanPhoneNumber(p1);
					this.formData += '|' + p1;
				}
				else {
					alert('Please specify a phone number');
					$('#'+'aq2e_phone').focus();
					return false;					
				}
	
				if ($('#aq2e_email').length != 0) {
					if($('#'+'aq2e_email').val() == '' || $('#'+'aq2e_email').val() == 'Email address') {
						alert('Please specify your email address');
						$('#'+'aq2e_email').focus();	
						return false;				
					}
					this.formMode = 'zm';
					this.formData += '|'+$('#'+'aq2e_email').val();
				}
			}
			else {
				this.formMode = '2M';	
			}

			this.formData += '|'+ window.location.href;

			this.formData = this.formMode + this.formData;
			return true;
		},
		formReset: function() {
			$(this.formId).find(':input').each(function(){
				var type = this.type, tag = this.tagName.toLowerCase();
				if (type == 'text' || type == 'password' || tag == 'textarea')
					this.value = '';
				else if (tag == 'select')
					this.selectedIndex = 0;
			});
		}
	};
	
	DELANO.AQTQE.TQE.BANNER.init('aq2e_quoteForm');
	
 // Handler for .ready() called.
	
	//vall = $.datepicker.formatDate('MM dd, yy',$("#dateField").datepicker( 'getDate' ));
	//$("#dateField").val(vall);
	
	// Named callback function from the ajax call when jsonpbtn2 clicked
	function jsonpcallback(rtndata) { 
		// Get the id from the returned JSON string and use it to reference the target jQuery object.
		var myid = "#"+rtndata.message;
		$(myid).feedback(rtndata.message, {duration: 4000, above: true});

	}	
});

function send(rtndata) {
	(window.jq)("body").send(rtndata);
//	(window.jq)("#newWindowTrick").attr("target", "_blank");
//	var newURL = (window.jq)("#newWindowTrick").attr("href");
//	newURL += rtndata.message;
//	(window.jq)("#newWindowTrick").send();
/*
	var lic = (window.jq)("#delanoLoader").attr("license");
	
	if(lic == "246e1-af2c2-6d7ce-80319-59cac") {
		myPopup = window.open('http://banner.aq2e.com/tqe/process/'+rtndata.message,'_blank');
		if (!myPopup)
            alert("You must enable pop-up to generate a quote.");
	}
	else {
		(window.jq)("body").send(rtndata);
	}
	*/
}

String.prototype.trim = function() {
	return this.replace(/^\s+|\s+$/,"");
}
String.prototype.ltrim = function() {
	return this.replace(/^\s+/,"");
}
String.prototype.rtrim = function() {
	return this.replace(/\s+$/,"");
}