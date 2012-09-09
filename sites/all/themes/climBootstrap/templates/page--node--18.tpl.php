<!-- ______________________ HEADER _______________________ -->
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
            <li><a href="<?php print $front_page; ?>">work</a></li>
          </ul>

	        <?php print render($page['header']); ?>

	    	</div>

	    	</div>
	  	</div>
		</div>
	</div>
	
	<!-- ______________________ MAIN _______________________ -->
<div class="container" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div id="content">

        <div id="content-header">
          <?php print $messages; ?>
        </div> <!-- /#content-header -->

        <?php include('blog-page-two.inc'); ?>

        <?php //print render($page['content']) ?>

  </div> <!-- /content -->	

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
      <?php print render($page['footer']); ?>
    </footer> 
  <?php endif; ?>
	
</div> <!-- /page -->

<script type="text/javascript">
	(function($){
	// Store our function as a property of Drupal.behaviors.
  Drupal.behaviors.frontIso = {
    attach: function (context, settings) {  
			$(window).load(function(){


				
				// cache container
				var $container = $('#iso-container');

				// fade in container
				$container.fadeIn('slow');
				
				$container.isotope({
	  			// options
	  			itemSelector : '.blog-iso-item',
				});

			}); // end window load function
		}
  }
}(jQuery));
</script>