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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'colorblendstudio_database' );

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
define( 'AUTH_KEY',         'KDEEuy@|yj5 aR{Mk FBES(? ad+](k)_>mV`H4EU+Rca0&FGM{1:FfCgr@qc(aU' );
define( 'SECURE_AUTH_KEY',  'ufr)(FJ1=bFj)|A0v6BQ/q[O^(J#b`kJL1;BF#caezvucRRf3^Yskq(RuW4#m@u@' );
define( 'LOGGED_IN_KEY',    ',pI=]fD;*;fl[!),>OqR?2Ur8USXsNmf+xmd^OF$qT `z3|x1R#4`#JnCwyjvY._' );
define( 'NONCE_KEY',        '9py(EbywKy_Qi_CQv*3,sm%(clx:80gC[V-*hliK08>EJL_?]-$#V!_vueiF<+#L' );
define( 'AUTH_SALT',        'M>!34CDW~Uy=493n,eSLzr]q:`nV6T~|)Zhgy>33qrTict-[U~U|B+b $|.T{V@7' );
define( 'SECURE_AUTH_SALT', 'zF-jZWBGkh_q#p~(.4y|gg*wLC4E27k0s`wU}g-;W_XwfS$&a-.| 1H^ stnrrd2' );
define( 'LOGGED_IN_SALT',   ')iCtWt #H!bB8x&$/#y~i.Tz7fNNpy)<5,2jB6N=S%tk74v,-6F.V4f+^kjWuo[.' );
define( 'NONCE_SALT',       '@m0M/|{^hB+7spFRa1eu-cxCx&rcs^,Y0CmKKG[d)P]-i/5/}z4_$I H{14hq<Z<' );
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
