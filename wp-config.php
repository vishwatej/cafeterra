<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */


define('FS_METHOD','direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cafeterra');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '`5XQ:&-R2DG9|z/y%-}*Coz}-=;%` [&:x-<~Y5AL`OjM^:B3^fhK,bb47MK$%?b');
define('SECURE_AUTH_KEY',  '<)tFXqds2DSTVDE@@z4g,sV5EWA+&R6-t]-9(A_ ,w1amFCffk} AxT{o#o:fX(O');
define('LOGGED_IN_KEY',    '|Sd: eF,4QxDdoBm$sEtki$2j%aZ{sK%s3pl~C:as1655_p|~[ba5QQj7`v5=v6-');
define('NONCE_KEY',        '>*=N|fA>.Q.zEBW0=r+eny(|u_EaWaqJIU1MS/|eD%%4=)Is%!O9ASSl8G5B1PS ');
define('AUTH_SALT',        'TxMIJY]@oVW5}$+*SjIvT72+#!>{/8^T$&1Zj5z/ V#glM9{6PW$X<Prq@q<{zP2');
define('SECURE_AUTH_SALT', 'KIv^=8 d([9t~ELjH$)*dGG8btP1W%C=:yS7,1pO-fZ3+|82 Ep`4P%Xfsk/u^`i');
define('LOGGED_IN_SALT',   'JYPVjr+$^xzAK,$5Ea;)+*&>MQ`q~jX!)gU]e,U#7>},tp^SRaizON*-zidMV^:=');
define('NONCE_SALT',       '^l;TW~4G7;^iWeP4gu%53khMl~g8aEWSk2~mh=Ehppu5_?Q<d/%yn)FntXzS4)MM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
