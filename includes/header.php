<?php
	// Change the active link in the navbar
	$url = $_SERVER["REQUEST_URI"];
	$home = "";
	$products = "";
	$workshop = "";
	$contact = "";
	if (strpos($url, "index")) $home = "active";
	else if (strpos($url, "produits")) $products = "active";
	else if (strpos($url, "atelier")) $workshop = "active";
	else if (strpos($url, "contact")) $contact = "active";
?>
<!-- Header -->
<header class="top">
	<!-- Logo -->
	<a href="index.php" class="logo" title="La Brasserie des Évêques"></a>
	<!-- Dropdown menu toggler -->
	<a href="javascript:void(0)" class="menu" title="Menu">
		<ion-icon name="menu-outline" class="menu-open"></ion-icon>
		<ion-icon name="close-outline" class="menu-close"></ion-icon>
	</a>
	<!-- Navbar -->
	<nav>
		<a href="index.php" class="<?= $home; ?>" title="Accueil"><span>ACCUEIL</span></a>
		<a href="produits.php" class="<?= $products; ?>" title="Nos produits"><span>NOS PRODUITS</span></a>
		<a href="atelier.php" class="<?= $workshop; ?>" title="Notre atelier"><span>FAITES VOTRE BIERE</span></a>
		<a href="contact.php" class="<?= $contact; ?>" title="Nous contacter"><span>NOUS CONTACTER</span></a>
	</nav>
</header>