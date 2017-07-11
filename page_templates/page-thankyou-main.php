<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $cssTemplate ?>">
    <? if( isset($page['scripts']) ):
        foreach($page['scripts'] as $script): 
             $ver = isset($script['ver']) ? '?v='.$script['ver'] : '';
             $src = $script['src'] . $ver; ?>
            <script src="<?= $src ?>"></script>
    <? endforeach;
       endif; ?>
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
                       <!-- <h3 class="sub-title">Life Insurance Can Also Protect Your Business</h3> -->
                        <h3 class="sub-sub-title">- How to Get Leads for Your Insurance Agency... Like a Pro -</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-12">

                            <h3 class="contents-header">Be sure to check your email to receive your eBook (PDF) download.</h3>
                            <p class="contents-text">Thank You.</p>

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

</body>
</html>