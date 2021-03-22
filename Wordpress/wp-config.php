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
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Inel]Jou+08HdF{f0gxKd2q-@R9C/60];3my?Om$`jRu&3[,iNeH~JLxr><jc2T|' );
define( 'SECURE_AUTH_KEY',  '_/s&S:/Hd|gVPm<OUM9~ Zi5)4.q.`2n.Hv-^{{X<q{n08{`/%G` i*_$bxs`4$w' );
define( 'LOGGED_IN_KEY',    'I5eSbu9vB>&QD?AFfS<SquVENt67_5Z|$-5Zy0e<h5lpNBTy$v(AX Z@ARfT0)He' );
define( 'NONCE_KEY',        '>w-+~vi(#BD=-$&uq!QN:]@oo=c%bpk<S::2BxA63x#o]~4KO&7<Oi@WN+|!.e 6' );
define( 'AUTH_SALT',        '$VBPw2Sx6sish}n#|064)C;|YNb1ditgBL4a+JP2^:}eWg]{j}|pOxt#}+2bLkW7' );
define( 'SECURE_AUTH_SALT', 'pzHDM+im_/,h~c}mFB4.7S?.SF!_-k]:o.y/VN( Uzorjkvz&2E1u@lDI=/J~_W$' );
define( 'LOGGED_IN_SALT',   '/1!WiDHn*.RxRc4ihK:>c}N+gw:%qn=,Vcm-F2!s7A8HeSJ;MJJ#ps!|*<5G_p_A' );
define( 'NONCE_SALT',       'd.`(^hi0iRsLaT`4xld?;gfhKP$.Gn@wSIhYh!ZaJUy8M@k+~ jxKIy>Fz$6Q(ic' );
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
