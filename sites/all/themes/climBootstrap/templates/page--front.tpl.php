<div class="navbar">
	<div id="logo" class="center">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
    </a>
	</div>

  <div id="nav-region" class="center">
		<ul id="iso-filters">
			<li class="hidden-phone"><a href="#" class="selected" data-filter="*">all</a></li>
			<li class="hidden-phone"><a href="#painting" data-filter=".painting">paintings</a></li>
			<li class="hidden-phone"><a href="#drawing" data-filter=".drawing">drawings</a></li>
			<li class="hidden-phone"><a href="#interior" data-filter=".interior">interiors</a></li>
			<li class="visible-phone"><a href="/" class="active">works</a></li>
			<li><a>/</a></li>
		</ul>
		<?php print render($page['header']); ?>
	</div>
</div>
	
<div class="container-fluid" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="content">
  
    <?php //print $messages;?>
    <?php include('iso.inc'); ?>
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