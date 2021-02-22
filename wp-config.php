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
//define( 'DB_NAME', 'iut-lens' );

/** Utilisateur de la base de données MySQL. */
//define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
//define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
//define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
//define( 'DB_CHARSET', 'utf8mb4' );

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'youce1238751_1uazp' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'youce1238751_1uazp' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'IUTwebsite2021' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', '185.98.131.93' );

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
define( 'AUTH_KEY',         ']LC144zSP]QCqu:>zoJE:ks{IRnT>% :w{qLDa 1#}8UYP$K:}&0rrfr$ltC2TAV' );
define( 'SECURE_AUTH_KEY',  '89O htzwPm8gNDRqgennkD%.W?**Q)}Y=E/tCnv9<4FgV2/NzFBVq5xre~N98E7N' );
define( 'LOGGED_IN_KEY',    '_Y-@9haSi9VG4|HO0Sg*)c$?&SVAkkBL+nl*1CwZ=zImIt+$QbtH;KF`uh!)CB(Y' );
define( 'NONCE_KEY',        'fF%148TP871j!n{bO@(T>, @6P<Im07Gr<usRD2O(r25F36n]xP;WFzx.7rAA%p:' );
define( 'AUTH_SALT',        'G0)KRf0*^<7V^VX%K=5=uG9ZPFA[_M+nnonzAm;eWg%Tzk}[:(}7nvV3(-B?1Evv' );
define( 'SECURE_AUTH_SALT', '5L3@=B]$T+:va/C+;8@ra}E~2SvJk,SC)V<_B#${C<_hB$9bVdf2bG;`&NlL}o2}' );
define( 'LOGGED_IN_SALT',   '.g^J]L}l[j.m3#w]J2&N*Chsj*tsU+0}2S(MTACv>>wxjiodPSx<Iv6d*Ippz1~$' );
define( 'NONCE_SALT',       '7$L N0bJn(i9C[d3eD&)/i>xH1:?pTo`uCX#ia?qF(1Vmiguw%Al@cJNe: ?XrW~' );
define( 'WP_POST_REVISIONS', false );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'iut_';

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
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
