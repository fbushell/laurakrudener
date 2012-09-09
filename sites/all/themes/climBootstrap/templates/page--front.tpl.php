<div id="splash">
	<div class="container">
		<img src="/sites/all/themes/climBootstrap/images/splash.png" />
	</div>
</div>

<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<div class="row">
				<div class="span5">
			    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
			      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
			    </a>
		    </div>
		    <div id="nav-region">
					<ul id="iso-filters">
						<li><a href="#" class="selected" data-filter="*">all</a></li>
						<li><a href="#paintings" data-filter=".painting">paintings</a></li>
						<li><a href="#drawings" data-filter=".drawing">drawings</a></li>
						<li><a>/</a></li>
					</ul>
					<?php print render($page['header']); ?>
				</div>
    	</div>
  	</div>
	</div>
</div>
	

<div class="container" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="content">
    <?php print $messages; ?>
    <?php include('iso.inc'); ?>
</div>

<footer id="footer">
  <div id="social-wrap">
  		<ul id="social">
        <li><a href="#"><img src="/sites/all/themes/climBootstrap/images/social/twitter.png" /></a></li>
        <li><a href="#"><img src="/sites/all/themes/climBootstrap/images/social/fb.png" /></a></li>
        <li><a href="#"><img src="/sites/all/themes/climBootstrap/images/social/pinterest.png" /></a></li>
        <li><a href="#"><img src="/sites/all/themes/climBootstrap/images/social/email.png" /></a></li>
       </ul>
  	</div>	
</footer> 