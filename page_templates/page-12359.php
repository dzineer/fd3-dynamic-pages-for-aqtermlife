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
                        <h3 class="sub-sub-title">Download our FREE Life Insurance Planning Guide and let us walk you through the process.</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
                </div>

                <div class="col-md-12">


                    <div class="row">

                        <div class="col-md-6">

                            <h3 class="contents-header">There are numerous reasons why a life insurance policy owner should review their coverage on a regular basis.</h3>
                            <p class="contents-text">Often there are legitimate planning issues for making changes in life insurance coverage. In addition, improvements in available life insurance coverage offer the real possibility that you can improve your coverage without any additional outlays.</p>
                            <h3 class="contents-header">The major reasons for reviewing life insurance coverage include the following..</h3>
<!--                            <p class="contents-text">.</p>-->

                            <ul class="list">
                                <li><i class=""></i>Many life contracts do not meet current needs due to life or career changes.</li>
                                <li><i class=""></i>Beneficiary designations many times are out-of-date.</li>
                                <li><i class=""></i>Many older life contracts use higher mortality rates than current policies and coverage may not remain in force based on reasonable projections.</li>
                                <li><i class=""></i>Many new products have features that were not available in the past (i.e.
                                    secondary guarantees in Universal Life Products, Long-Term Care Riders etc.).</li>
                                <li><i class=""></i>Opportunity to lower costs through new, more lenient underwriting.</li>
                                <li><i class=""></i>Opportunity to increase coverage and/or guarantees through improved product offerings.</li>
                                <li><i class=""></i>Outstanding policy loans may cause a policy to lapse.</li>
<!--                                <li><i class="fa-li fa fa-check"></i>Life insurance, if not owned properly, can increase estate taxes in larger estates.</li>-->
<!--                                <li><i class="fa-li fa fa-check"></i>Existing term policies may be approaching a premium increase or be beyond their
                                    conversion point.</li>-->
<!--                                <li><i class="fa-li fa fa-check"></i>Advancing age and deteriorating health can prevent an insured from taking advantage of
                                    more cost effective products if needlessly delayed.</li>-->
                            </ul>

                        </div>

                        <div class="col-md-6">

                            <div class="fd3-panel">

                                <h3 class="popout-header">
                                    <span>Marriage</span>, <span>Baby</span>, <span>Home Purchase</span>, <span>Job Change</span>, <span>Retirement</span>, and <span>Small Business Growth</span>, could trigger the need for life insurance or trigger the need for a life insurance check up.
                                </h3>

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