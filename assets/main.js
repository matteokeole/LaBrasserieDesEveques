const header = document.querySelector("header"),
nav = document.querySelector("nav"),
toggleMenu = function(menu, nav) {
	// Show/hide dropdown menu (small screens)
	if (!menu.classList.contains("opened")) {
		menu.classList.add("opened");
		nav.classList.add("opened")
	} else {
		menu.classList.remove("opened");
		nav.classList.remove("opened")
	}
},
animateHeader = function(header) {
	// Change header background-color & box-shadow depending on the page scroll
	if (window.scrollY === 0) {
		// The top is reached
		header.classList.add("top")
	} else {
		// The top isn't reached
		header.classList.remove("top")
	}
},
closeError = function(btn) {
	// Close form submit confirmation
	const parent = btn.parentNode;
	parent.style["-webkit-animation-name"] = "fadeOut";
	parent.style.animationName = "fadeOut";
	parent.style.opacity = 0;
	setTimeout(function() {parent.style.display = "none"}, 200)
}