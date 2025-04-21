/*
	Author: boom-theme
	Version: 1.0
*/


(function ($) {
"use strict";


gsap.config({
	nullTargetWarn: false,
});



// smooth scroll activation start

const lenis = new Lenis({
	duration: .7, 
	easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), 
	direction: 'vertical', 
	smooth: true, 
	smoothTouch: false, 
});
  
function raf(time) {
	lenis.raf(time);
	requestAnimationFrame(raf);
}

requestAnimationFrame(raf);
$('a[href^="#"]').on('click', function (e) {
	e.preventDefault(); 

	const target = $(this.getAttribute('href')); 

	if (target.length) {
		lenis.scrollTo(target[0], {
		duration: 1.2, 
		easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), 
		});
	}
});




// preloader
document.addEventListener("DOMContentLoaded", function () {

	let preloader = document.querySelector(".lw-preloader");

	window.addEventListener('load', function(){

		if (preloader) {
			preloader.classList.add("preloaded");
			setTimeout(function () {
				  preloader.remove();
			}, 1000 ) ;

		}

		CustomEase.create("ease1", "0.19, 1, 0.22, 1");
        
        if($('.hero-title').length) {
            var st = $(".hero-title");
            if(st.length == 0) return;
            gsap.registerPlugin(SplitText);
            st.each(function(index, el) {
                el.split = new SplitText(el, { 
                    type: "lines",
                    linesClass: "split-line"
                });
                gsap.set(el, { perspective: 400 });
    
    
                if( $(el).hasClass('hero-title') ){
                    gsap.set(el.split.lines, {
                        yPercent: 100,
                        opacity: 0,
                        ease: "Back.easeOut",
                    });
                }
    
                el.anim = gsap.to(el.split.lines, {
                    scrollTrigger: {
                        trigger: el,
                        start: "top 90%",
                    },
                    yPercent: 0,
                    opacity: 1,
                    ease: "Back.easeOut",
                    stagger: 0.2,
                    delay:1,
                });
            });
        }


		var heroImg = gsap.timeline({
				defaults: { 
					duration:1,
                ease: "ease1", 
			} 
		});
        heroImg.from(".px-hero-content-img img" , { yPercent: 100, delay: 1})
        heroImg.from(".px-hero-line" , { scaleX: 0, })


		var heroText = gsap.timeline({
				defaults: { 
					duration:1,
					ease: "Back.easeOut", 
				} 
		});
        heroText.from(".px-hero-content .logo" , { yPercent: 100, opacity: 0, delay: .8 })
        heroText.from(".px-hero-content .btn-wrap" , { yPercent: 100, opacity: 0,})
        

        if($('.wa-split-text-3').length) {
            var st = $(".wa-split-text-3");
            if(st.length == 0) return;
            gsap.registerPlugin(SplitText);
            st.each(function(index, el) {
                el.split = new SplitText(el, { 
                    type: "lines",
                    linesClass: "split-line"
                });
                gsap.set(el, { perspective: 400 });
    
    
                if( $(el).hasClass('wa-split-text-3') ){
                    gsap.set(el.split.lines, {
                        yPercent: 100,
                        opacity: 0,
                        ease: "Back.easeOut",
						
                    });
                }
    
                el.anim = gsap.to(el.split.lines, {
                    scrollTrigger: {
                        trigger: el,
                        start: "top 80%",
						invalidateOnRefresh: true,
                    },
                    yPercent: 0,
                    opacity: 1,
					duration: 1,
                    ease: "Back.easeOut",
                    stagger: 0.2,
                });
            });
        }

    
	})

});



$(window).scroll(function() {
	if ($(this).scrollTop() > 2){
	$('.wa-sticky-header-2').addClass('has-sticky');
	}
	else{
	$('.wa-sticky-header-2').removeClass('has-sticky');
	}
});

$(window).scroll(function() {
	if ($(this).scrollTop() > 300){
	$('.sticky_header_1').addClass('sticky1');
	}
	else{
	$('.sticky_header_1').removeClass('sticky1');
	}
});

// Toggle Offcanvas start
$('.offcanvas_toggle').on('click', function() {
    $('.overlay, .offcanvas_box_active').addClass('active');
});

$('.overlay, .offcanvas_box_close').on('click', function() {
    $('.offcanvas_box_active').removeClass('active');
    $('.overlay').removeClass('active');
});

$(document).on('keydown', function(event) {
    if (event.key === 'Escape') {
        $('.offcanvas_box_active').removeClass('active');
        $('.overlay').removeClass('active');
    }
});

$('.offcanvas_box_active a').on('click', function() {
    $('.offcanvas_box_active').removeClass('active');
    $('.overlay').removeClass('active');
});

// related-theme
$('.related-theme-btn , .related-theme-overlay').on('click', function() {
    $('.related-theme-overlay, .related-theme-area , .related-theme-btn').toggleClass('active');
});


$(document).on('keydown', function(event) {
    if (event.key === 'Escape') {
        $('.related-theme-area').removeClass('active');
        $('.related-theme-overlay').removeClass('active');
        $('.related-theme-btn').removeClass('active');
    }
});

$('.related-theme-area a').on('click', function() {
    $('.related-theme-area').removeClass('active');
    $('.related-theme-btn').removeClass('active');
    $('.related-theme-overlay').removeClass('active');
});

// mobile-menu
jQuery(".mobile-main-navigation li.dropdown").append('<span class="dropdown-btn"><i class="fa-solid fa-angle-right"></i></span>'),
	jQuery(".mobile-main-navigation li .dropdown-btn").on("click", function () {
		jQuery(this).hasClass("active")
		? (jQuery(this).closest("ul").find(".dropdown-btn.active").toggleClass("active"), jQuery(this).closest("ul").find(".dropdown-menu.active").toggleClass("active").slideToggle())
		: (jQuery(this).closest("ul").find(".dropdown-btn.active").toggleClass("active"),
			jQuery(this).closest("ul").find(".dropdown-menu.active").toggleClass("active").slideToggle(),
			jQuery(this).toggleClass("active"),
			jQuery(this).parent().find("> .dropdown-menu").toggleClass("active"),
			jQuery(this).parent().find("> .dropdown-menu").slideToggle());
});



// slideInUp
gsap.utils.toArray('.wa-fadeInUp').forEach((item) => {
	gsap.from(item, {
	  y: 30,
	  ease: "Back.easeOut",
	  autoAlpha: 0,
	  duration: 1,
	  scrollTrigger: {
		trigger: item,
		start: "top 90%",
		toggleActions: 'play none none reverse',
		markers: false,
	  },
	});
});

gsap.utils.toArray('.demo-skew').forEach((item) => {
	gsap.from(item, {
	  rotation: 7,
	  ease: "Back.easeOut",
	  autoAlpha: 0,
	  duration: 1,
	  scrollTrigger: {
		trigger: item,
		start: "top 90%",
		toggleActions: 'play none none reverse',
		markers: false,
	  },
	});
});

gsap.utils.toArray('.feature-scale').forEach((item) => {
	gsap.from(item, {
	  scale: .9,
	  ease: "Back.easeOut",
	  autoAlpha: 0,
	  duration: 1,
	  scrollTrigger: {
		trigger: item,
		start: "top 90%",
		toggleActions: 'play none none reverse',
		markers: false,
	  },
	});
});


// key-feature
var keyFeature = gsap.timeline({
    scrollTrigger: {
        trigger: ".px-key-feature-wrap",
        start: "top 70%",
        toggleActions: "play none none reverse",
        markers: false,
    },
    defaults: {
        ease: "ease1",
        duration: 1,
    },
})

keyFeature
.from(".px-key-feature-item .content", {
    yPercent: -100,
    stagger: .2,
})

// advanced-feature
var advanced = gsap.timeline({
    scrollTrigger: {
        trigger: ".px-advance-wrap",
        start: "top 60%",
        toggleActions: "play none none reverse",
        markers: false,
    },
    defaults: {
        ease: "ease1",
        duration: 1,
    },
})

advanced
.from(".px-advance-item:nth-of-type(1)", {
    xPercent: 100,
})
.from(".px-advance-item:nth-of-type(2)", {
    xPercent: 30,
},"<")
.from(".px-advance-item:nth-of-type(3)", {
    xPercent: -30,
},"<")
.from(".px-advance-item:nth-of-type(4)", {
    xPercent: -100,
},"<")


// features
var pxFeatures = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-features-1-img",
		start: "top 90%",  
		markers: false  
	},
	defaults: { 
		duration: 1,
		ease: "power4.out", 
	} //
});

pxFeatures.from(".px-features-1-img-1" , { yPercent: 50, })
pxFeatures.from(".px-features-1-img-5" , { yPercent: 100, opacity: 0 }, "<=.3")
pxFeatures.from(".px-features-1-img-2" , { yPercent: 100, opacity: 0 }, "<=.3")
pxFeatures.from(".px-features-1-img-3" , { yPercent: 100, opacity: 0 }, "<=.3")
pxFeatures.from(".px-features-1-img-4" , { yPercent: 100, opacity: 0 }, "<=.3")
pxFeatures.from(".px-features-1-img-6" , { yPercent: 100, opacity: 0 }, "<=.3")

// save 
var pxSave = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-save-1-card",
		start: "top 85%",  
        toggleActions: "play reverse play reverse",
        markers: false  ,
	},
	defaults: { duration: 1,
		ease: "Back.easeOut", 
    } 
});

pxSave.from(".px-sv1-card-slidedown" , { yPercent: 50,  })
pxSave.from(".px-sv1-card-slideup" , { yPercent: -50,  } , "<=")

// exclusive 
var pxExclusive = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-exclusive-wrap",
		start: "top 85%",  
        toggleActions: "play reverse play reverse",
        markers: false  ,
	},
	defaults: { 
        duration: .5,
        ease: "power1.out",
    } 
});

pxExclusive.from(".px-exclusive-item" , { rotationY: -90, stagger: .2 })

// inner-page 
var pxInnerPage = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-inner-page-wrap",
        toggleActions: "play reverse play reverse",
        scrub: 10,
        markers: false  ,
	},
});

pxInnerPage.to(".px-inner-page-col:nth-of-type(1)" , { yPercent: -50, })
pxInnerPage.from(".px-inner-page-col:nth-of-type(2)" , { yPercent: -50, },"<")
pxInnerPage.to(".px-inner-page-col:nth-of-type(3)" , { yPercent: -50, },"<")
pxInnerPage.from(".px-inner-page-col:nth-of-type(4)" , { yPercent: -50, },"<")



// inner-content
if (window.matchMedia("(min-width: 768px)").matches) { 
	gsap.to(".px-inner-page-content", {
		scrollTrigger: {
			trigger: ".px-inner-page-area",
			start: "top 10%", 
			end: "bottom 70%", 
			pin: ".px-inner-page-content", 
			pinSpacing: false,
			markers: false,
		}
	});
	
}



// support-shape 
var pxSupportShape = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-support-bg-shape",
		start: "top 90%",
        toggleActions: "play reverse play reverse",
        markers: false  ,
	},
});

pxSupportShape.from(".px-support-bg-shape svg path" , { xPercent: 150, stagger: .2 })


// support-img 
var pxSupportImg = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-support-img",
		start: "top 80%",
        toggleActions: "play reverse play reverse",
        markers: false  ,
	},
});

pxSupportImg.from(".px-support-img img" , { yPercent: 100, })
pxSupportImg.from(".px-support-img-2 " , { yPercent: 100, scale: 0,})
pxSupportImg.from(".px-support-img-3 " , { yPercent: 100, scale: 0,}, "<.2")



// footer-demo
var pxFooterDemo = gsap.timeline({
	scrollTrigger: {
		trigger: ".px-footer-img",
		start: "top 70%",
        toggleActions: "play reverse play reverse",
        markers: false  ,
	},
	defaults: { 
		duration: .5,
		ease: "power1.out", 
	}
});

pxFooterDemo.from(".px-footer-img-single img" , { yPercent: 100, stagger: -.5, })


/* 
	preloader-marquee-activation
*/
if($('.bs-preloader-logo').length) {
	$('.bs-preloader-logo').marquee({
		gap: 90,
		speed: 90,
		delayBeforeStart: 0,
		direction: 'left',
		duplicated: true,
		pauseOnHover: false,
		startVisible:true,
	});
}



// slide-text-1
if($('.lw-marquee-text-1').length) {
	$('.lw-marquee-text-1').marquee({
		gap: 72,
		speed: 80,
		delayBeforeStart: 0,
		direction: 'down',
		duplicated: true,
		pauseOnHover: false,
		startVisible:true,
	});
}


/* 
	primary-button-1-animation
*/
if ($(".bs-btn-1").length) { 
	$('.bs-btn-1')
	.on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
			  relX = e.pageX - parentOffset.left,
			  relY = e.pageY - parentOffset.top;
			$(this).find('.shape').css({top:relY, left:relX})
	})
	.on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
			  relX = e.pageX - parentOffset.left,
			  relY = e.pageY - parentOffset.top;
		$(this).find('.shape').css({top:relY, left:relX})
	});
}


// bootstrap-tooltip
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})

// counter-activation
$('.counter').counterUp({
	time: 2000
});

/* back-to-top */
var backtotop = $('.scroll_top');

backtotop.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({scrollTop:0}, '700');
});


/* data-bg-activation */
$("[data-background]").each(function(){
	$(this).css("background-image","url("+$(this).attr("data-background") + ") ")
})


// wow-activation
if($('.wow').length){
	var wow = new WOW(
	{
		boxClass:     'wow',
		animateClass: 'animated',
		offset:       0,
		mobile:       true,
		live:         true
	}
	);
	wow.init();
};



if ($('.copyright-year').length) {
    const currentYear = new Date().getFullYear();
    $('.copyright-year').text(currentYear);
}


})(jQuery);