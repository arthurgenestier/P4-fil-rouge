<?php
/**
 * Home
 *
 * @package blogintegrally
 */

get_header();


?>
<!-- Emmet: h2+article*4>a+h3+p>img+em+time^p+a{Continue Reading} -->
<h2 class="right-title">Derniers articles</h2>
<div class="posts">
	<?php
	if ( have_posts() ) :
		while ( have_posts() ) :
			the_post();
			?>
			<article class="post">
				<?php
					/* le code ci dessous permet de récupérer le nom et le slug de la catégorie de l'article en cours dans la boucle, il me permet aussi de construire l'URL vers cette catégorie*/ 
					$categories     = get_the_category(); /* on récupère grace à get_the_categories() un tableau (array) avec toutes les informations sur les catégories liées à l'article courant */
					// print_r($categories); /* décommenter cette ligne pour voir le contenu du tableau */
					$first_category = $categories[0]; /* on récupère uniquement la première catégorie de l'array */
					$category_name  = $first_category->name; /* on récupère le nom de la catégorie */ 
					$category_slug  = $first_category->slug; /* on récupère le slug de la catégorie */ 
					$category_id    = $first_category->cat_ID;  /* on récupère l'id de la catégorie */ 
					$category_link  = get_bloginfo( 'url' ) . '/category/' . 
					$first_category->slug; /* on créé une l'URL vers notre page catégorie en assemlant (en concaténant) 1. l'URL du site (get_bloginfo('url')) 2. '/category/' 3. le slug de notre catégorie */
				?>
				<a style="background-color: <?php the_field('couleur_de_la_categorie', 'category_' . $category_id); ?>;" href="<?php echo esc_html( $category_link ); ?>" 
				class="post__category post__category--<?php 
				echo esc_html( $category_slug ); ?>"><?php 
				echo esc_html( $category_name ); ?>
				</a>
				<?php /* esc_html() permet d'échapper le HTML, c'est à dire l'ignorer lors de l'affichage de la variable */ ?>
				<h3 class="post__title"><?php the_title(); ?></h3>
				<p class="post__infos">
					<?php
						$author_id = get_the_author_meta( 'ID' ); /* permet de récupérer l'identifiant de l'auteur de l'article courant*/ 
						/* le code ci-dessous permet de générer l'image de l'avatar*/
						echo get_avatar(
							$author_id, /* identifiant de l'utilisateur */
							24, /* largeur et hauteur en px */
							'',
							'',
							array(
								'class' => 'post__author-pic', /* class de l'image générée */
							)
						);
					?>
					<em class="post__author"><?php the_author(); ?></em> le
					<time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo get_the_date(); ?></time>
				</p>
				<p class="post__text">
					<?php the_excerpt(); ?>
				</p>
				<a href="<?php the_permalink(); ?>" class="post__link" aria-label="Lire la suite : <?php the_title(); ?>">Lire la suite</a>
			</article>
					<?php
		endwhile;
	else :
		?>
		<p>Aucun article trouvé</p>
	<?php endif; ?>
</div>

<?php
/*
Permet de générer une pagination
attention : pas accessible par défaut
on va donc fournir des arguments pour la rendre accessible
https://developer.wordpress.org/reference/functions/the_posts_pagination/
https://make.wordpress.org/accessibility/handbook/markup/the-css-class-screen-reader-text/
*/

the_posts_pagination(
	array(
		'aria_label'         => 'Navigation des articles', /* gestion de l'attribut aria-label */
		'type'               => 'list', /* gestion de la structure HTML */
		'prev_text'          => '<span class="screen-reader-text">Articles </span>Précédents', /* gestion du texte "Précédent" */
		'next_text'          => '<span class="screen-reader-text">Articles </span>Suivants', /* gestion du texte "Suivant" */
		'before_page_number' => '<span class="screen-reader-text">Page </span>', /* gestion de l'intitulé des liens des pages */
	)
);
get_footer();

