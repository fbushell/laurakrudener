;(function( $, window, document, undefined ) {

	'use strict';

	var Cirro				= window.Cirro || {},
			$document   = $( document ),
			$window 	  = $( window );
		
	// The page singleton controller object
	var page = {

		init: function(){
			var self = this;

			self.$infoToggle = $('.info-toggle');
			self.$toggleInfo = $('.work-info');
			self.$zoom = $('.zoom');

			self.initZoom();

			self.$infoToggle.on('click', self.toggleInfo);
	},

	toggleInfo: function() {
		var self = page;

		self.$toggleInfo.toggleClass('active');
	},

	initZoom: function() {
		var self = this;
		self.$zoom.zoomy({
 			// zoomSize : 200,
 			// round : 200,
 			// glare : 0,
 			// border : 'border: 1px solid #fff'
		});  
	}

};


	// Attach the object controller to the Cirro namespace
	Cirro.page = page;

	// Window load
	$window.load(function(){
		page.init();
	});

}( jQuery, window, document));


