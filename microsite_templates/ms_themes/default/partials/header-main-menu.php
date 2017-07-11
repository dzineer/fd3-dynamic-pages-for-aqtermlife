	    <!-- header-main-menu -->

		<?php $pages = aq2emm_get_pages_class();  ?>

	    <div class="container">
	        <nav class="navbar navbar-default navbar-static-top aq_navbar clearfix" role="navigation">
	            <ul class="nav sf-menu clearfix">
	                <li class="<?= $pages['home']; ?>"><a href="/"><i class="fa fa-home fa-fw header-font"></i>Home</a></li>
	                <li class="<?= $pages['process']; ?>"><a href="/process"><i class="fa fa-archive fa-fw header-font"></i>Process</a></li>
	                <li class="<?= $pages['life']; ?>"><a href="/life"><i class="fa fa-umbrella fa-fw header-font"></i>Life</a></li>
	                <li class="<?= $pages['calculator']; ?>"><a href="/calculator"><i class="fa fa-calculator fa-fw header-font"></i>Needs Analyzer</a></li>
	                <li class="<?= $pages['glossary']; ?>"><a href="/glossary"><i class="fa fa-search fa-fw  header-font"></i>Glossary</a></li>
	                <li class="<?= $pages['about']; ?>"><a href="/about"><i class="fa fa-phone-square fa-fw header-font"></i>About Us</a></li>
	            </ul>
	        </nav>
	    </div>
	    <!-- ./header-main-menu -->