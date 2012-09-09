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

			 $container.infinitescroll({
	        navSelector  : '#page_nav',    // selector for the paged navigation 
	        nextSelector : '#page_nav a',  // selector for the NEXT link (to page 2)
	        itemSelector : '.blog-iso-item',     // selector for all items you'll retrieve
	        loading: {
	            finishedMsg: 'No more pages to load.',
	            img: 'http://i.imgur.com/qkKy8.gif'
	          }
	        },

	      // call Isotope as a callback
	      function( newElements ) {
	        $container.isotope( 'appended', $( newElements ) ); 
	        }
	      );


			}); // end window load function
		}
  }
}(jQuery));