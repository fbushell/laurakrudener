;(function( $, window, document, undefined ){
    

	$(window).load(function(){
	
	
		// Optimalisation: Store the references outside the event handler:
    var $window = $(window),
    		$container = $('#iso-container');
    		

		// fade in container
		$container.fadeIn('slow');
		
		$container.isotope({
			// options
			itemSelector : '.iso-item',
			
			resizable: false, // disable normal resizing
			
		  // set columnWidth to a percentage of container width
		  masonry: { columnWidth: $container.width() / checkWidth() }
		  
		});
		
		
		
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
		
		
		// update columnWidth on window resize
		$(window).smartresize(function(){
		
		  $container.isotope({
		  
		    // update columnWidth to a percentage of container width
		    masonry: { columnWidth: $container.width() / checkWidth() }
		    
		  });
		  
		});

		
	});
	

	
   // Function that checks width of page
  function checkWidth() {
  
  		var $window = $(window),
  				$windowsize = $window.width();

  		if ( $windowsize > 768 ) {
          
        //return 5;
        console.log("5");
        
      }

  
      if ( $windowsize < 767 ) {
          
        //return 3;
        console.log("3");

      }
          
      if ( $windowsize < 480 ) {
          
        //return 2;
        console.log("2");
        
      }
      
   }
 
		
  
}( jQuery, window, document ));