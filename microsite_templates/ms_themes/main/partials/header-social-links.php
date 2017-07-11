<div class="social-links">
	
	<? if( strlen(fd3_get_link_type('fblink'))) : ?>
							<a href="<?= fd3_get_link_type('fblink'); ?>"><i class="fa fa-facebook fa-lg"></i></a>
	<? endif; ?>
	
	<? if( strlen(fd3_get_link_type('gpluslink'))) : ?>
							<a href="<?= fd3_get_link_type('gpluslink'); ?>"><i class="fa fa-twitter fa-lg"></i></a>
	<? endif; ?>
	
	<? if( strlen(fd3_get_link_type('linkedinlink'))) : ?>
							<a href="<?= fd3_get_link_type('linkedinlink'); ?>"><i class="fa fa-google-plus fa-lg"></i></a>
	<? endif; ?>
	
	<? if( strlen(fd3_get_link_type('twitterlink'))) : ?>
							<a href="<?= fd3_get_link_type('twitterlink'); ?>"><i class="fa fa-linkedin fa-lg"></i></a>
	<? endif; ?>

</div>