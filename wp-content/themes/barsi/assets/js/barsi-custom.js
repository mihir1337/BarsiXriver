(function ($) {
	"use strict";

	// image background
	function bgImageActive($scope, $) {
		$("[data-background]").each(function () {
			$(this).css(
				"background-image",
				"url(" + $(this).attr("data-background") + ") "
			);
		});
	}

	// data-bg-color
	function bgColorActive($scope, $) {
		$("[data-bg-color]").each(function () {
			$(this).css("background-color", $(this).attr("data-bg-color"));
		});
	}

	// tx_service_lists
	function tx_service_lists($scope, $) {
		if ($(".bs-a1-active").length) {
			let bs_a1_active = new Swiper(".bs-a1-active", {
				loop: true,
				spaceBetween: 25,
				speed: 1000,
				slidesPerView: 3,
				autoplay: {
					delay: 5000,
				},
				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 3,
					},
					1200: {
						slidesPerView: 3,
					},
				},
			});
		}

		if ($(".bs-s1-active").length) {
			let bs_s1_active = new Swiper(".bs-s1-active", {
				loop: true,
				spaceBetween: 40,
				speed: 1000,
				slidesPerView: 4,

				autoplay: {
					delay: 5000,
				},

				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 3,
					},
					1200: {
						slidesPerView: 3,
					},
					1400: {
						slidesPerView: 4,
					},
					1600: {
						slidesPerView: 4,
					},
				},
			});
		}

		if ($(".bs-sh1-active").length) {
			let bs_sh1_active = new Swiper(".bs-sh1-active", {
				loop: true,
				speed: 500,
				slidesPerView: 1,
				navigation: {
					nextEl: ".lw-sh1-next",
					prevEl: ".lw-sh1-prev",
				},
				effect: "fade",
				fadeEffect: {
					crossFade: true,
				},
				autoplay: {
					delay: 4000,
				},
			});
		}

		// projects-3-slider
		if ($(".bs-p3-active").length) {
			let bs_p3_active = new Swiper(".bs-p3-active", {
				loop: true,
				speed: 1000,
				spaceBetween: 40,

				pagination: {
					el: ".bs-p3-pagi",
					clickable: true,
				},

				autoplay: {
					delay: 5000,
				},

				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 3,
					},
					1200: {
						slidesPerView: 3,
					},
					1400: {
						slidesPerView: 4,
					},
					1600: {
						slidesPerView: 4,
					},
				},
			});
		}

		if (window.matchMedia("(min-width: 992px)").matches) {
			$(".bs-core-features-1-area").hover(function () {
				$(this).find(".bs-core-features-1-item").addClass("active");
			});
		}
	}

	// tx_tabs
	function tx_tabs($scope, $) {
		// project-1-tabs-hover-active
		if ($(".bs-projects-1-tabs-btn .nav-link").length) {
			document
				.querySelectorAll(".bs-projects-1-tabs-btn .nav-link")
				.forEach((link) => {
					link.addEventListener("mouseenter", function () {
						const tabTrigger = new bootstrap.Tab(this); // Create a Bootstrap tab instance
						tabTrigger.show(); // Show the corresponding tab
					});
				});
		}
	}

	// tx_team_lists
	function tx_team_lists($scope, $) {
		// team-1-slider
		if ($(".bs-team1-active").length) {
			let bs_team1_active = new Swiper(".bs-team1-active", {
				loop: true,
				speed: 1000,
				spaceBetween: 18,
				centeredSlides: true,
				navigation: {
					nextEl: ".lw-team1-next",
					prevEl: ".lw-team1-prev",
				},
				breakpoints: {
					0: {
						slidesPerView: 1,
						spaceBetween: 18,
					},
					576: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 3,
					},
					1200: {
						slidesPerView: 4,
					},
					1400: {
						slidesPerView: 4,
					},
					1600: {
						slidesPerView: 5,
					},
				},
			});
		}

		if ($(".bs-team-5-active").length) {
			let bs_team_5_active = new Swiper(".bs-team-5-active", {
				loop: true,
				spaceBetween: 32,
				speed: 1000,

				autoplay: {
					delay: 5000,
				},

				navigation: {
					nextEl: ".slider-btn-right",
					prevEl: ".slider-btn-left",
				},

				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 3,
					},
					1200: {
						slidesPerView: 4,
					},
				},
			});
		}
	}

	// tx_testimonial
	function tx_testimonial($scope, $) {
		// testimonial-1-slider
		if ($(".bs-t1-comment-active").length) {
			let bsT1slider = new Swiper(".bs-t1-active", {
				loop: true,
				speed: 1000,

				effect: "fade",
				fadeEffect: {
					crossFade: true,
				},
			});

			let bs_t1_comment_active = new Swiper(".bs-t1-comment-active", {
				loop: true,
				speed: 1000,
				effect: "fade",
				fadeEffect: {
					crossFade: true,
				},

				autoplay: {
					delay: 4000,
				},

				pagination: {
					el: ".bs-t1-pagi",
					clickable: true,
				},
				thumbs: {
					swiper: bsT1slider,
				},
				on: {
					slideChangeTransitionStart: () => {
						bsT1sliderSplit();
					},
				},
			});

			function bsT1sliderSplit() {
				const currentSlide = document.querySelectorAll(
					".swiper-slide-active .bs-testimonial-1-item-comment"
				);

				const split = new SplitText(currentSlide, {
					type: "lines",
					linesClass: "split-line",
				});
				gsap.set(split.lines, {
					perspective: 2000,
					transformStyle: "preserve-3d",
				});
				gsap.set(split.lines, {
					y: 70,
					z: -75,
					rotationX: -120,
					opacity: 0,
				});

				gsap.to(split.lines, {
					opacity: 1,
					y: 0,
					z: 1,
					rotationX: 0,
					duration: 0.8,
					ease: "ease1",
					stagger: 0.3,
				});
			}

			bsT1sliderSplit();
		}

		// showcase-3-slider
		if ($(".bs-showc3-active").length) {
			let bs_showc3_active = new Swiper(".bs-showc3-active", {
				loop: true,
				speed: 1000,
				spaceBetween: 0,

				pagination: {
					el: ".bs-showc3-pagi",
					type: "fraction",
				},

				navigation: {
					nextEl: ".bs-showc-3-next",
					prevEl: ".bs-showc-3-prev",
				},
			});
		}

		// testimonial-5-slider
		if ($(".bs-t5-img-active").length) {
			let bsT5slider = new Swiper(".bs-t5-img-active", {
				loop: true,
				speed: 1000,

				effect: "creative",
				creativeEffect: {
					prev: {
						shadow: true,
						origin: "left center",
						translate: ["-5%", 0, -200],
						rotate: [0, 100, 0],
					},
					next: {
						origin: "right center",
						translate: ["5%", 0, -200],
						rotate: [0, -100, 0],
					},
				},

				pagination: {
					el: ".bs-t1-pagi",
					clickable: true,
				},
			});

			let slider = new Swiper(".bs-t5-content-active", {
				loop: true,
				speed: 1000,
				effect: "fade",
				fadeEffect: {
					crossFade: true,
				},

				autoplay: {
					delay: 4000,
				},

				thumbs: {
					swiper: bsT5slider,
				},
			});
		}


		// testimonial-2-slider
		if ($(".bs-t4-active").length) {
			let bs_t4_active = new Swiper(".bs-t4-active", {
				loop: true,
				speed: 1000,
				spaceBetween: 32,
				autoplay: {
					delay: 5000,
				},
				pagination: {
					el: ".bs-t4-pagination",
					type: "progressbar",
				},
				navigation: {
					nextEl: ".bs-t4-next",
					prevEl: ".bs-t4-prev",
				},
				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 1,
					},
					768: {
						slidesPerView: 1,
					},
					992: {
						slidesPerView: 2,
					},
					1200: {
						slidesPerView: 2,
					},
					1400: {
						slidesPerView: 3,
					},
					1600: {
						slidesPerView: 3,
					},
				},
			});
		}
	}

	// tx_hero_slider
	function tx_hero_slider($scope, $) {
		// hero-4-slider
		if ($(".bs-h4-img-active").length) {
			let bsH4imgSlider = new Swiper(".bs-h4-thum-active", {
				loop: true,
				spaceBetween: 16,
				speed: 1000,

				breakpoints: {
					0: {
						slidesPerView: 1,
					},
					576: {
						slidesPerView: 2,
					},
					768: {
						slidesPerView: 2,
					},
					992: {
						slidesPerView: 2,
					},
					1200: {
						slidesPerView: 3,
					},
				},
			});

			let slider = new Swiper(".bs-h4-img-active", {
				loop: true,
				speed: 1000,
				effect: "fade",
				fadeEffect: {
					crossFade: true,
				},

				autoplay: {
					delay: 4000,
				},

				pagination: {
					el: ".bs-t1-pagi",
					clickable: true,
				},

				thumbs: {
					swiper: bsH4imgSlider,
				},
			});
		}
	}

	// tx_service_section
	function tx_service_section($scope, $) {

		// services-5-slider
		if ($(".bs-s5-active").length) {
			let slider = new Swiper(".bs-s5-active", {
				loop: true,
				speed: 1000,
				effect: "fade",
				fadeEffect: {
					crossFade: true,
				},

				autoplay: {
					delay: 5000,
				},
			});
		}
	}

	// tx_gallery
	function tx_gallery($scope, $) {
		if($('.bs-sd-slider-1-active').length) {
			let bs_sd_slider_1_active = new Swiper('.bs-sd-slider-1-active', {
				loop: true,
				speed: 1000,
				effect: "creative",
				creativeEffect: {
					prev: {
					  shadow: true,
					  translate: [0, 0, -400],
					},
					next: {
					  translate: ["100%", 0, 0],
					},
				},
				navigation: {
					nextEl: ".sd-slider-right",
					prevEl: ".sd-slider-left",
				},
			});

			let bs_t5_content_active = new Swiper('.bs-t5-content-active', {
				loop: true,
				speed: 1000,
				effect: "fade",
				fadeEffect: {
					crossFade: true
				},
				autoplay: {
					delay: 4000,
				},
				thumbs: {
					swiper: bs_sd_slider_1_active,
				},
			});
		}
	}

	$(window).on("elementor/frontend/init", function () {
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_hero_section.default",
			function ($scope, $) {
				bgImageActive($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_service_lists.default",
			function ($scope, $) {
				tx_service_lists($scope, $);
				bgImageActive($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_testimonial.default",
			function ($scope, $) {
				tx_testimonial($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_team_lists.default",
			function ($scope, $) {
				tx_team_lists($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_hero_slider.default",
			function ($scope, $) {
				tx_hero_slider($scope, $);
				bgImageActive($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_about.default",
			function ($scope, $) {
				bgImageActive($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_service_section.default",
			function ($scope, $) {
				tx_service_section($scope, $);
				bgImageActive($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_pricing_tab.default",
			function ($scope, $) {
				bgImageActive($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_tabs.default",
			function ($scope, $) {
				tx_tabs($scope, $);
			}
		);
		elementorFrontend.hooks.addAction(
			"frontend/element_ready/tx_gallery.default",
			function ($scope, $) {
				tx_gallery($scope, $);
			}
		);
	});
})(jQuery);
