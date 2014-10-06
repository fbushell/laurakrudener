<header class="main">
  <div id="logo">
    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
    </a>
  </div>

  <nav>
    <ul id="iso-filters">
      <li class="categories">Categories
        <ul>
          <li><a href="#" class="selected" data-filter="*">Everything</a></li>
          <li><a href="#painting" data-filter=".painting">Paintings</a></li>
          <li><a href="#drawing" data-filter=".drawing">Drawings</a></li>
          <li><a href="#interior" data-filter=".interior">Interiors</a></li>
          <li class="works-link"><a href="/" class="active">Works</a></li>
        </ul>
      </li>
      <li class="works-link"><a href="/">Works</a></li>
      <li>Follow
        <ul id="social">
          <li><a href="http://on.fb.me/RuJoOq" TARGET="_blank">Facebook</a></li>
          <li><a href="http://instagram.com/laurakrudener" TARGET="_blank">Instagram</a></li>
          <li><a href="http://bit.ly/NjJLcN" TARGET="_blank">Twitter</a></li>
          <li><a href="http://bit.ly/TA7qIz" TARGET="_blank">Pinterest</a></li>
          <li><a href="http://www.vimeo.com/laurakrudener" TARGET="_blank">Vimeo</a></li>
       </ul>
      </li>
    </ul>
    <?php print render($page['header']); ?>
  </nav>
</header>

<div class="container" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div id="content-header">
    <?php if ($tabs): ?>
    	<div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
  </div> 
  <div class="page-content">
  	<?php print render($page['content']) ?>
  </div>
</div>
