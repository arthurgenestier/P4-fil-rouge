<?php
/**
 * 404
 *
 * @package blogintegrally
 */

get_header();

?>

<h2 class="right-title">Page non trouvée. Erreur 404 ;)</h2>
<img src="http://localhost/p4a-projet-fil-rouge-arthurgenestier/wordpress/wp-content/uploads/2021/04/404-scaled.jpg" alt="pub peugeot 404" height="auto">

<?php
			/*
			get_search_form() charge le fichier searchform.php s'il existe
			sinon, il génère et affiche un formulaire de recherche
			*/
			get_search_form();
?>


<?php
get_footer();
