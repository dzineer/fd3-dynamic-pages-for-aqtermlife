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
<!--                        <h3 class="sub-sub-title">Life Insurance Can Also Protect Your Business</h3>
-->                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-6">

                            <h3 class="contents-header-shout">Download our FREE Life Insurance Planning Guide</h3>
                            
                            <h3 class="contents-header">Has a recent life event triggered the need for additional insurance?</h3>
                            <p class="contents-text">There are numerous reasons why a life insurance policy owner should review their coverage on a regular basis. Many life contracts do not meet current needs due to life or career changes.</p>
                            
                            <h3 class="contents-header">Policy Checkup</h3>
                            <p class="contents-text">Often there are legitimate planning issues for making changes in life insurance coverage. In addition, improvements in available life insurance coverage offer the real possibility that you can improve your coverage without any additional outlays.</p>

                        </div>

                        <div class="col-md-6">

                            <div class="fd3-panel">

<!--                                <h3 class="popout-header">
                                    Join thousands who have used our <span>Quote Engine</span>, a simple and easy way to get a <span>Quote</span> and purchase Term Life <span>Insurance</span>!
                                </h3>-->

                                <div class="fd3-capture-input-container">
                                    <form>

                                        <div class="form-group">
                                            <h2 class="fd3-form-title">YES, I would like to get the Life Insurance Planning guide for Free.</h2>
                                            <p class="fd3-form-sub-title">Fill out the form below to <strong>Access the Guide!</strong></p>
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
                                        <div class="form-group"><a class="btn btn-primary btn-block  btn-lg fd3-subscribe-btn form-control"><?= $page['page_content']['button_text'] ?></a></div>
                                    </form>

                                    <p class="disclaimer">We respect your privacy! Your personal information will never be shared or sold.</p>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="footer">
            <div class="fd3-copyright">© Copyright 2017 AgentQuote.com, Inc. All rights reserved. </div><a class="fd3-powered-by" href="http://aq2emarketing.com">Powered by AQ2E Marketing Platform</a>
        </div>
    </div>
</div>

</body>
</html>