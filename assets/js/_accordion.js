// |------------------------------------------------------
// |------------------------------------------------------
// | Accordion JS v1.0.0
// | http://www.wallaceerick.com.br/
// | Copyright (c) 2016 Wallace Erick
// |------------------------------------------------------
// |------------------------------------------------------

$(document).ready(function(){

	// Cached selectors
	var accordion 		  = $('.js-accordion'),
		accordionButton   = accordion.find('.accordion-section-title'),
		accordionContent  = accordion.find('.accordion-section-content'),
		accordionMultiple = false;
	
	// Close all sections
	function closeAccordionSection() {
		accordionButton.removeClass('active');
		accordionContent.slideUp(300).removeClass('open');
	}

	// Open the section
	accordionButton.click(function(e) {
		var currentAttrValue = $(this).attr('href');

		if($(e.target).is('.active')){

			// Close all sections if is not multiple.
			if(accordionMultiple == false){
				closeAccordionSection();
			}
			
			// Close only the opened section if is mutiple.
			else {
				$(this).removeClass('active');
				$(this).next().slideUp(300).removeClass('open');
			}

		} else {

			// Close all sections if is not multiple.
			if(accordionMultiple == false){
				closeAccordionSection();
			}

			// Open the clicked section
			$(this).addClass('active');
			$('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
		}

		e.preventDefault();
	});

});