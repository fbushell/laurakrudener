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
	  			itemSelector : '.iso-item',
				}

				);
				
        $filterLinks = $('#iso-filters').find('a');

	      $filterLinks.click(function(){
	        var $this = $(this);
	        // don't proceed if already selected
	        if ( $this.hasClass('selected') ) {
	          return false;
	        }
	        var $filters = $this.parents('#iso-filters');
	        $filters.find('.selected').removeClass('selected');
	        $this.addClass('selected');
				
				  var selector = $this.attr('data-filter');
				  $container.isotope({ filter: selector });
				  return false;
				});
				
			});
			
			
			
		}
  }
}(jQuery));