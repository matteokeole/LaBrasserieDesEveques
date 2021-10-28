<!DOCTYPE html>

<html prefix="og: http://ogp.me/ns#" lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="La Brasserie des Évêques à Villeneuve-lès-Maguelone">
		<meta name="keywords" content="brasserie, évêques, yannick, bonnet, villeneuve, maguelone, villeneuve-lès-maguelone, bière, anouar, soufyani, mattéo, legagneux">
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
		<link rel="stylesheet" type="text/css" href="assets/css/products.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<!-- Ionicons -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<title>Nos produits • La Brasserie des Évêques • Villeneuve-lès-Maguelone</title>
	</head>

	<body>
		<!-- Header include -->
		<?php include "includes/header.php"; ?>

		<!-- Content -->
		<main>
			<span class="title">Nos bières</span>
			<section class="products">
				<div class="item amber">
					<img class="photo">
					<span class="subtitle color">AMBRÉE</span>
					<ul class="info">
						<li>33 cl et 75 cl</li>
						<li>Alcool : 6,0% Vol</li>
						<li>Style Pale Ale</li>
						<li>Amertume : 36 IBU (modérée)</li>
						<li>Malt Marris Otter</li>
						<li>Houblon Est Kent Golding</li>
						<li>Bière de fermentation basse</li>
						<li>Maltée fruits confits, pain d'épices et miel</li>
					</ul>
				</div>
				<div class="item blond">
					<img class="photo">
					<span class="subtitle color">BLONDE</span>
					<ul class="info">
						<li>33 cl et 75 cl</li>
						<li>Alcool : 5,6% Vol</li>
						<li>Style Lager</li>
						<li>Amertume : 28 IBU (modérée)</li>
						<li>Malt Pilsner</li>
						<li>Houblons Saaz/Amarillo</li>
						<li>Bière de fermentation haute à basse température</li>
						<li>Charpentée aux arômes d'agrumes</li>
					</ul>
				</div>
				<div class="item brown">
					<img class="photo">
					<span class="subtitle color">BRUNE</span>
					<ul class="info">
						<li>33 cl et 75 cl</li>
						<li>Alcool : 7,6% Vol</li>
						<li>Style Porter</li>
						<li>Amertume : 46 IBU (prononcée)</li>
						<li>Malt Marris Otter</li>
						<li>Houblons Est Kent Golding/Target</li>
						<li>Bière de fermentation basse</li>
						<li>Arômes boisés, chocolat, épices et pointe de cannelle</li>
					</ul>
				</div>
			</section>
		</main>

		<!-- Footer include -->
		<?php include "includes/footer.php"; ?>

		<!-- Scripts -->
		<script src="assets/main.js"></script>
		<script>
			const header = document.querySelector("header"),
			nav = document.querySelector("nav"),
			amber = document.querySelector(".amber .photo"),
			blond = document.querySelector(".blond .photo"),
			brown = document.querySelector(".brown .photo"),
			amberLoad = new Image(),
			blondLoad = new Image(),
			brownLoad = new Image();
			// Scroll animation
			animateHeader(header);
			addEventListener("scroll", function() {animateHeader(header)});
			// Menu toggler
			document.querySelector(".menu").addEventListener("click", function() {toggleMenu(this, nav)});
			// Load images
			amberLoad.addEventListener("load", function() {amber.src = this.src});
			blondLoad.addEventListener("load", function() {blond.src = this.src});
			brownLoad.addEventListener("load", function() {brown.src = this.src});
			amberLoad.src = "assets/images/amber.jpg";
			blondLoad.src = "assets/images/blond.jpg";
			brownLoad.src = "assets/images/brown.jpg"
		</script>
	</body>

</html>