// |------------------------------------------------------
// |------------------------------------------------------
// | Tabs JS v1.0.0
// | http://www.wallaceerick.com.br/
// | Copyright (c) 2016 Wallace Erick
// |------------------------------------------------------
// |------------------------------------------------------

$(document).ready(function() {

	// Cached selectors
	var tabs 		  = $('.js-tabs'),
		tabButton 	  = tabs.find('.tabs-menu a'),
		tabContent 	  = tabs.find('.tab-content');

	// Show the tab
    tabButton.click(function(event) {
        event.preventDefault();

        // Get tab ID to show
        var tab = $(this).attr('href');

        // Add current class to clicked tab
        $(this).parent().addClass('current');
        
        // Remove current class from the other tabs.
        $(this).parent().siblings().removeClass('current');
        
        // Hide all tabs
        tabContent.not(tab).css('display', 'none');

        // Show the clicked tab
        $(tab).fadeIn(300);
    });
    
});