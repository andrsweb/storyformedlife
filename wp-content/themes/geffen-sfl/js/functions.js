jQuery(function ($) {
	// Header

	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		if (scroll > 75) {
			$("header").addClass("floating");
		} else {
			$("header").removeClass("floating");
		}
	});

	//
	// Testimonials
	//

	if ($(".testimonials .swiper-container").length) {
		new Swiper(".testimonials .swiper-container", {
			slidesPerView: 3,
			spaceBetween: 20,
			navigation: {
				nextEl: ".icon-arrow-right",
				prevEl: ".icon-arrow-left",
			},
			breakpoints: {
				999: {
					slidesPerView: 1,
				},
			},
			pagination: {
				el: ".testimonials .swiper-pagination",
			},
		});
	}

	//
	// Heros
	//

	if ($("section.hero").length) {
		$("section.hero h1").t({
			speed: 75,
			blink: false,
		});
	}

	//
	// Home
	//

	if ($("main.home").length) {
		const spaceHolder = document.querySelector(".space-holder");
		const horizontal = document.querySelector(".horizontal");
		spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;

		function calcDynamicHeight(ref) {
			const vw = window.innerWidth;
			const vh = window.innerHeight;
			const objectWidth = ref.scrollWidth;
			return objectWidth - vw + vh; // ul margin-right
		}

		window.addEventListener("scroll", () => {
			const sticky = document.querySelector(".sticky");
			horizontal.style.transform = `translateX(-${sticky.offsetTop}px)`;
		});

		window.addEventListener("resize", () => {
			spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;
		});
	}

	//
	// Navigate
	//
	const lerp = (x, y, a) => x * (1 - a) + y * a;

	if ($("main.join").length) {
		const spaceHolder = document.querySelector(".space-holder");
		const horizontal = document.querySelector(".stacks-inset");
		spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;

		function calcDynamicHeight(ref) {
			const vw = window.innerWidth;
			const vh = window.innerHeight;
			const objectWidth = ref.scrollHeight;
			return objectWidth - vh + vw; // ul margin-right
		}

		const observer = new IntersectionObserver(
			(entries) => {
				entries.forEach((entry) => {
					entry.target.style.opacity = entry.intersectionRatio;
					entry.target.style.filter = `blur(${lerp(
						10,
						0,
						entry.intersectionRatio
					)}px)`;
					entry.target.style.transform = `scale(${lerp(
						0.2,
						1,
						entry.intersectionRatio
					)})`;
				});
			},
			{
				root: document.querySelector(".stacks"),
				threshold: [...Array(300).keys()].map((x) => x / 300),
				rootMargin: "0px",
			}
		);

		const sticky = document.querySelector(".sticky");
		horizontal.style.transform = `translateY(-${sticky.offsetTop}px)`;
		const sections = document.querySelectorAll(".stacks-inset .item");

		for (let section of sections) {
			observer.observe(section);
		}

		window.addEventListener("scroll", () => {
			const sticky = document.querySelector(".sticky");
			horizontal.style.transform = `translateY(-${sticky.offsetTop}px)`;
		});

		window.addEventListener("resize", () => {
			spaceHolder.style.height = `${calcDynamicHeight(horizontal)}px`;
		});
	}
});
