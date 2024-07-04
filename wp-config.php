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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&NLY7HQ2>X?yzi+8l&M~7c=PjT;p$E62N5.j=+~fKMsK2s<usN 4]:c5EuHK:Ur[' );
define( 'SECURE_AUTH_KEY',  'RT^VlaL6je3][,?@BQ75KIOi3Z=;zGN8|,!0Pv|eo+so4_ma).d8g70N8#?:u+UL' );
define( 'LOGGED_IN_KEY',    'U#ScBGQ|K2dDG4w>Q0n]ak.K<||d&3IS-m0uEY?~O?de?8jcB-6)d!VWGC?lg`BL' );
define( 'NONCE_KEY',        'PmmSUil,9q7X)j(-H+&&54X}7q=W}HDcaqx6?;#}05}r3n_%!^Wb(0Lrgv3F18q@' );
define( 'AUTH_SALT',        'AT&>n!Ezc NGANce5UeaRBvpbB4I&dK&]$4E#.SK|tB@hY0~C}NCopRvgkN:H5=Z' );
define( 'SECURE_AUTH_SALT', 'FoZodrFGtm%|q:cwF_N?3;$=bLg{f/P7s,zFR~C(^+-b,lc>Dw8%A|ir@-+95Jb^' );
define( 'LOGGED_IN_SALT',   '|&q[9d[*`dUem}}#}?>qSW]Nlgn)&.=caIoo2hDp<WaV/Hf,^M#Zf!T3K4g*At8K' );
define( 'NONCE_SALT',       'g+Nuh(h6[Z:-wtJ4n#$Pi_a_`rL<p_#q3JS=J0pY[s8Pos.u{}>Xw]39+{`lPKOy' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
