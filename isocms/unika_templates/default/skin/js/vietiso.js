$(document).ready(function(){
    if($('.slider__home').length > 0){
		var $owl = $('.slider__home');
		$owl.owlCarousel({
			loop:true,
			nav: true,
			lazyLoad:true,
			dots:false,
			margin:0,
			autoplay:true,	
			autoplayTimeout:3000,	
			responsiveClass:true,
			animateOut: 'fadeOut',
  			animateIn: 'fadeIn',
			responsive:{
				0:{
					items:1,
					nav:false
				},
				1200:{
					items:1,
					nav:false
				}
			}
		});
	}
    if($('.slide_travel_style').length > 0){
		var $owl = $('.slide_travel_style');
		$owl.owlCarousel({
			loop:true,
			nav: true,
			lazyLoad:true,
			dots:false,
			navText:'',
			margin:15,
			autoplay:false,
			responsiveClass:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			responsive:{
				0:{
					items:1.3,
					margin:0,
                    loop:false,
				},
				580:{
					items:2,
					margin:15,
				},
				767:{
					items:2,
				},
				991:{
					items:3,
				}
			}
		});
	};
    if($('.owl_testimonial').length > 0){
		var $owl = $('.owl_testimonial');
		$owl.owlCarousel({
			loop:true,
			nav: false,
			lazyLoad:true,
			dots:false,
			navText:'',
			margin:35,
			autoplay:false,
			responsiveClass:true,
			responsive:{
				0:{
					items:1,
					margin:0,
				},
				580:{
					items:2,
					margin:15,
				},
				767:{
					items:3,
					margin:30,
				},
				991:{
					items:3,
					margin:20,
				},
				1023:{
					items:3,
					margin:30,
				},
				1200:{
					items:4
				}
			}
		});
	};
})
    
   
