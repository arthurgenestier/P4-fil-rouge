<?php
/**
 * Header
 *
 * @package blogintegrally
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<!-- Emmet: header+main -->
		<header class="left" role="banner">
			<div class="screen-reader-text">
				<a href="#main">Aller au contenu</a>
			</div>
			<!-- Emmet: h1+h2+p+nav>ul>li*3>a -->
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<div class="introduction">
				<h2 class="introduction__title">Dernières nouveautés <span class="introduction__subtitle">de nos étudiants</span></h2>
				<p class="introduction__text">
					Le but de ce blog est de permettre aux étudiants de la formation Intégra11y de partager leurs sentiments, leurs hauts et leurs bas, leurs succès et leurs échecs, et ce, tout au long de la formation et même après.
				</p>
			</div>
			<!-- <nav class="menu" role="navigation">
				<ul class="menu__list">
					<li class="menu__item"><a href="index.html" class="menu__link" aria-current="page">Accueil</a></li>
					<li class="menu__item"><a href="la-formation.html" class="menu__link">La formation</a></li>
					<li class="menu__item"><a href="les-exercices.html" class="menu__link">Les exercices</a></li>
					<li class="menu__item"><a href="apres-la-formation.html" class="menu__link">Après la formation</a></li>
					<li class="menu__item"><a href="a-la-maison.html" class="menu__link">À la maison</a></li>
				</ul>
			</nav> -->

			<nav class="menu" role="navigation" aria-label="Menu de navigation principal">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'main-menu', /* identifiant de l'emplacement de menu à afficher */
						'container'      => false, /* supprimer le container (on s'en occupe dans le code HTML) */
						'menu_class'     => 'menu__list' /* permet d'ajouter une class au <ul> */
					)
				);
				?>
			</nav>
		</header>
		<div class="right">
			<main role="main" id="main">
