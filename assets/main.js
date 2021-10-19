const calcBannerHeight = function() {return Math.round(9 * (this.innerWidth / 16))}, // Calculate the banner height
toggleMenu = function(menu, nav) {
	if (!menu.classList.contains('opened')) {
		menu.classList.add('opened');
		nav.classList.add('opened')
	} else {
		menu.classList.remove('opened');
		nav.classList.remove('opened')
	}
},
animateHeader = function(header) {
	if (window.scrollY === 0) {
		// The top is reached
		header.classList.add('top')
	} else {
		// The top isn't reached
		header.classList.remove('top')
	}
},
closeError = function(btn) {
	const parent = btn.parentNode;
	parent.style['-webkit-animation-name'] = 'fadeOut';
	parent.style.animationName = 'fadeOut';
	parent.style.opacity = 0;
	setTimeout(function() {parent.style.display = 'none'}, 200)
}