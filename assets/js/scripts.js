(function($) {
	'use strict';

	$(document).ready(function(){

		/*Start Menu JS*/		
		$(window).on('scroll', function(){
			if ( $(window).scrollTop() > 100 ) {
				$('.site-navigation, .header-white, .header').addClass('navbar-fixed');
			} else {
				$('.site-navigation, .header-white, .header').removeClass('navbar-fixed');
			}
		});	

		var url = window.location;
	        $('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');
	        $('ul.navbar-nav a').filter(function() {
	             return this.href == url;
	        }).parent().addClass('active');

	     $('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();

			}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();

			});

			$('.navbar .dropdown > a').click(function(){
			location.href = this.href;
			});			
		/*End Menu JS*/



		/*Start Preloader JS*/
			$(window).on('load', function() {  
				$('.spinner').fadeOut();
				$('.preloader').delay(350).fadeOut('slow'); 
			}); 
		/*End Preloader JS*/

		/* Home slider js */
		$('.single-slider').owlCarousel({
		    loop:true,
		    margin:10,
		    nav:true,
		    autoplay: true,
		    navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],
		    items:1,
		})
		/* Home slider js end */

		/* Start Scrool To Top*/
	  	$(window).on('scroll', function() {
	    	if ($(this).scrollTop() > 200) {
	      		$('.go-top').fadeIn(200);
	    	} else {
	      		$('.go-top').fadeOut(200);
	      	}
	  	});
  	
	    // Animate the scroll to top
	    $('.go-top').on('click', function(event) {
	        event.preventDefault();
	        $('html, body').animate({scrollTop: 0}, 300);
	    })
	    /* End Scroll To Top */
	  	
	    // Counter Start
	    // $('.counter').counterUp({
	    //     delay: 20,
	    //     time: 2000
	    // });
	    /* Counter end */


	});

})(jQuery);