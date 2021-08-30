function toggle_menu(menu) {
	let nav = document.querySelector("nav");
	if (!menu.classList.contains("opened")) {
		menu.classList.add("opened");
		nav.classList.add("opened")
	} else {
		menu.classList.remove("opened");
		nav.classList.remove("opened")
	}
}