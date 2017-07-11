<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="icon" href="img/favicon.ico?ver=2" type="image/x-icon">
		<link rel="shortcut icon" href="img/favicon.ico?ver=2" type="image/x-icon" />
		<meta name="description" content="AQ2E Agent Marketing Site">
		<meta name="keywords" content="aq2e, marketing, site">
		<meta name="author" content="AgentQuote.com, Inc.">
		<meta name = "format-detection" content = "telephone=no" />
		<?php dynamic_pages_head(); ?>
	</head>

	<body class="<?= aq2emm_get_body_classes(); ?>" >
	<!--header-->
		<a name="getAQuoteBanner"></a>
		<header id="stuck_container">
		    <div class="agent-header">            
		        <div class="container">
		            <div class="row">
		                <div class="col-md-4 col-sm-4 col-xs-12">
		                   <?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/header', 'logo' ); ?> 
		                </div>
		                <div class="col-md-4 col-sm-4 col-xs-12">
		                   <?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/header', 'social-links' ); ?>
		                </div>
		                <div class="col-md-4 col-sm-4 col-xs-12">
		                   <?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/header', 'company-name' ); ?>
		                </div>		                
		            </div>
		        </div>  
		    </div>
		    
		    <?php get_dynamic_pages_template_part( aq2emm_selected_theme().'partials/header', 'main-menu' ); ?>

		    <div class="agent-phone-container">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6">
		                    
		                </div>
		                <div class="col-md-6">
		                   <span class="agent-phone"><i class="fa fa-phone fa-fw fd3-phone-font"></i>Call Us <?php echo aq2emm_get_phone(); ?></span>
		                </div>
		            </div>
		        </div>

		    </div>

		</header>