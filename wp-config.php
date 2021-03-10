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
define( 'DB_NAME', 'Merchandizer' );

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
define( 'AUTH_KEY',         'x.1,zoTLug}HUm~L#2m@^y@l/&$%BBP07CtVS<3+-I#dA*X69*<oksH3{.4=wwUs' );
define( 'SECURE_AUTH_KEY',  'F9ZX>m7t|&Aihl*u@`4_gWir%r<);g;DCZ`|)u8hjTn.9,K<.oGjtekP=58^aIaT' );
define( 'LOGGED_IN_KEY',    'rIH)wg,0}j4#9P~:a&T>jj>|z!CsD=_v5mkg2[sjarmx)c*%aoiLl{w( {D@8*9J' );
define( 'NONCE_KEY',        'N4a4d/mbVKwe5?]{Hy1/~M@5?Gr^q) |/m5ikeu?x!),joLy]+n,%SOA]w4t,lAw' );
define( 'AUTH_SALT',        '3rym:3!6^bAT!2#4-1Y#-!ZI3JJ|.0:C[8k<LZ26pQM:_0P)eFw(u4pu+HzDwxJv' );
define( 'SECURE_AUTH_SALT', 'x-dFBj-oX5$nrtqEjm|,E4I_+KxypH%QyuV=zD{S](O&EmhZsAHUm6Y<Yk&sJ_A0' );
define( 'LOGGED_IN_SALT',   'ck+6pp>5?}#=ANLlg~w7uo->X`:^E=/c9Oo<xohBQ{_O=LytU%5-]g_W!m|4AM.7' );
define( 'NONCE_SALT',       'JPe(A(}{&`+ftsG%c3:iO2Gi2@$`i_=Kt7.jj>E`KU*W=nHT;nA@=x2Q5i*(| cy' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Mzd_';

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
