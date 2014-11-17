;(function( $, window, document, undefined ) {

	'use strict';

	var Cirro				= window.Cirro || {},
			$document   = $( document ),
			$window 	  = $( window );
		
	// The page singleton controller object
	var page = {

		init: function(){
			var self = this;
			self.$body 					= $('body');
			self.$navToggle     = $('#nav-toggle');
			self.$mobileOverlay = $('#mobile-overlay');

			self.$navToggle.on('click', self.toggleNav);
	},

	toggleNav: function() {
		page.$body.toggleClass('mobile-nav-active');
	},

	checkNav: function() {
		var self = this;
		if (self.windWidth > 630) {return;}
		if (self.windWidth > 600) {
			page.$body.removeClass('mobile-nav-active');
		}
	},

};


	// Attach the object controller to the Cirro namespace
	Cirro.page = page;

	// Window load
	$window.load(function(){
		page.init();
	});

	// Window resize
	$window.resize(function(){
		page.checkNav();
	});

}( jQuery, window, document));


