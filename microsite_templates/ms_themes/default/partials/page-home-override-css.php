<?php
/**
 * Filename: page-home-override-css.php
 * Project: aq2emarketing.com
 * Editor: PhpStorm
 * Namespace: ${NAMESPACE}
 * Class:
 * Type:
 *
 * @author: Frank Decker
 * @since : 4/20/2017 8:43 PM
 */
?>
<style>
	.text-info-container {
		position: relative
	}
	
	#carouselWrapper {
		width: 100%;
		height: 50%;
		margin-top: 128px;
		position: relative;
		left: 0;
		top: 50%
	}
	
	#carousel {
		margin-top: 20px
	}
	
	#carousel div {
		text-align: center;
		width: 200px;
		height: 100px;
		float: left;
		position: relative
	}
	
	#carousel div img {
		border: none
	}
	
	#carousel div span {
		display: none
	}
	
	section {
		clear: both
	}
	
	#carousel div:hover span {
		background-color: #333;
		color: #fff;
		font-family: Arial, Geneva, SunSans-Regular, sans-serif;
		font-size: 14px;
		line-height: 22px;
		display: inline-block;
		width: 100px;
		padding: 2px 0;
		margin: 0 0 0 -50px;
		position: absolute;
		bottom: 30px;
		left: 50%;
		border-radius: 3px
	}
	
	.caroufredsel_wrapper {
		display: block;
		text-align: start;
		float: none;
		position: relative;
		top: auto;
		right: auto;
		bottom: auto;
		left: auto;
		z-index: auto;
		width: 2000px;
		height: 100px !important;
		margin: 38px 0px 0px;
		overflow: hidden;
	}

</style>