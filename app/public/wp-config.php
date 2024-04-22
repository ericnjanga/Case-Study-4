<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'W=.<xG*eDhr[+t_lrxMGfg5PnF]2ftysP3R5UOHeU&x[/&=9Ck!98-WV:lQU3NQe' );
define( 'SECURE_AUTH_KEY',   '6%tjsZJ_4_[e43s8c*-3`^5g6%;Zu<sx.;a*qFEheJGmJGg,~I4|v6Q=.I~Q70]b' );
define( 'LOGGED_IN_KEY',     '5jSNB-;d)8^Dm/nw%Ptv|wFEpJ8M!gzOcBOqSrY}hjlW%^Z3YYp.J`-=$Qebg$oo' );
define( 'NONCE_KEY',         'D}D@sAQuD?zF)?fj*(8v<YYk{3)Ztf8,Y}Cne,6ja44hRv@]<ZPi=B^jfm<Jik&*' );
define( 'AUTH_SALT',         '_L42OGR*^s~nLag,P2K[s(5t@CN`vVHS+2ppm4FBC;5K&<#uv@BgCI%tmkSB+8Pb' );
define( 'SECURE_AUTH_SALT',  '%}N};h4.!xQmMz=*Xl9DLmKzD&$WY8.duJ8}+JFzPm`e$+uN[XxIa61.+%#`;^PE' );
define( 'LOGGED_IN_SALT',    '.Gq{>XZ<5gdeZ|YzcC{Cy/z2*4DTbZ/rRtlT7_{rjM>5TP5s9U^<-,o+2QeG9C}H' );
define( 'NONCE_SALT',        'Q!fl`zk/*Ia9>qU=7o_kA:Oe^rp/[86d,-s!fyv}[4..9JeWzQ;bB$(Vew?j~TwM' );
define( 'WP_CACHE_KEY_SALT', '$Vd,o[rhTmKDi:eX|I.n}[>$0&y?z`$M5z]mDI`qUDK2iLc7z >6ZmtskQl8NoeN' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
