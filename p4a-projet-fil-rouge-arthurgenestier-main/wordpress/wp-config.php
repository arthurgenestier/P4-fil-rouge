<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'blog_integrally' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'blog_integrally' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'blog_integrally' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hv,JYk/=4I%3FX7A>=TCTSFsnzg8_KO` :=QD6u,IAdh3/upML#o;rW%B[X;BY-.' );
define( 'SECURE_AUTH_KEY',  'z^&jHMj<r`W{`N!(Et`bp}_BFNISk:&{mu!QW,%*P7$#twR]>^QRovzzS`JDR8Gn' );
define( 'LOGGED_IN_KEY',    'dr={HF7Z8uT-MV-jgr9djwDYpEK4!6YG=^kn@A]R!U/u>NAb2N!&}{glrP(=[<3.' );
define( 'NONCE_KEY',        'l0GjH^mw}0a#WfRrN};1{P&ln6FA,ltioGaaXHgA%GFOS83aWKL Onsn;^rCXZS-' );
define( 'AUTH_SALT',        '+GoYb^X:S4$`tz-0#RD.<@SdHee3cN?T4G*ny1UUT(0@AQde^Y7ZSUo8Kvze!=d[' );
define( 'SECURE_AUTH_SALT', '8FFDmLZvigc$6?C^>{ SP{#o}/3jF5hQB/#h*/W>L:<7}M+OfmM}/%Tp2v<3_YdL' );
define( 'LOGGED_IN_SALT',   'u@TZCP; U|s>^V{aw*?;tni+^I{l[lL+YkIJ?5f 2Mm8#U=<d14AVEMq)C.A}4t/' );
define( 'NONCE_SALT',       'l*K$=c-4I3<7d60Jybl#v<X.{R$;z84%L3!q_B`^0,&-JUz286(t9nZ,vxWfq?X&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
