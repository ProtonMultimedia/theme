/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// import Swiper from 'swiper';
// import { Navigation, Pagination } from 'swiper/modules';
// import SlimSelect from 'slim-select';
// import AOS from 'aos';

document.addEventListener('DOMContentLoaded', () => {
	initMenuStickyCollapse();
	initMenuCollapse();
	isMobile();
	// initRealizationsSwiper();
	const swiper = new Swiper('.swiper', {
		loop: true,
		spaceBetween: 30,
		pagination: {
			el: '.swiper-pagination',
		},
		navigation: {
			nextEl: '.swiper-button-realizations-next',
			prevEl: '.swiper-button-realizations-prev',
		},
	});
});

AOS.init({
	disable: false,
	startEvent: 'DOMContentLoaded',
	initClassName: 'aos-init',
	animatedClassName: 'aos-animate',
	useClassNames: false,
	disableMutationObserver: false,
	debounceDelay: 50,
	throttleDelay: 99,

	offset: 200,
	delay: 0,
	duration: 400,
	easing: 'ease',
	once: true,
	mirror: false,
	anchorPlacement: 'top-bottom',
});
function isMobile() {
	return window.innerHeight < 1180;
}

function initMenuStickyCollapse() {
	const header = document.querySelector('header');
	const COLLAPSE_THRESHOLD = 50;

	let lastScrollY = 0;

	window.addEventListener('scroll', () => {
		if (document.body.classList.contains('overflow-hidden')) return;
		const currentScrollY = window.scrollY;

		header.classList.toggle(
			'header-collapsed',
			currentScrollY > COLLAPSE_THRESHOLD && currentScrollY > lastScrollY
		);

		lastScrollY = currentScrollY;
	});
}

function initMenuCollapse() {
	const toggleBtn = document.querySelector('[data-js="nav-toggle"]');
	const menuContainer = document.querySelector('[data-js="nav-container"]');

	let menuExpanded =
		toggleBtn.getAttribute('aria-expanded') === 'true' || false;

	toggleBtn.addEventListener('click', function () {
		menuExpanded = !menuExpanded;
		if (menuExpanded) {
			toggleBtn.setAttribute('aria-expanded', true);
			toggleBtn.querySelector('svg').classList.add('active');
			menuContainer.style.height = `calc(100dvh - ${menuContainer.offsetTop}px)`;
			menuContainer.style.background = 'rgba(17, 13, 37, 0.97)';
			document.body.classList.add('overflow-hidden');
		} else {
			toggleBtn.setAttribute('aria-expanded', false);
			toggleBtn.querySelector('svg').classList.remove('active');
			menuContainer.style.height = 0;
			document.body.classList.remove('overflow-hidden');
		}
	});
	menuContainer.querySelectorAll('a').forEach((link) => {
		link.addEventListener('click', () => {
			if (toggleBtn.getAttribute('aria-expanded') === 'true') {
				toggleBtn.setAttribute('aria-expanded', false);
				toggleBtn.querySelector('svg').classList.remove('active');
				menuContainer.style.height = 0;
				document.body.classList.remove('overflow-hidden');
				menuExpanded = false;
			}
		});
	});

	window.addEventListener('resize', () => {
		if (window.innerWidth >= 768) {
			toggleBtn.setAttribute('aria-expanded', false);
			toggleBtn.querySelector('svg').classList.remove('active');
			menuContainer.style.removeProperty('height');
			document.body.classList.remove('overflow-hidden');
		}
	});
}

function initRealizationsSwiper() {}
