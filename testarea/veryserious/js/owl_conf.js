	$(document).ready(function(){

		/*--------------Owl top---------------*/

		var owltop = $("#owltop");
		owltop.owlCarousel({
			loop:true,
			margin:10,
			nav:true,
			autoplay:true,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			items:5,
			responsiveClass: true,
			responsive:{
				0:{
					items:1,
					nav:false,
					autoplayTimeout: 6000
				},
				600:{
					items:3,
					nav:true
				},
				1000:{
					items:5,
					nav:true,
					loop:true
				}
			}
		});
		$('.play').on('click',function(){
			owltop.trigger('play.owl.autoplay',[1000])
		})
		$('.stop').on('click',function(){
			owltop.trigger('stop.owl.autoplay')
		})
		owltop.on('mousewheel', '.owl-stage', function (e) {
			if (e.deltaY>0) {
				owltop.trigger('next.owl');
			} else {
				owltop.trigger('prev.owl');
			}
			e.preventDefault();
		});

		/*----------Owl middle-----------*/

		var owlmid = $("#owlmid");

		owlmid.owlCarousel({
			loop:true,
			margin:10,
			items:1,
			autoplay:true,
			autoplayTimeout: 8000,
			responsiveClass: true,
			responsive:{
				0:{
					nav:false,
					autoheight:true
				},
				600:{
					nav:true
				},
				1000:{
					nav:true,
					loop:true
				}
			}

		});

		var owlpost =$("#owlpost");

		owlpost.owlCarousel({

			loop:true,
			items:1,
			autoplay:true,
			autoplayTimeout:8000,
		})
	});