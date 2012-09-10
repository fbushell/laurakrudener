<div class="container <?php print $classes; ?>"<?php print $attributes; ?> >
	 
	 <div class="row">
    <div class="span6"> 
    	<div id="logo">
	      <img src="/sites/all/themes/climBootstrap/images/logo.png"/>
	    </div>
  	</div>

    <div class="span6">
      <?php print $messages; ?>
      <?php print render($page['content']) ?>
    
    	<!--<span id="forgot"><a href="user/password">forgot your password?</a></span>-->
   	<div class="span6">
  </div>
</div> <!-- /page -->
