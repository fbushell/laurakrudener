<?php include('header.inc'); ?>

<div class="container" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div id="content-header">
    <?php if ($tabs): ?>
    	<div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
  </div> 
  <div class="page-content">
  	<?php include('about.inc'); ?>
  	<?php //print render($page['content']) ?>
  </div>
</div>
