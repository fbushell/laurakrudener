<?php include('header.inc'); ?>

<nav id="front-filters">
  <ul id="iso-filters">
    <li><a href="#" class="selected" data-filter="*">All</a></li>
    <li><a href="#painting" data-filter=".painting">Paintings</a></li>
    <li><a href="#drawing" data-filter=".drawing">Drawings</a></li>
    <li><a href="#interior" data-filter=".interior">Interiors</a></li>
  </ul>
</nav>
	
<div class="container-iso" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="content">
    <?php //print $messages;?>
    <?php include('iso.inc'); ?>
  </div>
</div>
