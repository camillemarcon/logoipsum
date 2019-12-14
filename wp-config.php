<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

define( 'WP_HOME', 'http://localhost/wordpress/');
define ( 'WP_SITEURL', 'http://localhost/wordpress/');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet-wp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H}$c%RZfrZe%&mP3GQKYVe]HTk?TL=0hE.`LrDbE8AH2`4{Pc21j]6p/twN+*w,H' );
define( 'SECURE_AUTH_KEY',  'U+*AEniG$_P}AGJAm;z_c;r%Q5Hyo#=&5v0yn$$h8sZbf0$)-Rmsxwl$aqa!M/ s' );
define( 'LOGGED_IN_KEY',    'N%v!{tl[^(ThpaLz6E1,oFcXR[{P/G~`d{vkPV++Wf= Hr y)ioo& =6J%f.ZV88' );
define( 'NONCE_KEY',        ',[NDCTn8q@1%5JEbvciMT$d?lG~7Q*v]6oF=OG#Dz4hmt3?C~V(|feFOn:OK@m=z' );
define( 'AUTH_SALT',        'u,LAsJYoF{hJUIt2Sob?ccm_A0gx:p;]gp|^*J&asYawly|xi+og9Z<{t&X?`!2V' );
define( 'SECURE_AUTH_SALT', '}e</Z/y>89;;2-IvluvE2ShovqAobb,*eIyjE`5z)/^PQC@J0]f`hmQkk+mw+|yP' );
define( 'LOGGED_IN_SALT',   'znmzQo3]7vh?fD,_,CjY0L8EYP]9)W!k,`{}WrL|myM):Ex|g~Il71NjW5~mdaoL' );
define( 'NONCE_SALT',       'u!yY8{v:Jr_^+Lpgjad@vfCjKi_wK+guR.Zru366?;>u08xVK0x@__$Gx>jtgAqJ' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
