# Réinstaller un WordPress existant / importer une BDD

## Réinstaller un WordPress existant

1. Cloner le dépot (les fichiers)
2. Créer une base de données (avec Adminer) et un utilisateur dédié à cette BDD (https://github.com/integra11y-session1/P4a-J02-support-bdd)
3. Importer la sauvegarde de la BDD (`xxxx.sql`)
4. Vérifier dans le fichier `wp-config.php` (à la racine de l'installation de WordPress) les identifiants de connexion à la BDD
    - `define( 'DB_NAME', 'nom-de-la-bdd' );`
    - `define( 'DB_USER', 'nom-de-lutilisateur-de-la-bdd' );`
    - `define( 'DB_PASSWORD', 'mot-de-passe-utilisateur-bdd' );`
5. Vérifier dans la BDD, table `wp_options`, la cohérence des champs `siteurl` et `home`
6. Tester la connexion au back-office (http://url-de-votre-wordpress/wp-admin)
7. Dans le back-office, se rendre sur "Réglages" => "Permaliens" puis "Enregistrer les modifications" (sans rien toucher)

## Pour importer les fichiers de BDD depuis Adminer

:warning: la manipulation ci-dessous écrase votre BDD

1. Se rendre sur la base sur laquelle importer les données
2. Dans le menu à gauche, cliquer sur "Importer"
3. Au niveau de "Importer un fichier", chager le fichier bdd_xxxxxx.sql
4. Cliquer sur Exécuter

:warning: Bien penser à modifier les URL des champs `siteurl` et `home` dans la table `wp_options`

Pour se connecter avec cette BDD :
- utilisateur : `loris`
- mot de passe : `loris`

:warning: Afin de mettre à jour les permaliens, bien penser à aller sur Réglages => Permaliens puis `Enregistrer les modifications`
