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
define( 'DB_NAME', 'afup' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'gY&cDaNfDO<x7eN !H}:9{s=.P>L n;;oIjN!W]X&j7Hwye=ia-R?KE.*o QukbH' );
define( 'SECURE_AUTH_KEY',  '@cl+%OfztW`&]I ]^[<ns^O%U#.EfhrrQ*Tah!?%Le~uJNy[8%=ac-k}y/r|X=3q' );
define( 'LOGGED_IN_KEY',    '!@>u(z?Vop(]>-# ~fo:<_>J6T(B,cM60@PCyZ8OhCLAAJq(0WOTKS4#0^:*yWhg' );
define( 'NONCE_KEY',        ')ZyC!_4xW{HnpNL2&(Zy719qKYHN:mG*%Bq!42KE_e!I(18h< t<n}Ag|Z{GRt|k' );
define( 'AUTH_SALT',        'cDPlPiKyt?[B0N+Q6KBUw,QiVcjE<UStlY6v.s5+UB4_RzbdLFFw<RaJ56ThVGaP' );
define( 'SECURE_AUTH_SALT', '>j)iG8}<BlBY/?skPNyEOn0XN8[j)!HQ..LHfW:P{2cLkE>{34W[20(}LC&y]K7S' );
define( 'LOGGED_IN_SALT',   ')Gtb,,[;G[.:GdP)6{_d{L%0US=i^msDB1)]sZ6gTl6~9ktnecK;]K#Rbyn;|pjI' );
define( 'NONCE_SALT',       ']P{Y2t7>Y?dF[<<at)d(]Z}8Epy:&wvV#x-[KD46S~#H?eG]P2?8zU<(h[!]n9kx' );
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
