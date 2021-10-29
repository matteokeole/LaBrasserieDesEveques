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
		<meta property="og:url" content="https://brasseriedeseveques.000webhostapp.com/atelier.html">
		<meta property="og:site_name" content="La Brasserie des Évêques">
		<meta property="og:title" content="Faites votre bière • La Brasserie des Évêques • Villeneuve-lès-Maguelone">
		<meta property="og:description" content="La Brasserie des Évêques à Villeneuve-lès-Maguelone">
		<meta property="og:image" content="https://brasseriedeseveques.000webhostapp.com/assets/images/logo-extended.png">
		<meta name="twitter:card" content="summary_large_image">
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<link rel="apple-touch-icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<link rel="stylesheet" type="text/css" href="assets/css/workshop.css">
		<style>
			main p:first-of-type {width: 100%}
		</style>
		<!-- Ionicons -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<title>Notre atelier • La Brasserie des Évêques • Villeneuve-lès-Maguelone</title>
	</head>

	<body>
		<!-- Header -->
		<?php include "includes/header.php"; ?>

		<!-- Content -->
		<main>
			<span class="title">Notre atelier</span>
			<p>
				Faites vous-même votre bière !<br>
				Nous proposons un atelier d'initiation au brassage.
			</p>
			<div class="workshop-details">
				<div class="card program">
					<div class="card-title">Programme</div>
					<div class="card-content">
						<span class="subtitle">Programme</span>
						<div class="list">
							<span><u>La théorie</u></span>
							<ul>
								<li>Présentation de la brasserie</li>
								<li>Les ingrédients</li>
								<li>Les réactions chimiques</li>
								<li>L'hygiène</li>
							</ul>
						</div>
						<div class="list">
							<span><u>La pratique</u></span>
							<ul>
								<li>Broyage des malts</li>
								<li>Pratique de l'empâtage</li>
								<li>Transfert du moût et ébullition</li>
								<li>Mise en fermentation</li>
							</ul>
						</div>
						<p>Les soutirages et les conditionnements sont réalisés à une date ultérieure.</p>
					</div>
				</div>
				<div class="card">
					<div class="card-title">Conditions</div>
					<div class="card-content">
						<span class="subtitle">Conditions</span>
						<ul class="list-large">
							<li>Réalisation d'un brassin de 30L</li>
							<li>2 à 3 stagiaires par session</li>
							<li>Durée de la session : 5h + 2h (3 semaines plus tard pour l'embouteillage)</li>
							<li>Horaires : 8h - 13h le samedi (+ 2h à convenir)</li>
							<li>La préparation et le nettoyage sont à notre charge</li>
							<li>Les ingrédients sont fournis et les bouteilles sont consignées</li>
							<li>Récupération des lots embouteillés un mois après la session</li>
						</ul>
					</div>
				</div>
				<div class="card">
					<div class="card-title">Formules</div>
					<div class="card-content">
						<span class="subtitle">Formules</span>
						<div class="formula" style="float: left">
							<span><u>Pour 2 personnes</u></span><br>
							<span class="price">158€</span><br>
						</div>
						<div class="formula" style="float: right">
							<span><u>Pour 3 personnes</u></span><br>
							<span class="price">198€</span>
						</div>
					</div>
				</div>
			</div>
			<div class="interest">
				<p>Vous êtes intéressé(e) ?</p>
				<a href="contact.php" class="btn-contact">CONTACTEZ-NOUS</a>
			</div>
		</main>

		<!-- Footer -->
		<?php include "includes/footer.php"; ?>

		<!-- Scripts -->
		<script src="assets/js/main.js"></script>
		<script>
			// Animation on scroll
			animateHeader(header);
			addEventListener("scroll", function() {animateHeader(header)});
			// Dropdown menu button
			document.querySelector(".menu").addEventListener("click", function() {toggleMenu(this, nav)});
		</script>
	</body>

</html>