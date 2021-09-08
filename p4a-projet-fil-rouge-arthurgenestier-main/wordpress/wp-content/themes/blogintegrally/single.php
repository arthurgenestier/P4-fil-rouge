<?php
/**
 * Single
 *
 * @package blogintegrally
 */

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<h1 class="right-title"><?php the_title(); ?></h1>
		<article class="post post--single">
		<?php
					/* le code ci dessous permet de récupérer le nom et le slug de la catégorie de l'article en cours dans la boucle, il me permet aussi de construire l'URL vers cette catégorie*/ 
					$categories     = get_the_category(); /* on récupère grace à get_the_categories() un tableau (array) avec toutes les informations sur les catégories liées à l'article courant */
					// print_r($categories); /* décommenter cette ligne pour voir le contenu du tableau */
					$first_category = $categories[0]; /* on récupère uniquement la première catégorie de l'array */
					$category_name  = $first_category->name; /* on récupère le nom de la catégorie */ 
					$category_slug  = $first_category->slug; /* on récupère le slug de la catégorie */ 
					$category_link  = get_bloginfo( 'url' ) . '/category/' . $first_category->slug; /* on créé une l'URL vers notre page catégorie en assemlant (en concaténant) 1. l'URL du site (get_bloginfo('url')) 2. '/category/' 3. le slug de notre catégorie */
				?>
				<a href="<?php echo esc_html( $category_link ); ?>" class="post__category post__category--<?php echo esc_html( $category_slug ); ?>"><?php echo esc_html( $category_name ); ?></a>
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
					<time datetime="<?php echo get_the_date( 'Y-m-d' ); ?>"><?php echo 
					get_the_date(); ?></time>
					<?php if( get_field('temps_de_lecture') ): ?>
					 - Temps de lecture : <?php the_field('temps_de_lecture'); ?>mn
					<?php endif; ?>
				</p>
				<p class="post__text">
					<?php the_excerpt(); ?>
				</p>
				
			</p>
			<?php the_content(); ?>
			<!-- Articles de meme categorie
			on a besoin:
			-boucle custom
			-template tag

			boucle custom: aller cherche contenu selon certains critaire 
			independament du contexte.
			
			ex:
			- aller chercher le contenu d'une page sur single.php
			- aller chercher article sur page.php
			- article en avant dans header.php
			- ...

			parametres:
			- posts_per_page  => 3
			- orderby => 'rand'
			- category_name => $category_slug

			-->
			<h3>Ces articles peuvent aussi vous intéresser</h3>
			<ul>
			<?php 

			$related_posts_query = new WP_Query ( $args );

			if ( have_posts() ) : 
   				 while ( have_posts() ) : the_post(); 
				?>
				<li><a href=""></a>Article  date</li>
				<?php 
    			endwhile; 
			endif; 
			?>
			
			</ul>

		</article>
		<?php
endwhile;
endif;
get_footer();
