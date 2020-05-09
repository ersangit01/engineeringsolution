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
define( 'DB_NAME', 'engineeringsolution_db' );

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
define( 'AUTH_KEY',         'XDNF`0pZV&CP^f:a{C6moe,9g<]I#wKYGUfSPi?X89ba.c*FgM}+!;<>Cs2Q.W?~' );
define( 'SECURE_AUTH_KEY',  'ZNx_2EIoT0<iMJ}Xpdqjk +uE+aN2L_Kml#FyO>T-f; Eu0xPOvh;$NLqKzELGlB' );
define( 'LOGGED_IN_KEY',    ',/!K8&D-%i*QOudb0:0/*8fxXZh<|oqakX3#be3g[hjm_D;JJ$+n3/TG7&MlL#WT' );
define( 'NONCE_KEY',        ':R8X.m/V}V9LwsYT8u,*=AsX#l[mP-:nG:r6Mr6R%$ND{EG9`NuRTxLTS+P7AwX?' );
define( 'AUTH_SALT',        '9/Vb@3IB6aT(U]l|0WyY|i)r}3D;`#R>~dxMqtV=w.rBAzo9U:}Sbehlh+Wgc:{z' );
define( 'SECURE_AUTH_SALT', '93Av)2gbJq7HfD]{a2S)y`vX]w ay1]-iP[8>H[,NST=QpT)]}a.w_pxW~Aj?2tw' );
define( 'LOGGED_IN_SALT',   '&5eYM.R-?|^W1`dm~8I5-]EqgCu[`GXqWOL),iFEqZawmJD;E])<R9<!q]aCow-F' );
define( 'NONCE_SALT',       '*zR!i  Dv!2*E^x2Ju$ ~#vIG_}Q0iHlV@jQ>L8PEU^1OWK[yxT+]k{NHXAMPUHI' );

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
