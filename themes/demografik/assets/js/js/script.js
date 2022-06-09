
/*====================================
	* Template Name		: Etherino | NFT HTML Marketplace
	* Author						: themetum
	* Version					: 1.0.0
	* Created					: 30 Oct, 2021
	* File Description		: JS Files
=====================================*/

(function ($) {
	"use strict";
	
	// preloader
	function preloader() {
		$('#preloader').delay(0).fadeOut();
	};

	$(window).on('load', function () {
		preloader();
	});
	 
	$(document).ready(function() {
	  $('.video-play-btn').magnificPopup({
		  type:'video',
		  });		
	});

	// ------------------------------------------------------------------------------ //
	// Toggle Profile
	// ------------------------------------------------------------------------------ //
		
	$(".header-transparent.sticky .action-nav").each(function(){  
		$(".img-otr", this).on("click", function(e){
			e.preventDefault();
			$(".profile-pop-otr").slideToggle();
		});
	});		 
	
	//Mobile Menu 

	/*=====| 2. Responsive Menu |=====*/

	  // main menu 
	  $('.main-menu-icon').click(function() {
		$('.menu').toggleClass('menu-open');
		$('.main-menu-icon').toggleClass('icon-cross');
		$('.menu ul').slideToggle();
		$('ul ul').css('display', 'none');
	  });
	  // Submenu
	  $('.menu ul li.has-children').click(function() {
		$(this).find('ul').slideToggle();
		$(this).siblings().find('ul').slideUp();
	  });

	  $(window).resize(function() {
		if($(window).width() > 1199) {
			$('ul').removeAttr('style');
		}
	  });



// scroll effect

$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$(".header--bottom").removeClass("sticky-bar");
	} else {
		$(".header--bottom").addClass("sticky-bar");
	}
});


	//  Tutor Carousel	

	$('.tutor-carousel').owlCarousel({		
		loop:true,	
		margin:15,	
		dots: false,		
		responsiveClass:true,	
		responsive:{
			0:{
				items:1,
				nav:true
			},
			768:{
				items:3,
				nav:true
			},
			1200:{
				items:4,
				loop:true,
				nav:true	
			}
		}
	});
	$('.passport-carousel').owlCarousel({
		loop:true,		
		margin:15,
		dots: false,			
		responsiveClass:true,	
		responsive:{
			0:{
				items:1,
				nav:true
			},
			768:{
				items:3,
				nav:true
			},
			1200:{
				items:3,
				loop:true,
				nav:true	
			}
		}
	});
	$('.stm_mobile__switcher').click(function(){
		$(this).toggleClass('active');
		$('.stm-header').toggleClass('active');
	})

// Authors Slider
	  
	$('.slick-slider-authors').slick({
		dots: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 10000,
		slidesToShow: 4,
		slidesToScroll: 2,
		prevArrow: '<i class="prev-arrow bx bx-left-arrow-alt"></i>',
		nextArrow: '<i class="next-arrow bx bx-right-arrow-alt"></i>',		
		responsive: [
			{
			  breakpoint:1200,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 2,
				infinite: true,
				dots: false,
				nav: true
			  }
			},
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 2
			  }
			},
			{
			  breakpoint: 660,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		]
	});  
	
// Collection slider
	  
	$('.slick-slider-area').slick({
		dots: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 10000,
		slidesToShow: 3,
		slidesToScroll: 2,
		prevArrow: '<i class="prev-arrow bx bx-left-arrow-alt"></i>',
		nextArrow: '<i class="next-arrow bx bx-right-arrow-alt"></i>',		
		responsive: [
			{
			  breakpoint:1200,
			  settings: {
				slidesToShow: 3,
				slidesToScroll: 2,
				infinite: true,
				dots: false,
				nav: true
			  }
			},
			{
			  breakpoint:1050,
			  settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint:767,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		]
	});  
	$(".top-seller-activation-1").slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        cssEase: "linear",
        adaptiveHeight: true,
        prevArrow:
          '<button class="slide-arrow prev-arrow"><i class="fa fa-arrow-left"></i></button>',
        nextArrow:
          '<button class="slide-arrow next-arrow"><i class="fa fa-arrow-right"></i></button>',
        responsive: [
          {
            breakpoint: 1499,
            settings: {
              slidesToShow: 5,
            },
          },
          {
            breakpoint: 1124,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            },
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              dots: false,
              arrows: false,
              centerMode: true,
              centerPadding: "20px",
            },
          },
        ],
	});
			
	// $(".top-seller-activation-2").slick({
    //     infinite: false,
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     dots: false,
    //     arrows: true,
    //     cssEase: "linear",
    //     adaptiveHeight: true,
    //     prevArrow:
    //       '<button class="slide-arrow prev-arrow"><i class="fa fa-arrow-left"></i></button>',
    //     nextArrow:
    //       '<button class="slide-arrow next-arrow"><i class="fa fa-arrow-right"></i></button>',
    //     responsive: [
    //       {
    //         breakpoint: 1499,
    //         settings: {
    //           slidesToShow: 4,
    //         },
    //       },
    //       {
    //         breakpoint: 1124,
    //         settings: {
    //           slidesToShow: 3,
    //           slidesToScroll: 1,
    //         },
    //       },
    //       {
    //         breakpoint: 991,
    //         settings: {
    //           slidesToShow: 3,
    //           slidesToScroll: 1,
    //         },
    //       },
    //       {
    //         breakpoint: 767,
    //         settings: {
    //           slidesToShow: 2,
    //           slidesToScroll: 1,
    //           dots: false,
    //           arrows: false,
    //           centerMode: true,
    //           centerPadding: "20px",
    //         },
    //       },
    //     ],
    //   });

	$('.top-seller-activation-2').owlCarousel({
		loop:false,		
		margin:15,
		dots: false,			
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			768:{
				items:3,
				nav:true
			},
			1200:{
				items:4,
				loop:true,
				nav:true	
			}
		}
	});
	$('.top-seller-activation-2').on('click', '.owl-item>div', function () {
		var id = $(this).data('uuid');
		var element = '#table_content_' + id;
		$('.tabs__content > .content_block').addClass('unvisible');
		$(element).removeClass('unvisible');
	});

	$('.content_block .inner_block').on('click', function () {
		const id = $(this).data('id');
		const inner_contents = document.querySelectorAll(".inner_content");
		console.log($(this).parents('.content_block'));
		if (!$(this).parents('.content_block')) {
			const inner_con = $(".inner_content");
			inner_con.each(function(index, element) {
				if (index == id) {
					$(this).removeClass('unvisible');
				} else {
					$(this).addClass('unvisible');	
				}
				
			});
		}
		
	});


// infografik carousel
$('.category-slider.owl-carousel').owlCarousel({
	loop:true,	
	margin:15,			
	responsiveClass:true,	
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	autoHeight: true,
	dots: true,
	autoPlay: 15000,
	stopOnHover : true,
	responsive:{
		0:{
			items:1,
		},
		768:{
			items:3,
			
		},
		1200:{
			items:3,
			loop:true,		
		}
	}
});
// -----------------------------------------------------
	// ------------------   CURSOR    ----------------------
	// -----------------------------------------------------
	$(function () {
		function mim_tm_cursor(){

		var myCursor	= jQuery('.mouse-cursor');

		if(myCursor.length){
			if ($("body")) {
			const e = document.querySelector(".cursor-inner"),
				t = document.querySelector(".cursor-outer");
			let n, i = 0,
				o = !1;
			window.onmousemove = function (s) {
				o || (t.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)"), e.style.transform = "translate(" + s.clientX + "px, " + s.clientY + "px)", n = s.clientY, i = s.clientX
			}, $("body").on("mouseenter", "a, .cursor-pointer", function () {
				e.classList.add("cursor-hover"), t.classList.add("cursor-hover")
			}), $("body").on("mouseleave", "a, .cursor-pointer", function () {
				$(this).is("a") && $(this).closest(".cursor-pointer").length || (e.classList.remove("cursor-hover"), t.classList.remove("cursor-hover"))
			}), e.style.visibility = "visible", t.style.visibility = "visible"
		}
		}
	};
	mim_tm_cursor();
	});

	/*------------------------
	   Scroll to top
	-------------------------- */
	$(function () {
			$(window).on('scroll', function(){
				if ($(this).scrollTop() > 400) {
					$('#back-to-top').fadeIn();
				} else {
					$('#back-to-top').fadeOut();
				}
			});
			});
			
	$('#back-to-top').on("click", function() {
		$('html, body').animate({scrollTop:0}, 'slow');
		return false;
	});


	// interactiv map carousel
	// Scroll Animation
	(function () {

		gsap.registerPlugin(ScrollTrigger);
		gsap.to(".creators_anim1:nth-child(2n)", {
			x: 500,
			duration: 3,
			scrollTrigger: {
				trigger: ".dribbble_svg",
				scrub: true
			}
		});

		gsap.to(".creators_anim1:nth-child(2n+1)", {
			x: -500,
			duration: 3,
			scrollTrigger: {
				trigger: ".dribbble_svg",
				scrub: true
			}
		});		

	}());

	$("#owl-partners").owlCarousel({

		autoPlay: 15000,
		loop:true,
		margin:10,
		dots:false,				
		responsiveClass:true,                    	
		responsive:{
			0:{
				items:1,
				nav:true
			},
			768:{
				items:3,
				nav:true
			},
			1200:{
				items:3,
				loop:true,
				nav:true	
			}
		}

	});

})(jQuery)	