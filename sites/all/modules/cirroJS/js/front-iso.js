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
			layoutMode: 'masonry',
			filter: ':not(.installation)'
		});

		$filterLinks = $('#iso-filters').find('a');

		$filterLinks.click(function(){
      // get href attr, remove leading #
		  var href = $(this).attr('href').replace( /^#/, '' ),
		      // convert href into object
		      // i.e. 'filter=.inner-transition' -> { filter: '.inner-transition' }
		      option = $.deparam( href, true ),
		      $this = $(this);

		  $filterLinks.removeClass('selected');
		  $this.addClass('selected');

		  // set hash, triggers hashchange on window
		  $.bbq.pushState( option );
		  return false;
		});

		$(window).bind( 'hashchange', function( event ){
		  // get options object from hash
		  var hashOptions = $.deparam.fragment();
		  // apply options from hash
		  $container.isotope( hashOptions );
		})
	  // trigger hashchange to capture any hash data on init
	  .trigger('hashchange');
				
	

  //   $filterLinks.click(function(){
  //     var $this = $(this);
  //     // don't proceed if already selected
  //     if ( $this.hasClass('selected') ) {
  //       return false;
  //     }
      
  //     var $filters = $this.parents('#iso-filters');
  //     $filters.find('.selected').removeClass('selected');
  //     $this.addClass('selected');
		
		// 	var selector = $this.attr('data-filter');
		// 	$container.isotope({ filter: selector });
		// 	return false;
		// });
	});
  
}( jQuery, window, document ));