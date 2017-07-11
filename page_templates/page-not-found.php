
<!DOCTYPE html>
<html>
			<head>
						<meta name="viewport" content="width=device-width, initial-scale=1.0">
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
						<link rel="stylesheet" href="/wp-content/plugins/fd3-dynamic-pages/assets/css/page_templates/css-template-1.css">
			</head>
			<body>
						<div class="fd3-background" style="background-image: url(/wp-content/plugins/fd3-dynamic-pages/assets/images/page_templates/12355/bg_6.jpg);">
									<div class="fd3-capture-container" style="margin-top: 80px;">
												<div class="container">
															<div class="row">
																		<div class="col-md-12">
																					<div class="fd3-title-container">
																								<h2 class="title">
																											<p>Form Not Found!</p>
																								</h2>
																								<h3 class="sub-title">- Seems like you have entered a URL that does not exist here. - </h3>
																					
																					</div>
																		</div>
																		
																		
																		<div class="col-md-12">
																					
																					
																					<div class="row">
																								
																								<div class="col-md-12">
																											
																											<h3 class="contents-header" style="text-align: center;">Please visit Our Main Marketing Website: <a href="https://aq2emarketing.com" target="_blank">AQ2E Marketing Platform</a></h3>
																											<p class="contents-text" style="text-align: center;">The best Marketing Platform. Check us out Today</p>
																								
																								
																								
																								
																								
																								</div>
																					
																					
																					
																					</div>
																		
																		
																		</div>
															
															</div>
												</div>
									</div>
									
									<div class="footer">
												<div class="fd3-copyright">© Copyright 2017 AgentQuote.com, Inc. All rights reserved. </div><a class="fd3-powered-by" href="http://aq2emarketing.com">Powered by AQ2E Marketing Platform</a>
									</div>
						</div>
						
						
						<!-- Modal -->
						<div class="modal fade" id="alertDialog" role="dialog">
									<div class="modal-dialog modal-sm">
												<div class="modal-content">
															<div class="modal-header">
																		<button type="button" class="close" data-dismiss="modal">×</button>
																		<h4 class="modal-title">Modal Header</h4>
															</div>
															<div class="modal-body">
																		<p>This is a small modal.</p>
															</div>
															<div class="modal-footer">
																		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															</div>
												</div>
									</div>
						</div>
						
						<style>
									
									.form-control:focus {
												border-color: #5cb3fd;
									}
									
									.red-error  {
												border:1px solid #ff0000 !important;
									}
									
									form label {
												display: inline-block !important;
												margin-right: 4px !important;
									}
									
									form .error-message {
												color: #ff0000 !important;
												font-weight: bold !important;
												font-style: italic !important;
												float: right;
									}
									
									form .label-container {
												width: 100%;
												display: block;
									}
						
						</style>
						
						<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
						
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
						
						<script>
								
								$(function() {
										
										
										$( 'form#currentForm input' ).each( function() {
												var required = $(this).data('required');
												
												if( typeof required != 'undefined' && required == true ) {
														var placeholder = $(this).attr( 'placeholder' );
														var $requiredPlaceholder = placeholder + ' ( required ) ';
														$(this).attr( 'placeholder', $requiredPlaceholder );
												}
												
										});
										
										$( "body" ).on( "click", ".submit-btn", function() {
												
												var firstError = false;
												var ok = true;
												
												$( '.error-message' ).remove();
												
												$( 'input' ).removeClass( 'red-error' );
												
												$( 'form#currentForm input' ).each( function() {
														
														var required = $(this).data('required');
														var type = $(this).data('type');
														
														if( typeof required != 'undefined' && required == true && typeof type != 'undefined' ) {
																
																if( $(this).val() == '' ) {
																		
																		$(this).addClass( 'red-error' );
																		var $label = $("label[for='"+this.id+"']");
																		var errorText = '( ' + $(this).data('error') + ' )';
																		var $errorMsg = $( '<span>', { class: 'error-message' } );
																		
																		$errorMsg.html( errorText );
																		$errorMsg.insertAfter( $label );
																		
																		if( ! firstError ) {
																				$(this).focus();
																				firstError = true;
																				ok = false;
																		}
																}
																
														}
														
												});
												
												if( ok ) {
														$('#currentForm').submit();
												}
												
												//  $( '#currentForm' ).submit();
										});
								});
						
						</script>
			
			
			
			</body></html>