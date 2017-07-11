<footer>
			<div class="container">
						<p class="wow fadeIn copyright-container"><span>AgentQuote.com</span> &copy; <em id="copyright-year"></em> | <a href="/wp-content/uploads/2017/04/AQ2E_Terms_of_Use_Agreement.pdf" target="_blank">Terms of Agreement</a></p>
						
						<ul class="wow fadeIn footer-social-media" data-wow-delay="0.1s">
		  
		  <? if( strlen(fd3_get_link_type('fblink'))) : ?>
													<li><a href="<?= fd3_get_link_type('fblink'); ?>" target="_blank"><img src="<?php echo aq2emm_get_template_directory_uri() . '/img/follow_icon1.png'; ?>" alt=""></a></li>
		  <? endif; ?>
		  
		  <? if( strlen(fd3_get_link_type('twitterlink'))) : ?>
													<li><a href="<?= fd3_get_link_type('twitterlink'); ?>" target="_blank"><img src="<?php echo aq2emm_get_template_directory_uri() . '/img/follow_icon3.png'; ?>" alt=""></a></li>
		  <? endif; ?>
		  
		  <? if( strlen(fd3_get_link_type('gpluslink'))) : ?>
													<li><a href="<?= fd3_get_link_type('gpluslink'); ?>" target="_blank"><img src="<?php echo aq2emm_get_template_directory_uri() . '/img/follow_icon4.png'; ?>" alt=""></a></li>
		  <? endif; ?>
						
						</ul>
			</div>
</footer><!-- footer -->

<?php echo aq2emm_js_data() ?>

<script src="<?= aq2emm_get_template_directory_uri() . '/js/aq2e-marketing-microsite-concat-base.js'; ?>"></script>

<script>
   WebFontConfig = {
	  google: {
	    families: ['Open Sans']
	  },
	  timeout: 2000
   };

   (function(d) {
      var wf = d.createElement('script'), s = d.scripts[0];
      wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
   })(document);
</script>

<?php dynamic_pages_footer(); ?>
<?php dynamic_pages_responsive(); ?>
<?php dynamic_load_page_css(); ?>

</body>
</html>