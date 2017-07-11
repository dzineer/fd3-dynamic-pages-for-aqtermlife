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
                        <h3 class="sub-sub-title"><?= $page['page_content']['main_sub_sub_header'] ?></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-6">

                        <? if(isset( $page['page_content']['contents'] ) && count( $page['page_content']['contents'] ) ) { 
                            foreach( $page['page_content']['contents'] as $contents ) { ?>

                            <h3 class="contents-header"><?= $contents['header'] ?></h3>
                            <p class="contents-text"><?= $contents['text'] ?></p>

                        
                            <? } ?>

                            <? if(isset( $page['page_content']['list'] ) && count( $page['page_content']['list'] ) ) { ?>

                                <ul class="ul" style="margin: 30px;">
                                <? foreach( $page['page_content']['list']['items'] as $item ) { ?>
                                    <li><i class=""></i><?= $item ?></li>
                                <? } ?>
                                </ul>

                            <? } ?>


                        <? } ?>


                        </div>

                        <div class="col-md-6">

                            <div class="fd3-panel">

                                <h3 class="popout-header">
                                    Join thousands who have used our <span>Quote Engine</span>, a simple and easy way to get a <span>Quote</span> and purchase Term Life <span>Insurance</span>!
                                </h3>

                                <div class="fd3-capture-input-container">
                                    <form>

                                        <div class="form-group">
                                            <h2 class="fd3-form-title">YES, let me get that Quote!</h2>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control form-control-lg" id="name" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control form-control-lg" id="email" type="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input class="form-control form-control-lg" id="phone" type="phone" placeholder="Phone">
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