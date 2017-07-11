<?php get_dynamic_pages_header(); ?>

	<section class="about-header-banner normal-banner smooth-transition" data-rate="8">
	    <div class="container">
	        <div class="image" data-image="<?php echo get_dynamic_pages_template_directory_uri() . '/img/bg_pic9.jpg'; ?>" data-banner="image">
	            
	            <div class="row">
	                <div class="col-md-12">

	                    <div class="banner-text">
	                        ABOUT <span class="me">ME</span>
	                        <span class="plan">LET ME FIND THE PLAN THAT IS RIGHT FOR YOU</span>
	                    </div>    
	                    
	                </div>            

	            </div>
	        </div>
	    </div>

	</section><!-- header-banner -->

	<section class="text-info-container">
	    <div class="text-info">
	        <div class="container">

	            <div class="row wow fadeInLeft animated">
	                <div class="col-md-12">
	                    <div class="caption"><p class="title"><?= aq2emm_get_top_slogan_line1(); ?></p><p class="description"><?= aq2emm_get_top_slogan_line2(); ?></p></div>
	                </div>
	            </div>

	        </div>
	        
	    </div>
	    
	</section>

	<section>

	    <div class="content">
	        <div class="container">

	            <div class="about-us-container">
	                        
	                <h2 class="na-header"></h2>

	                <div class="about-us">
	                    
	                    <div class="row">
	                        
	                        <div class="col-md-7 no-r-padding">

	                            <div class="left-container">

	                                <div class="row">
	                                    <div class="col-md-6">

	                                        <div class="badge-container">

	                                            <div class="photo-old">
	                                                
	                                                <img style="height: 250px;width: 250px;border-radius: 50%;display: block;" src="<?= aq2emm_get_profile_image(); ?>">

	                                            </div><!-- photo -->

	                                        </div><!-- badge-container -->

	                                    </div><!-- col -->

	                                    <div class="col-md-6">

	                                        <div class="agent-info-container">
	                                            <h2 class="agent-name"><?= aq2emm_get_name(); ?></h2>
	                                            <p>
	                                                <span class="agent-title"><?= aq2emm_get_agent_title(); ?></span>
                                                    <span class="email"><label>E-mail: </label><a href="mailto:<?= aq2emm_get_email(); ?>" target="_blank"><?= aq2emm_get_email(); ?></a></span>
<!--	                                                <span class="facebook"><label>Facebook: </label><a href="<?/*= aq2emm_get_link('facebook'); */?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></span>
--><!--	                                                <p class="description">
	                                                    <?/*= aq2emm_get_aq_about_info(); */?>
	                                                </p>-->

	                                            </p>
	                                        </div><!-- agent-info -->

	                                    </div><!-- col -->

	                                </div><!-- row -->

	                            </div><!-- left-container -->

	                        </div>

	                        <div class="col-md-5 no-l-padding">

	                            <div class="body">

	                                <div class="right-container">
	                                    <p>
	                                        <?= aq2emm_get_info(); ?>
	                                    </p>
	                                </div><!-- right-container -->
	                              

	                            </div><!-- body -->
	                        </div>


	                    </div><!-- row -->

	                </div><!-- needs-analyzer -->

	            </div><!-- about-us-container -->
	        </div>
	    </div>

	   
	</section>

	   
	<div class="content">

	    <section class="stellar-section">
	      
	            <div class="thumb-box thumb-box4 y-max" data-type="background" data-speed="2">

	                <div class="container">

	                    <div class="row">
	                        
	                        <div class="col-md-9">

	                            <div class="steller-contents">
	                                <p class="wow fadeInLeft"><?= aq2emm_get_slogan(); ?></p>
	                            </div>                            

	                        </div>

	                        <div class="col-md-3">

	                            <div class="steller-contents buttom-thumb-box">
	                                <a href="/" class="wow zoomIn animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: zoomIn;">
	                                    <span class="fa fa-comments-o"></span>
	                                    <br>Get A<br>Quote Now!
	                                </a>
	                            </div>                            
	                            
	                        </div>

	                    </div>


	                </div>

	            </div>
	      
	    </section><!-- stellar-section -->

	</div><!-- content -->

<style>
	.about-header-banner {
		background: url(<?php echo aq2emm_get_template_directory_uri() . '/img/bg_pic9.jpg'; ?>);
	}
	
	.agent-phone {
		right: 0;
		position: absolute;
		height: 47px;
		width: 100%;
		top: -5px;
		font: 300 2.5em/2.2em 'Open Sans';
		text-align: right;
		padding-right: 48px;
		color: rgb(255, 255, 255);
		text-shadow: 1px 1px 5px rgba(0, 0, 0, 1);
		font-weight: bold;
	}

</style>

<?php get_dynamic_pages_footer(); ?>