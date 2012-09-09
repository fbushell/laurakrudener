;(function($){
	
	$(document).ready(function(){
		
		// Init
		var $container = $("#scroller");
		var countPath = "/scroller/count";
		
		// Count number of blog enteries
		$.ajax({
			
			url: countPath,
			success: function(data) {  
				
				// Init
				var limit = data.count;
				var increment = 2;
				
				
				
				//console.log(limit);
				
			},
			
		});
		
		
	});
	
}(jQuery)); 