;(function( $, window, document, undefined ) {

	'use strict';

	var Cirro				= window.Cirro || {},
			$document   = $( document ),
			$window 	  = $( window );
		
	// The page singleton controller object
	var page = {

		init: function(){
			var self = this;
			self.$infoToggle    = $('.info-toggle');
			self.$toggleInfo    = $('.work-info');
			self.$zoom          = $('.zoom');
			self.$back					= $('.back-to-work');

			self.initZoom();

			self.$infoToggle.on('click', self.toggleInfo);
			self.$back.on('click', self.workHistory);
	},

	workHistory: function() {
		// use the window history to recover previous filter results
		window.history.back();
	},

	toggleInfo: function() {
		var self = page;
		self.$infoToggle.toggleClass('active');
		self.$toggleInfo.toggleClass('active');
	},

	initZoom: function() {
		var self = this;
		self.$zoom.panzoom({
			  minScale: 0.7,
  			maxScale: 2,
  			$zoomRange: $("input[type='range']")
		});
	}

};


	// Attach the object controller to the Cirro namespace
	Cirro.page = page;

	// Window load
	$window.load(function(){
		page.init();
		$('body').removeClass('loading');
	});

}( jQuery, window, document));


