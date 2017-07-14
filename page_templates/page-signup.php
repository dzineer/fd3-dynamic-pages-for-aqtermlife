<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" integrity="sha256-JklDYODbg0X+8sPiKkcFURb5z7RvlNMIaE3RA2z97vw=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

        <? if( isset($page['global_var_scripts']) ):
            foreach($page['global_var_scripts'] as $script): ?>
                <? echo aq2emm_register_global_scripts( $script['name'], $script['content'] );  ?>
                
        <? endforeach;
        endif; ?>

        <script>
            var fd3_stop = 'breakpoint';
        </script>

        <? if( isset($page['scripts']) ):
            foreach($page['scripts'] as $script): 
                if( $script['load-first'] == true ):
                    $ver = isset($script['ver']) ? '?v='.$script['ver'] : '';
                    $src = $script['src'] . $ver; ?>
                    <script src="<?= $src ?>" data-loaded-first="true"></script>
        <?      endif;
            endforeach;
        endif; ?>

        <link rel="stylesheet" href="<?= get_dynamic_pages_template_directory_uri() . '/css/font-awesome.min.css' ?>">

        <link rel="stylesheet" href="<?= $cssTemplate ?>">

        <? if( isset($page['scripts']) ):
            foreach($page['scripts'] as $script): 
                if( $script['load-first'] == false ):
                    $ver = isset($script['ver']) ? '?v='.$script['ver'] : '';
                    $src = $script['src'] . $ver; ?>
                    <script src="<?= $src ?>" data-loaded-first="false"></script>
        <?      endif;
            endforeach;
        endif; ?>

    </head>
    
    <body>

        <div class="fd3-background" style="background-image: url(<?= $page['page_content']['main_bg'] ?>);"> <!-- fd3-background -->
            <div class="fd3-capture-container"> <!-- fd3-capture-container -->
                <div class="container"> <!-- container - :52 -->

                    <div class="row"> <!-- row - :53 -->

                        <div class="col-md-12">
                            <div class="fd3-title-container">
                                <h2 class="title">
                                    <p><?= $page['page_content']['main_header'] ?></p>
                                </h2>
                            <!-- <h3 class="sub-title">Life Insurance Can Also Protect Your Business</h3> -->
                                <h3 class="sub-sub-title">- AQ2E Platform &amp; AQ2E Marketing Platform Signup -</h3>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <image src="<?= $page['page_content']['top_image'] ?>"></image>
                        </div>

                        <div class="col-md-12"> <!-- col-md-12 -->


                            <div class="row"> <!-- row -->

                                <div class="offset-md-2 col-md-8"> <!-- offset-md-2 col-md-8 -->

                                    <div class="fd3-panel"> <!-- fd3-panel -->

                                        <h3 class="popout-header center-field">
                                            <em><span class="aq-bold" style="font-style: italic"></span>Sign up by clicking your option below:</em>
                                        </h3>

                                        <div class="fd3-capture-input-container"> <!-- fd3-capture-input-container -->

                                                <h3 class="text-center title-text show"><span class="product-one-hilite">AQ2E Platform</span><span class="product-separator">&nbsp;&amp;&nbsp;</span><span class="product-two-hilite">AQ2E Marketing Platform</span></h3>

                                                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">

                                                    <div class="modal-dialog modal-md" role="document">
                                                        
                                                            <div class="loginmodal-container">

                                                                    
                                                                    <button type="button" class="close login-close-btn" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>

                                                                    <h5 class="title">Login to Verify Your Account</h5><br>

                                                                    <form id="validate_form" name="validate_form">

                                                                        <label for="login-type" id="login_type_label" data-original="Login Type">Login Through</label>
                                                                        
                                                                        <select id="login-type" name="login-type" class="form-control input-lg" style="margin-bottom: 10px;">
                                                                            <option  value="use-bga">General Agent</option>
                                                                            <option selected=selected value="use-aqterm">AQTerm (AgentQuote)</option>
                                                                        </select>
                                                                        
                                                                        <div id="login-bga">
                                                                            <label for="fd3_form_validate_bga_url" id="fd3_form_validate_bga_url_label" data-original="Account Info">AQ2E General Agent URL</label>
                                                                            <input type="text" name="fd3_form_validate_bga_url" id="fd3_form_validate_bga_url" placeholder="URL" value="aqterm" class="fd3-form-control input-lg">
                                                                        </div>    

                                                                        <label for="fd3_form_validate_account_id" id="fd3_form_account_id_label" data-original="Account Info">Your User Id</label>
                                                                        <input type="text" name="fd3_form_validate_account_id" id="fd3_form_validate_account_id" placeholder="User Id or Email Address (required)" class="fd3-form-control input-lg">

                                                                        <label for="fd3_form_validate_password" id="fd3_form_validate_password_label" data-original="Account Info">Your Password</label>
                                                                        <input type="password" name="fd3_form_validate_password" id="fd3_form_validate_password" placeholder="Password (required)" class="fd3-form-control input-lg">

                                                                        <button type="button" class="fd3-form-control input-lg btn btn-success btn-block btn-lg" name="btn-verify-account" id="btn-verify-account" value="Verify Account" >
                                                                            <i class="fa fa-lock fa-btn-font show" aria-hidden="false"></i>
                                                                            <span class="btn-caption">Verify Account</span>
                                                                        </button>

                                                                    </form>

                                                            </div>

                                                            <div class="validated-container">
                                                                <h5><i class="fa fa-check check-green fa-btn-font show" aria-hidden="false"></i>Thank you <span id='clientName'></span>. Your account has been verified.</h5>
                                                            </div>

                                                        </div>

                                                    </div>

<!--                                                <div class="btn-group-container">

                                                    <div class="btn-group" data-toggle="buttons">

                                                        <label class="btn btn-primary active" id="aq2e-platform-cb">
                                                            <input type="checkbox" checked autocomplete="off"> Step 1. AQ2E Platform Signup
                                                        </label>

                                                        <label class="btn btn-secondary" id="aq2e-marketing-platform-cb">
                                                            <input type="checkbox" autocomplete="off"> Step 2. AQ2E Marketing Platform Signup
                                                        </label>

                                                    </div>                                        

                                                </div>
-->

                                                <div class="amp-thankyou-container">
                                                    <div class="main-message">
                                                        <h1>We are processing your account...</h1>
                                                        <img src="/wp-content/uploads/2017/03/confirmation-email-icon.png">
                                                        <p>We are currently in the process of setting up your account. We will send you an email when your setup is complete.</p>
<!--                                                        <div class="sent-to-container"><strong>support@agentquote.com</strong></div>
                                                        <p>Click the confirmation link in that email to begin using the AQ2E Platform</p>
-->                                                    </div>
                                                </div>

                                                <div class="ap-thankyou-container">
                                                    <div class="main-message">
                                                        <h1>Your Account Is All Setup!</h1>
                                                        <img src="/wp-content/uploads/2017/03/confirmation-email-icon.png">
                                                        <p>Please check your email to confirm your account.</p>
<!--                                                        <div class="sent-to-container"><strong>support@agentquote.com</strong></div>
                                                        <p>Click the confirmation link in that email to begin using the AQ2E Platform</p>
-->                                                    </div>
                                                </div>

                                            <form id="register_form">


                                                <div id="signup-choice-container" class="signup-choice-container">


                                                </div> <!-- ./signup-choice-container -->

 <!--                                                <div class="existing-user-sign-up-container">

                                                        <ul class="nav nav-tabs" role="tablist" id="existing-user-tab">
			
																																																											 <li class="nav-item">
																																																														<a href="#existing-user-preferences-info" id="existing-user-preferences-info-tab" class="nav-link active" data-toggle="tab" role="tab">Agreement Info</a>
																																																											 </li>
																																																											
                                                            <li class="nav-item">
                                                                <a href="#existing-user-agreements-info" id="existing-user-agreement-info-tab" class="nav-link active" data-toggle="tab" role="tab">Agreement Info</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#existing-user-billing-info" id="existing-user-billing-info-tab" class="nav-link" data-toggle="tab" role="tab">Billing Info</a>
                                                            </li>

                                                        </ul>

                                                        <div class="tab-content">
			
																																																											     <div id="existing-user-preferences-info" class="tab-pane active" role="tabpanel">		
																																																											     </div> 
																																																											
                                                                <div id="existing-user-agreements-info" class="tab-pane active" role="tabpanel">
                                                                
                                                                </div>  

                                                                <div id="existing-user-billing-info" class="tab-pane" role="tabpanel"> 
        
                                                                </div> 

                                                        </div> 

                                                </div> -->

                                                <!-- *************************************************************************************** -->

                                                <div class="amp-new-sign-up-container">


                                                        <ul class="nav nav-tabs" role="tablist" id="amp-new-sign-up-tab">

                                                            <li class="nav-item">
                                                                <a href="#new-sign-up-contact-info" id="new-sign-up-contact-info-tab" class="nav-link" data-toggle="tab" role="tab">Contact Info</a>
                                                            </li>

                                                            <li class="nav-item disabled">
                                                                <a href="#new-sign-up-account-info" id="new-sign-up-account-info-tab" class="nav-link" data-toggle="tag" role="tab">Account Info</a>
                                                            </li>
																																																											
																																																														<a href="#new-sign-up-preferences-info" id="new-sign-up-preferences-info-tab" class="nav-link" data-toggle="tag" role="tab">Preferences</a>
																																																											 </li>
																																																											
                                                            <li class="nav-item disabled">
                                                                <a href="#new-sign-up-agreements-info" id="new-sign-up-agreements-info-tab" class="nav-link"  data-toggle="tag" disabled="disabled" role="tab">Agreements</a>
                                                            </li>                                                            

                                                            <li class="nav-item disabled">
                                                                <a href="#new-sign-up-billing-info" id="new-sign-up-billing-info-tab" class="nav-link" disabled="disabled" data-toggle="tag" role="tab">Billing Info</a>
                                                            </li>
                                     
                                                        </ul>

                                                        <div class="tab-content"> <!-- tab-content -->

                                                                <div id="new-sign-up-contact-info" class="tab-pane" role="tabpanel">  <!-- contact info -->
                                                                </div>  <!-- ./contact info -->
                                                        </div>        

                                                        <div class="tab-content"> <!-- tab-content -->

                                                                <div id="new-sign-up-account-info" class="tab-pane" role="tabpanel"> <!-- account info -->
                                                                </div> <!-- ./account info -->

                                                        </div>        
			
                                                        <div class="tab-content"> <!-- tab-content -->
			
																																																														  <div id="new-sign-up-preferences-info" class="tab-pane" role="tabpanel"> <!-- account info -->
																																																														  </div> <!-- ./preferences info -->
                                                        </div>        

                                                        <div class="tab-content"> <!-- tab-content -->

                                                                <div id="new-sign-up-agreements-info" class="tab-pane" role="tabpanel"> <!-- account info -->
                                                                </div> <!-- ./agreements info -->

                                                        </div>        

                                                        <div class="tab-content"> <!-- tab-content -->

                                                                <div id="new-sign-up-billing-info" class="tab-pane" role="tabpanel"> <!-- billing info -->
                                                                </div> <!-- ./billing info -->

                                                        </div> <!-- tab-content -->

                                                </div> <!-- ./new-sign-up-container -->


                                                <div id="ap-new-sign-up-container">

                                                        <ul class="nav nav-tabs" role="tablist" id="ap-new-sign-up-tab">

                                                            <li class="nav-item">
                                                                <a href="#ap-new-sign-up-contact-info" id="ap-new-sign-up-contact-info-tab" class="nav-link" data-toggle="tab" role="tab">Contact Info</a>
                                                            </li>

                                                            <li class="nav-item disabled">
                                                                <a href="#ap-new-sign-up-account-info" id="ap-new-sign-up-account-info-tab" class="nav-link" data-toggle="tab" role="tab">Account Info</a>
                                                            </li>
                                                           
                                                            <li class="nav-item disabled">
                                                                <a href="#ap-new-sign-up-billing-info" id="ap-new-sign-up-billing-info-tab" class="nav-link" data-toggle="tab" role="tab">Billing Info</a>
                                                            </li>
                                     
                                                        </ul>

                                                        <div class="tab-content"> <!-- tab-content -->
                                                            <div id="ap-new-sign-up-contact-info" class="tab-pane active" role="tabpanel">  <!-- contact info -->
                                                            </div>  <!-- ./contact info -->
                                                        </div>

                                                        <div class="tab-content"> <!-- tab-content -->
                                                            <div id="ap-new-sign-up-account-info" class="tab-pane" role="tabpanel"> <!-- account info -->
                                                            </div> <!-- ./account info -->
                                                        </div>

                                                        <div class="tab-content"> <!-- tab-content -->
                                                            <div id="ap-new-sign-up-billing-info" class="tab-pane" role="tabpanel"> <!-- billing info -->
                                                            </div> <!-- ./billing info -->
                                                        </div> <!-- tab-content -->

                                                </div> <!-- ./new-aq2e-platform-sign-up-container -->


                                            </form>

                                        </div> <!-- ./fd3-capture-input-container -->

                                    </div>  <!-- fd3-panel -->

                                </div> <!-- ./offset-md-2 col-md-8 -->

                            </div> <!-- ./row -->

                        </div>  <!-- col-md-12 -->

                    </div> <!-- ./row - :53 -->

                    <br style="clear: both" />    

                </div>  <!-- ./container - :52 -->
                
            </div>  <!-- ./fd3-capture-container -->

        <!--        
            <div class="footer">
                <div class="fd3-copyright">© Copyright 2017 AgentQuote.com, Inc. All rights reserved. </div>
                <a class="fd3-powered-by" href="http://aq2emarketing.com">Powered by AQ2E Marketing Platform</a>
            </div>
        -->
        </div> <!-- fd3-background -->

        <div class="modal fade" tabindex="-1" role="dialog" id="signup-modal" aria-labelledby="signup-modal" aria-hidden="true">
           
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Creating Account Please wait...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <p>Please wait while we create your account. Please note: after completing this step be sure to complete Step 2. by clicking the link below to sign up for the AQ2E Marketing Platform.</p>

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 2%; height: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                    </div>
<!--                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>-->
                </div>
            </div>

        </div>



    </body>
</html>