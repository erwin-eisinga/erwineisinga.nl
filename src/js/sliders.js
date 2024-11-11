// Import Swiper core module.
import Swiper from 'swiper';

// Import Swiper modules.
// eslint-disable-next-line import/no-unresolved
import { Navigation, Pagination, EffectFade } from 'swiper/modules';

// Configure Swiper to use modules.
Swiper.use([Navigation, Pagination, EffectFade]);

/**
 * Default slider
 */
export function initWorkSlider() {
	const swiper = document.querySelector('.section-work .swiper');

	if (!swiper) {
		return;
	}

	const workSlider = new Swiper(swiper, {
		speed: 500,
		fadeEffect: {
			crossFade: true,
		},
		init: true,
		slidesOffsetAfter: 0,
		slidesPerView: 'auto',
		loop: false,
		spaceBetween: 30, // px
		navigation: {
			nextEl: '.section-work .swiper-button-next',
			prevEl: '.section-work .swiper-button-prev',
		},
		pagination: {
			el: '.section-work .swiper-pagination',
			type: 'bullets',
		},
	});
}
