function animate_header() {
	let header = document.querySelector("header");
	if (window.scrollY <= 0) header.style.boxShadow = "none"; // top of the page
	else header.style.boxShadow = "0 10px 20px rgba(0, 0, 0, 0.2)"
}