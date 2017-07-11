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
                        <h3 class="sub-sub-title">- 9 Tips To Guide You Through The Process -</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-6">

                            <h3 class="contents-header">Let us guide through the process of choosing Term Life Insurance</h3>
                            <p class="contents-text">Sure, it might seem like choosing the right Term Life Insurance is a daunting task;Our guide will lead  you step by step through the process.</p>
                            <h3 class="contents-header">Choose Term Life Insurance Intelligenly</h3>
                            <p class="contents-text">Our guide takes all the guess work out. The following a guide you will empowed to choose the plan that fits you</p>

                            <ul class="ul">
                                <li><i class=""></i>Easy to understand explanations</li>
                                <li><i class=""></i>We explore the different types of Life Insurance products</li>
                                <li><i class=""></i>College costs chart</li>
                                <li><i class=""></i>... and more</li>
                            </ul>

                        </div>

                        <div class="col-md-6">

                            <div class="fd3-panel">

                                <h3 class="popout-header center-field">
                                    <em>Learn How to Get Leads for Your Insurance Agency… Like a&nbsp;<span class="aq-bold" style="font-style: italic">Pro</span></em>!
                                </h3>

                                <div class="fd3-capture-input-container">
                                    <form id="optin_form">

                                        <div class="form-group">
                                            <h2 class="fd3-form-title">YES, let me get that Guide!</h2>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input class="form-control form-control-lg" id="name" name="name" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input class="form-control form-control-lg" id="email" name="email" type="email" placeholder="Email">
                                        </div>
                                        <? if( $page['require_fields']['phone'] == 'required' ): ?>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input class="form-control form-control-lg" id="phone" type="phone" placeholder="Phone">
                                        </div>
                                        <? endif; ?>
                                        <div class="form-group"><a class="btn btn-primary btn-block btn-lg fd3-subscribe-btn form-control"><?= $page['page_content']['button_text'] ?></a></div>
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

</body>
</html>