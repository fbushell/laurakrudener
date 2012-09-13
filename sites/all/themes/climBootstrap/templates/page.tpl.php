<div class="navbar">
	<div id="logo" class="center">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
    </a>
	</div>

  <div id="nav-region" class="center">
		<ul id="iso-filters">
			<li><a href="/">works</a></li>
			<li><a>/</a></li>
		</ul>
		<?php print render($page['header']); ?>
	</div>
</div>

<div class="container" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="row">
  	<div id="content-header" class="span12">
  	
      <?php if ($tabs): ?>
      	<div class="tabs"><?php print render($tabs); ?></div>
      <?php endif; ?>
    </div> 
    <div class="span10 offset1">
    	<?php print render($page['content']) ?>
    </div>
  </div>
</div>

<footer id="footer">
  <div id="social-wrap">
	 <div id="social-wrap">
  		<ul id="social">
        <li><a href="http://on.fb.me/RuJoOq" TARGET="_blank"><img src="/sites/all/themes/climBootstrap/images/social/facebook_icon.png"></a></li>
        <li><a href="http://bit.ly/TA7qIz" TARGET="_blank"><img src="/sites/all/themes/climBootstrap/images/social/pinterest_icon.png"></a></li>
        <li><a href="http://www.vimeo.com/laurakrudener" TARGET="_blank"><img src="/sites/all/themes/climBootstrap/images/social/vimeo_icon.png"></a></li>
        <li><a href="http://bit.ly/P6It3r" TARGET="_blank"><img src="/sites/all/themes/climBootstrap/images/social/instagram_icon.png" ></a></li>
        <li><a href="http://bit.ly/NjJLcN" TARGET="_blank"><img src="/sites/all/themes/climBootstrap/images/social/twitter_icon.png"></a></li>
        <li><a href="mailto:laura@laurakrudener.com" TARGET="_blank"><img src="/sites/all/themes/climBootstrap/images/social/email_icon.png"></a></li>
       </ul>
  	</div>
  </div>
</footer>