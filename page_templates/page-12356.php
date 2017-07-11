<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $cssTemplate ?>">
</head>
<body>
<div class="fd3-background" style="background-image: url(<?= $page['page_content']['main_bg'] ?>);">
    <div class="fd3-capture-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fd3-title-container">
                        <h2 class="title">
                            <p><?= $page['page_content']['main_header'] ?></p>
                        </h2>
                        <h3 class="sub-title"><?= $page['page_content']['main_sub_header'] ?></h3>
                        <h3 class="sub-sub-title">Life Insurance Can Also Protect Your Business</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
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
                                    <form method="PUT" id="currentForm">

                                        <div class="form-group">
                                            <h2 class="fd3-form-title">YES, let me get that Quote!</h2>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control form-control-lg" id="name" type="text" data-required="true" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control form-control-lg" id="email" type="email" data-required="true" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input class="form-control form-control-lg" id="phone" type="phone" data-required="true" placeholder="Phone">
                                        </div>
                                        <div class="form-group">
                                            <? if( isset( $page['page_content']['button_text_format'] ) && 
                                                   strlen($page['page_content']['button_text_format']) > 0 ) { ?>

                                                <a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn submit-btn form-control" <?= $page['page_content']['button_text_format'] ?> data-custom="true"><?= $page['page_content']['button_text'] ?></a>

                                            <? } else { ?>    

                                            <a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn submit-btn form-control"><?= $page['page_content']['button_text'] ?></a>

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

<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script>

    $(function() {
        $( "body" ).on( "click", ".submit-btn", function() {
          $( '#currentForm' ).submit();
        });  
    });
    
</script>


</body>
</html>