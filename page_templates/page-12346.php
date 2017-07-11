<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $cssTemplate ?>">
</head>
<body>
<div class="fd3-background" style="background: url(<?= $page['page_content']['main_bg'] ?>);">
    <div class="fd3-capture-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="fd3-title-container">
                        <h2 class="title">
                            <p><?= $page['page_content']['main_header'] ?></p>
                        </h2>
                        <h3 class="sub-title"><?= $page['page_content']['main_sub_header'] ?></h3>
                    </div>
                </div>
                <div class="col-md-12">
                    <image src="<?= $page['page_content']['top_image'] ?>"></image>
                </div>
                <div class="col-md-12">
                    <div class="fd3-panel">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="fd3-panel-top-small-text"><?= $page['page_content']['mini_top_text'] ?></p>
                                <p class="fd3-panel-extra-text"><?= $page['page_content']['spam_disclaimer'] ?></p>
                            </div>
                        </div>
                        <div class="fd3-capture-panel">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="fd3-panel-header"><?= $page['page_content']['form_title'] ?></div>
                                    <div class="left-side">
                                        <img src="<?= $page['page_content']['form_image'] ?>">
                                        <p><?= $page['page_content']['form_sub_text'] ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="fd3-capture-input-container">
                                        <form>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control form-control-input-lg" type="text">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control form-control-input-lg" type="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input class="form-control form-control-input-lg" type="phone">
                                            </div>
                                            <div class="form-group"><a class="btn btn-primary btn-block fd3-subscribe-btn form-control"><?= $page['page_content']['button_text'] ?></a></div>
                                        </form>
                                    </div>
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