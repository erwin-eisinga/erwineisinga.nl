// Animations
import { initWordAnimation } from "./animations";

// Sliders
import { initWorkSlider } from "./sliders";



window.addEventListener(
	'load',
	() => {
		// Animations.
		initWordAnimation();

		// Sliders.
		initWorkSlider();
	},
	{
		passive: true,
	}
);
