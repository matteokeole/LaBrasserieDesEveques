function calc_banner_height() {return Math.round(9 * (this.innerWidth / 16))}

function toggle_menu(menu, nav) {
	if (!menu.classList.contains("opened")) {
		menu.classList.add("opened");
		nav.classList.add("opened")
	} else {
		menu.classList.remove("opened");
		nav.classList.remove("opened")
	}
}

function animate_header(header) {
	if (window.scrollY <= 0) header.style.boxShadow = "none"; // top of the page
	else header.style.boxShadow = "0 10px 20px rgba(0, 0, 0, 0.2)"
}

function close_error(btn) {
	const parent = btn.parentNode;
	parent.style["-webkit-animationName"] = "fade_out";
	parent.style.animationName = "fade_out";
	parent.style.opacity = 0;
	setTimeout(function() {parent.style.display = "none"}, 200)
}