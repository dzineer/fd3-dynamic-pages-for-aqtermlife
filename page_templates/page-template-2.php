<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $cssTemplate ?>">
			 <script src="https://use.fontawesome.com/cc5696e6ab.js"></script>
</head>
<body>
<div class="fd3-background" style="background-image: url(<?= FD3_DYNAMIC_PAGES_PLUGIN_URI . $page_details['page']['main_bg'] ?>);">
    <div class="fd3-capture-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fd3-title-container">
                        <h2 class="title">
                            <p><?= $page_details['page']['main_header'] ?></p>
                        </h2>
                        <h3 class="sub-title"><?= $page_details['page']['main_sub_header'] ?></h3>
                        <h3 class="sub-sub-title"><?= $page_details['page']['main_sub_sub_header'] ?></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page_details['page']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-6">

                            <h3 class="contents-header">Policy Check Up</h3>
                            <p class="contents-text">The major reasons for reviewing life insurance coverage include the following...</p>
			
 																											<ul class="fa-ul">
																														<li><i class="fa-li fa fa-check"></i>Many life contracts do not meet current needs due to life or career changes.</li>
																														<li><i class="fa-li fa fa-check"></i>Beneficiary designations many times are out-of-date.</li>
																														<li><i class="fa-li fa fa-check"></i>Many older life contracts use higher mortality rates than current policies and coverage may not remain in force based on reasonable projections.</li>
																														<li><i class="fa-li fa fa-check"></i>Many new products have features that were not available in the past (i.e.
																																																																			secondary guarantees in Universal Life Products, Long-Term Care Riders etc.).</li>
																														<li><i class="fa-li fa fa-check"></i>Opportunity to lower costs through new, more lenient underwriting.</li>
																														<li><i class="fa-li fa fa-check"></i>Opportunity to increase coverage and/or guarantees through improved product offerings.</li>
																														<li><i class="fa-li fa fa-check"></i>Outstanding policy loans may cause a policy to lapse.</li>
																														<li><i class="fa-li fa fa-check"></i>Life insurance, if not owned properly, can increase estate taxes in larger estates.</li>
																														<li><i class="fa-li fa fa-check"></i>Existing term policies may be approaching a premium increase or be beyond their
																																																																			conversion point.</li>
																														<li><i class="fa-li fa fa-check"></i>Advancing age and deteriorating health can prevent an insured from taking advantage of
																																																																			more cost effective products if needlessly delayed.</li>
	 																										</ul>
																											

                        </div>
                        <div class="col-md-6">

                            <div class="fd3-panel">

                                <h3 class="popout-header">
	                               	 <?= $page_details['form']['mini_top_text'] ?>
                                </h3>

                                <div class="fd3-capture-input-container">
                                    <form method="post" id="currentForm">

                                        <div class="form-group">
                                            <h2 class="fd3-form-title"><?= $page_details['form']['form_title'] ?></h2>
                                        </div>

																																							<? foreach( $page_details['fields'] as $field ) : ?>
																																							
                                        <div class="form-group">
                                            <div class="label-container"><label for="<?= $field['name'] ?>"><?= ucfirst( $field['name'] ) ?></label></div>
                                            <input class="form-control form-control-lg" id="<?= $field['name'] ?>" name="<?= $field['name'] ?>" type="<?= $field['type'] ?>" value="<?= (! empty( $form_data[$field['name']] ) ) ? $form_data[$field['name']] : '' ?>" data-required="<?= $field['required'] == '1' ? 'true' : 'false' ?>" data-label="<?= $field['name'] ?>" data-type="string" data-error="<?= $field['error_msg'] ?>" placeholder="<?= ucfirst($field['name']) ?>">
                                        </div>
																																								
																																								<? endforeach; ?>
			
																																							 <!-- <div class="form-group">
																																										<div class="label-container"><label class="f_optin" for="f_optin"></label></div>
																																										<p class="opt-in-choice"><input type="checkbox" id="f_optin" name="f_optin" data-required="true" data-error="You must check this to continue."> Yes! Please add me to your mailing list today!</p>
																																							 </div> -->
																																							
                                        <div class="form-group">
                                            <? if( isset( $page_details['button_text_format'] ) &&
                                                   strlen($page_details['button_text_format']) > 0 ) { ?>

                                                <a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn submit-btn form-control" <?= $page_details['page_content']['button_text_format'] ?> data-custom="true"><?= $page['page_content']['button_text'] ?></a>

                                            <? } else { ?>    

                                                <a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn submit-btn form-control"><?= $page_details['form']['button_text'] ?></a>

                                            <? } ?>
			
																																											 <div class="disclaimer"><?= $page_details['form']['spam_disclaimer'] ?></div>
																																											
                                        </div>
                                    </form>
                                </div>

                            </div>

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
</div>

<!-- Modal -->
<div class="modal fade" id="alertDialog" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
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

				form label.f_optin {
							display: none !important;
				}

				form label.f_optin.red-error {
							display: inline-block !important;
				}

				form .error-message {
							color: #ff0000 !important;
							font-weight: bold !important;
							font-style: italic !important;
							float: right;
							height:24px;
				}

				form .checkbox-error-message {
							color: #ff0000 !important;
							font-weight: bold !important;
							font-style: italic !important;
							float: none;
							height:24px;
							text-align: center !important;
							display: block !important;
				}
    form .label-container {
        width: 100%;
        display: block;
    }

</style>

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

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
/*									
									if( ! $('input[name=f_optin]').is(':checked') ) {
											
											var $optin =  $('input[name=f_optin]');
											$optin.addClass( 'red-error' );
											var $label = $("label[for='f_optin']");
											var errorText = '( ' + $optin.data('error') + ' )';
											var $errorMsg = $( '<span>', { class: 'checkbox-error-message' } );
											
											$errorMsg.html( errorText );
											$errorMsg.insertAfter( $label );
											
											if( ! firstError ) {
													$(this).focus();
													firstError = true;
													ok = false;
											}
											
									}*/
									
									if( ok ) {
											$('#currentForm').submit();
									}
									
									//  $( '#currentForm' ).submit();
							});
					});
			
			</script>


</body>
</html>