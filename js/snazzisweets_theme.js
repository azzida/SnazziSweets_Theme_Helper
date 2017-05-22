(function ($) {
  Drupal.behaviors.SnazziSweetsLoaded = {
    attach: function (context, settings) {
      // Do your thing here.
	  var pathname = window.location.pathname;
	  if (pathname.startsWith('/cookies') || pathname.startsWith('/cupcakes'))
	  {
		var pathitems = pathname.split('/');
		if (pathitems.length > 2){
			var itemFocused = $('#node-' + pathitems[2]);
			itemFocused.addClass('snazzi-focused');
		}
	  }
	  
	  $('a[href*=#]').fancybox({	
		
	  });
    }
  };
})(jQuery);