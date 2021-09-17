<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="La Brasserie des Évêques à Villeneuve-lès-Maguelone">
		<meta name="author" content="Anouar Soufyani, Mattéo Legagneux">
		<meta name="copyright" content="© 2021 La Brasserie des Évêques. Tous droits réservés.">
		<link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="favicon.png">
		<link rel="stylesheet" type="text/css" href="css/contact.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<script type="text/javascript" src="main.js"></script>
		<title>Nous contacter • La Brasserie des Évêques • Villeneuve-lès-Maguelone</title>
	</head>

	<body>
		<header>
			<a href="index.html" class="logo extended" title="La Brasserie des Évêques"></a>
			<a href="javascript:void(0)" class="menu" title="Menu"></a>
			<nav>
				<a href="index.html" title="Accueil"><span>ACCUEIL</span></a>
				<a href="produits.html" title="Nos produits"><span>NOS PRODUITS</span></a>
				<a href="atelier.html" title="Notre atelier"><span>FAITES VOTRE BIERE</span></a>
				<a href="" class="active" title="Nous contacter"><span>NOUS CONTACTER</span></a>
			</nav>
		</header>

		<main>
			<span class="title">Nous contacter</span>
			<section class="contact">
				<span class="subtitle">Coordonnées</span>
				Yannick Bonnet<br>
				<a href="mailto:yannick.bonnet@free.fr" class="mail" title="Envoyer un mail via Gmail">yannick.bonnet@free.fr</a><br>
				<a href="tel:0668922080" class="phone" title="Appeler">06 68 92 20 80</a>
			</section>
			<section class="form">
				<form method="POST">
					<span class="subtitle">Une question ?</span>
					<input type="text" name="first_name" placeholder="Prénom (requis)" required autocomplete="off">
					<input type="text" name="last_name" placeholder="Nom (requis)" required autocomplete="off"><br>
					<input type="email" name="email" placeholder="E-mail (requis)" required>
					<input type="tel" name="tel" placeholder="Téléphone (optionnel)" autocomplete="off"><br>
					<textarea name="message" placeholder="Message (requis)" required></textarea><br>
					<input type="submit" name="submit" value="Envoyer" title="Envoyer">
				</form>
				<?php
					if (!empty($_POST["submit"])) {
						$msg = $_POST["message"] . "\n" . "Téléphone : " . $_POST["tel"];
						$from = $_POST["first_name"] . " " . $_POST["last_name"] . " (" . $_POST["email"] . ")";
						$send = mail(
							// "yannick.bonnet@free.fr",
							"La Brasserie des Évêques",
							$msg,
							"De " . $from);
						if ($send) echo "<br><div class='error valid'><div class='content'>Votre message a bien été envoyé.</div><button class='close' onclick='close_error(this)' title='Fermer'></button></div>";
						else echo "<br>div class='error invalid'><div class='content'>Votre message n'a pas pu être envoyé.</div><button class='close' onclick='close_error(this)' title='Fermer'></button></div>";
					}
				?>
			</section>
			<section class="maps" style="margin-bottom: 0">
				<span class="subtitle">Nous trouver</span>
				<span class="address">3 rue des Colibris, 34750 Villeneuve-lès-Maguelone</span>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2892.368981082355!2d3.860306515493945!3d43.53634987912545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6b105fc04181b%3A0xab422ac69453757e!2sLa%20Brasserie%20des%20%C3%89v%C3%AAques!5e0!3m2!1sfr!2sfr!4v1617533972849!5m2!1sfr!2sfr" id="map" allowfullscreen="" loading="lazy"></iframe>
			</section>
		</main>

		<footer>
			<div class="links">
				<a href="mailto:yannick.bonnet@free.fr" class="mail" title="Envoyer un mail via Gmail">yannick.bonnet@free.fr</a>
				<a href="tel:0668922080" class="phone" title="Appeler">06 68 92 20 80</a>
				<a href="https://www.facebook.com/BrasseriedesEveques" target="_blank" rel="noopener norefferer" class="fb" title="Facebook"></a>
			</div>
			<span class="copyright">© 2021 La Brasserie des Évêques. Tous droits réservés.</span>
			<span class="creators">Conception du site : Anouar Soufyani et Mattéo Legagneux</span>
		</footer>

		<script type="text/javascript">
			const header = document.querySelector("header"),
			nav = document.querySelector("nav");
			// scrolling animation
			animate_header(header);
			this.addEventListener("scroll", function() {animate_header(header)});
			// menu toggler
			document.querySelector(".menu").addEventListener("click", function() {toggle_menu(this, nav)});
			if (this.history.replaceState) this.history.replaceState(null, null, this.location.href) // prevents form to re-submit when refreshing
		</script>
	</body>

</html>