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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'daliaomar' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'v`P9m@^CYzOkSuW)Ee~J%}$(G6v0)$^Xw.Ec^:M+Mbt;k1oR]&K.S$M?G_+#~n`C' );
define( 'SECURE_AUTH_KEY',  'C^vdP0.,Ds}>>TdgfDxsduzbF;K$(d>x,>B13|l{@&F_|I[9zcG^A42%PMe}0`Hx' );
define( 'LOGGED_IN_KEY',    'Q#kc3Ci|PsC]?[Q=9yL`4s7:[-++2RLt6[EFbpb.w$Gp&w+~7]q:X% LK&lXqUJG' );
define( 'NONCE_KEY',        'ZrFbr[PkZnd]r|;)/)H7ERc7p@3{QE<NR6AP7<XMpN)3@g$z/&u[)U!eH6Te>g_R' );
define( 'AUTH_SALT',        'oVZ_>rJwtP<qTTiT8i:|%#)He(~~SF|bl,cI|K?|^34$6eY<k:. ^w=la)(0fDi7' );
define( 'SECURE_AUTH_SALT', 'D8R*tXOsE(&G/wRc;7Kd5O}<J7;vAVY J=W9Z7<2U~}#Z#YK;m.*oAczt* *G@RE' );
define( 'LOGGED_IN_SALT',   '~3/z:=(WKxa L[}~i)l:Ibb/QNS/@{!M.zYGsUYc5;`~6hCT,RLG=>D.fEk$])*w' );
define( 'NONCE_SALT',       'D2({-5HacPYZjg[ayG942[,40;r:$k@%DwcF}bSIk7Eq!Xz<ecVxKTTDs6Mb|O,e' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'doDbPref_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';