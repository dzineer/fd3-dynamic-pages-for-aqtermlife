<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $cssTemplate ?>">
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
                        <h3 class="sub-sub-title">Life Insurance Can Also Protect Your Business</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page_details['page']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-6">

                            <h3 class="contents-header">You might be surprised just how inexpensive Term Life Insurance can be.</h3>
                            <p class="contents-text"> If you, one of your fellow partners or a key employee died tomorrow, life insurance can help. Life insurance can be structured to fund a buy-sell agreement ensuring that the remaining business owners have the funds to buy the ownership interests of a deceased partner at a previously agreed upon price. The owners get the business and the family gets the money.</p>
                            <h3 class="contents-header">Let Me Provide You with an Instant Online Quote</h3>
                            <p class="contents-text">Designed to Compliment you Busy Lifestyle...</p>

                            <ul class="ul">
                                <li><i class=""></i>No experience necessary to use our product.</li>
                                <li><i class=""></i>I have selected some of the best insurance companies for you offering some of the lowest rates available.</li>
                                <li><i class=""></i>Fund Buy Sell Agreement</li>
                                <li><i class=""></i>Insure  Key Employees</li>
                            </ul>

                        </div>

                        <div class="col-md-6">

                            <div class="fd3-panel">

                                <h3 class="popout-header">
                                    Join thousands who have used our <span>Quote Engine</span>, a simple and easy way to get a <span>Quote</span> and purchase Term Life <span>Insurance</span>!
                                </h3>

                                <div class="fd3-capture-input-container">
                                    <form method="post" id="currentForm">

                                        <div class="form-group">
                                            <h2 class="fd3-form-title">YES, let me get that Quote!</h2>
                                        </div>

																																							<? foreach( $page_details['fields'] as $field ) : ?>
																																							
                                        <div class="form-group">
                                            <div class="label-container"><label for="<?= $field['name'] ?>"><?= ucfirst( $field['name'] ) ?></label></div>
                                            <input class="form-control form-control-lg" id="<?= $field['name'] ?>" name="<?= $field['name'] ?>" type="<?= $field['type'] ?>" value="<?= (! empty( $form_data[$field['name']] ) ) ? $form_data[$field['name']] : '' ?>" data-required="<?= $field['required'] == '1' ? 'true' : 'false' ?>" data-label="<?= $field['name'] ?>" data-type="string" data-error="<?= $field['error_msg'] ?>" placeholder="<?= ucfirst($field['name']) ?>">
                                        </div>
																																								
																																								<? endforeach; ?>
																																								
                                        <div class="form-group">
                                            <? if( isset( $page_details['button_text_format'] ) &&
                                                   strlen($page_details['button_text_format']) > 0 ) { ?>

                                                <a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn submit-btn form-control" <?= $page_details['page_content']['button_text_format'] ?> data-custom="true"><?= $page['page_content']['button_text'] ?></a>

                                            <? } else { ?>    

                                                <a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn submit-btn form-control"><?= $page_details['form']['button_text'] ?></a>

                                            <? } ?>
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

          if( ok ) {
            $('#currentForm').submit();
          }

        //  $( '#currentForm' ).submit();
        });  
    });
    
</script>


</body>
</html>