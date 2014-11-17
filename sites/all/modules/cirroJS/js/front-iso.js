;(function( $, window, document, undefined ){
  
	$(window).load(function(){

		var $menu = $('.menu');
	
	
		// Optimalisation: Store the references outside the event handler:
    var $window = $(window),
    		$container = $('#iso-container');

		// fade in container
		$container.fadeIn('slow');

		// Init Isotope
		$container.isotope({
			itemSelector : '.iso-item',
			layoutMode: 'masonry'
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
	});
  
}( jQuery, window, document ));