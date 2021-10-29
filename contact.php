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
		<link rel="stylesheet" type="text/css" href="assets/css/contact.css">
		<link rel="stylesheet" type="text/css" href="assets/css/map.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
		<!-- Ionicons -->
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
		<title>Nous contacter • La Brasserie des Évêques • Villeneuve-lès-Maguelone</title>
	</head>

	<body>
		<!-- Header -->
		<?php include "includes/header.php"; ?>

		<!-- Content -->
		<main>
			<h1 class="title">Nous contacter</h1>
			<div class="contact-container">
				<h2 class="subtitle">Coordonnées</h2>
				Yannick Bonnet<br>
				<a href="mailto:yannick.bonnet@free.fr" class="mail" title="Envoyer un mail via Gmail">yannick.bonnet@free.fr</a><br>
				<a href="tel:0668922080" class="phone" title="Appeler">06 68 92 20 80</a>
			</div>
			<div class="form-container">
				<form method="POST">
					<h2 class="subtitle">Une question ?</h2>
					<span class="required-fields">Les champs marqués d'un * sont obligatoires.</span><br>
					<input type="text" name="first_name" placeholder="Prénom *" required autocomplete="off">
					<input type="text" name="last_name" placeholder="Nom *" required autocomplete="off"><br>
					<input type="email" name="email" placeholder="E-mail *" required>
					<input type="tel" name="tel" placeholder="Téléphone" autocomplete="off"><br>
					<textarea name="message" placeholder="Votre message..."></textarea><br>
					<input type="submit" name="submit" value="Envoyer">
				</form>
				<?php
					if (!empty($_POST["submit"])) {
						$msg = $_POST["message"] . "<br>Téléphone : " . $_POST["tel"];
						$from = $_POST["first_name"] . " " . $_POST["last_name"] . " (" . $_POST["email"] . ")";
						$send = mail(
							"matteoo34@icloud.com",
							// "yannick.bonnet@free.fr",
							"La Brasserie des Évêques",
							$msg,
							"De " . $from
						);
						if ($send) {
							echo "<br>
								<div class='error valid'>
									<div class='content'>Votre message a bien été envoyé.</div>
									<button class='btn-close'>
										<ion-icon name='close-outline'></ion-icon>
									</button>
								</div>";
						} else {
							echo "<br>
								<div class='error invalid'>
									<div class='content'>Votre message n'a pas pu être envoyé.</div>
									<button class='btn-close'>
										<ion-icon name='close-outline'></ion-icon>
									</button>
								</div>";
						}
					}
				?>
			</div>
			<div class="map-container">
				<h2 class="subtitle">Nous trouver</h2>
				<p class="address">
					3 rue des Colibris<br>
					34750 Villeneuve-lès-Maguelone
				</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.368981082355!2d3.860306515493945!3d43.53634987912545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6b105fc04181b%3A0xab422ac69453757e!2sLa%20Brasserie%20des%20%C3%89v%C3%AAques!5e0!3m2!1sfr!2sfr!4v1617533972849!5m2!1sfr!2sfr" id="map" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</main>

		<!-- Footer -->
		<?php include "includes/footer.php"; ?>

		<!-- Scripts -->
		<script src="assets/main.js"></script>
		<script>
			// Prevent form to re-submit when refreshing
			if (this.history.replaceState) this.history.replaceState(null, null, this.location.href);
			// Animation on scroll
			animateHeader(header);
			addEventListener("scroll", function() {animateHeader(header)});
			// Dropdown menu button
			document.querySelector(".menu").addEventListener("click", function() {toggleMenu(this, nav)});
			// Mail status close button
			const confirmationCloseBtn = document.querySelector(".error .btn-close");
			if (confirmationCloseBtn) confirmationCloseBtn.addEventListener("click", function() {closeError(this)})
		</script>
	</body>

</html>