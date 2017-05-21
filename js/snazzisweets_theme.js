(function ($) {
  Drupal.behaviors.SnazziCookieJarLoad = {
    attach: function (context, settings) {
      // Do your thing here.
	  var pathname = window.location.pathname;
	  if (pathname.startsWith('/cookies'))
	  {
		var pathitems = pathname.split('/');
		if (pathitems.length > 2){
			var cookieFocused = $('#node-' + pathitems[2]);
			cookieFocused.addClass('snazzi-cookie-focused');
		}
	  }
	  
    }
  };
})(jQuery);