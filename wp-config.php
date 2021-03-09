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
define( 'DB_NAME', 'oxigenladoza' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.~qkn|0m!hWQ1b0Zv .M(Q!^[0X3]F*?Hdj<CWlg^J<3*bGBS.EF.C%p-%W&1d`j' );
define( 'SECURE_AUTH_KEY',  'nORlcDP}NlEH[VL5Xt/3Sf5d.7EeyL?JO?*Adm~Zc}!(b 1%>RS/qvl,r5OO]65z' );
define( 'LOGGED_IN_KEY',    '%` F`H<SQ+x<;JTrZCjV_*sqY:b>I6`X1_p`YktN&s^4<P3uy94z}-5se,nvmZle' );
define( 'NONCE_KEY',        '~&wqIT~izq(jA-1VJwc9tZrM+C.@+?`=!Z_Yj#7~:~6=|EqY2z+Z(=:}LvKp0Cxt' );
define( 'AUTH_SALT',        '=,S4f,Hfq8L.2st9#Df@|zZ]>#8@jh!x&M2`@x?2#J~ue>,3vl& oCnT/*`Ssv:s' );
define( 'SECURE_AUTH_SALT', '-P:e3p`;`7$MW}|<r]4H|jL?V2~l9|aGuFw@N#i}$a:7QWy+HV-:3hTYEKhGY=Ym' );
define( 'LOGGED_IN_SALT',   '@n]V,9=^bAx+t`:aCC!KDKO2}x.IRW1FVR:OB^:Vm9d/B>1:JB`UP+<^eh!c`=f:' );
define( 'NONCE_SALT',       '{[K,Jvkslu:8LEi@cLU>_Jx*~,dSBrm_}@kY4Frw^/uGzbz`zFyGmE}B`39J|]s]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
