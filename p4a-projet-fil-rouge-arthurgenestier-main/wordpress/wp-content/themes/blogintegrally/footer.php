<?php
/**
 * Footer
 *
 * @package blogintegrally
 */

?>
</main>

<footer role="contentinfo">
	<!-- <ul class="footer-links">
		<li class="footer-links__item"><a class="footer-links__link" href="plan-du-site.html">Plan du site</a></li>
		<li class="footer-links__item"><a class="footer-links__link" href="mentions-legales.html">Mentions légales</a></li>
		<li class="footer-links__item"><a class="footer-links__link" href="nous-contacter.html">Nous contacter</a></li>
	</ul> -->
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'footer-menu', /* identifiant de l'emplacement de menu à afficher */
			'container'      => false, /* supprimer le container (on s'en occupe dans le code HTML) */
			'menu_class'     => 'footer-links' /* permet d'ajouter une class au <ul> */
		)
	);
	?>
</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>
