<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wp_sydney');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y-.lRd|r-HIAT9G2+q~eU$#;Sey[c8GE=!*&C?=(zHn,#E|ymIQPffPOY9k./q<*');
define('SECURE_AUTH_KEY',  '3wpu#>v7s^CEGrec |8_Q~eSy`Pjv[~2nJ,:Z0KzuFW>86$xkCg`lT^gy_c+n?wR');
define('LOGGED_IN_KEY',    'Zd@-h++<i!>vX@@v[9MV23B-g+zTzg!_.m#L L$>Oj1|$4fSW+l_fi|!o{YnSJ^<');
define('NONCE_KEY',        '~[T|Ob/f@t|u9TKB*u~(.<=]7>3+HM ytp6n|n3Q}?-1;=8yr[suSN21!,,!d!bl');
define('AUTH_SALT',        '>[I9LD liMJtx06!kpc_:-DB?}thNLSp04VPsiX2.U`)]t4^?{.I~*>*k=xg{E)f');
define('SECURE_AUTH_SALT', 'Kn{/kgjd!Ob{TTwjrf^gsQ+:_u!Hl.~DfbG;*05KzjfEmi0wNeWin`qw9zzHyQ+!');
define('LOGGED_IN_SALT',   '^2+gxEoJ,,Bib0&3~2PVFEYs9$4W!H0g7p#-IH&BkI<F2/%>;73+adCm68(YNAY<');
define('NONCE_SALT',       '_L-@xo@o?{G0+idgd|(AK%ks&o/sDW!g~UUD7V.(Cyu-t B0>Dzw:GaZ6+ +0av|');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');