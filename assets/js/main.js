const header = document.querySelector("header"),
nav = document.querySelector("nav"),
menu = document.querySelector(".menu"),
toggleMenu = function() {
	// Show/hide dropdown menu (small screens)
	if (!menu.classList.contains("opened")) {
		// Closed menu
		menu.classList.add("opened");
		nav.classList.add("opened")
	} else {
		menu.classList.remove("opened");
		nav.classList.remove("opened")
	}
},
animateHeader = function() {
	// Change header background-color & box-shadow depending on how much the user has scrolled
	if (window.scrollY === 0) header.classList.add("top"); // Top reached
	else header.classList.remove("top")
};

// Event listeners
// Dropdown menu button
menu.addEventListener("click", toggleMenu);
// Animation on scroll
animateHeader();
addEventListener("scroll", animateHeader)