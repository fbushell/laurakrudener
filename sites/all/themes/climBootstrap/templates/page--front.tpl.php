<?php include('header.inc'); ?>

<nav id="front-filters">
  <ul id="iso-filters">
    <li><a href="#filter=%3Anot(.installation)" class="selected" >All</a></li>
    <li><a href="#filter=.painting" >Paintings</a></li>
    <li><a href="#filter=.drawing" >Drawings</a></li>
    <li><a href="#filter=.installation" >Installation</a></li>
  </ul>
</nav>
	
<div class="container-iso" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="content">
    <?php //print $messages;?>
    <?php include('iso.inc'); ?>
  </div>
</div>
