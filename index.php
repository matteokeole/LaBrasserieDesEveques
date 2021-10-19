<!--
	La Brasserie des Évêques, a brewery located at Villeneuve-lès-Maguelone, Hérault (34).
	GitHub repository: https://github.com/matteoo34/LaBrasserieDesEveques
	Made by Anouar Soufyani and Mattéo Legagneux
	Copyright (C) 2021
-->

<!DOCTYPE html>

<html prefix="og: http://ogp.me/ns#" lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="La Brasserie des Évêques à Villeneuve-lès-Maguelone">
		<meta name="keywords" content="yannick, bonnet, brasserie, évêques, villeneuve, maguelone, villeneuve-lès-maguelone, bière, anouar, soufyani, mattéo, legagneux">
		<meta name="author" content="Anouar Soufyani, Mattéo Legagneux">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta property="og:type" content="website">
		<meta property="og:url" content="https://brasseriedeseveques.000webhostapp.com">
		<meta property="og:site_name" content="La Brasserie des Évêques">
		<meta property="og:title" content="Accueil • La Brasserie des Évêques • Villeneuve-lès-Maguelone">
		<meta property="og:description" content="La Brasserie des Évêques à Villeneuve-lès-Maguelone">
		<meta property="og:image" content="assets/images/logo-extended.png">
		<meta name="twitter:card" content="summary_large_image">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<link rel="apple-touch-icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/banner.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<style>
			main {padding-top: 50px}
			main p:last-of-type {width: 100%}
		</style>
		<script src="assets/main.js"></script>
		<title>Accueil • La Brasserie des Évêques • Villeneuve-lès-Maguelone</title>
	</head>

	<body>
		<!-- Header include -->
		<?php include "includes/header.php"; ?>
		<!-- Banner container -->
		<div class="banner-container">
			<img src="assets/images/banner.jpg" alt="Bannière">
		</div>
		<!-- Banner titles (not into the banner container for a better parallax effect) -->
		<div class="banner-title">
			<ion-icon name="beer" class="beer"></ion-icon>
			<h1 class="title">La Brasserie des Évêques</h1>
			<h2 class="subtitle">Bières artisanales</h2>
		</div>
		<!-- Content -->
		<main>
			<!-- Article titles (for small screens) -->
			<div class="main-title">
				<ion-icon name="beer" class="beer"></ion-icon>
				<h1 class="title">La Brasserie des Évêques</h1>
				<h2 class="subtitle">Bières artisanales</h2>
			</div>
			<!-- Content -->
			<h1 class="title">Bienvenue</h1>
			<p>
				En quelques années, les pionniers du brassage maison ont su donner une âme à la bière. L'eau, le malt, le houblon sont devenus sources d'inspiration et d'expérimentations de brasseurs passionnés. Saveurs, arômes et robes se déclinent à l'infini. Les bières de terroir sont nées. Les nôtres sont maritimes. Nous habitons sur le littoral languedocien, près de l'île de Maguelone, d'où un puissant évêché a rayonné pendant mille ans.
			</p>
			<p>
				<span class="subtitle">Nos produits</span>
				Nous proposons des bières ambrées, blondes et brunes en vente à emporter,<br>tous les jours de 18h à 19h et le samedi de 10h à 19h.<br><a href="produits.php">Voir les produits</a>
			</p>
			<p>
				<span class="subtitle">Faites votre bière</span>
				Envie de faire vous-même votre bière ?<br>Participez à un atelier de brassage pour vous initier à l'élaboration d'une bière artisanale.<br><a href="atelier.php">En savoir plus</a>
			</p>
			<p><a href="contact.php" class="btn-contact">CONTACTEZ-NOUS</a></p>
			<img src="assets/images/workshop.jpg" alt="Notre atelier" class="workshop-photo">
		</main>
		<!-- Footer include -->
		<?php include "includes/footer.php"; ?>

		<!-- Scripts -->
		<script>
			const header = document.querySelector("header"),
			nav = document.querySelector("nav"),
			logo = document.querySelector(".logo"),
			banner = document.querySelector(".banner-container"),
			bannerImg = banner.querySelector("img"),
			bannerTitle = document.querySelector(".banner-title"),
			animation = function() {
				// Parallax effet and header animation (depending on the banner height)
				banner.style.top = `${window.scrollY / 1.5}px`;
				if (window.scrollY < bannerHeight) {
					// The top is reached
					header.classList.add("top");
					logo.classList.remove("extended")
				} else {
					// The top isn't reached
					header.classList.remove("top");
					logo.classList.add("extended")
				}
			};
			let bannerHeight;
			bannerImg.addEventListener("load", function() {
				bannerHeight = this.height;
				bannerTitle.style.height = `${bannerHeight}px`
			});
			// Change bannerHeight when the window is resized
			this.addEventListener("resize", function() {
				bannerHeight = bannerImg.height;
				bannerTitle.style.height = `${bannerHeight}px`;
				animation()
			});
			// Animation on scroll
			this.addEventListener("scroll", animation);
			// Dropdown menu button
			document.querySelector(".menu").addEventListener("click", function() {toggleMenu(this, nav)})
		</script>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>

</html>