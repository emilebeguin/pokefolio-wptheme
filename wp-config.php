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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pokefolio' );

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
define( 'AUTH_KEY',         'A2=&V[gb?!Z:Ss|~U`9ObZu=[4(/u*_K5OeXtiEnfX~J|OFI`/!Wa95KfYc^Qy8w' );
define( 'SECURE_AUTH_KEY',  'h&!fu:+@qq9vn4$?qNUc[aHk754gpxOO:)I)`#y43dg>l:b ha<cxS[2rO_zv3^R' );
define( 'LOGGED_IN_KEY',    'W)7hO;Z2@lM`6)HU.s}Dt=^5 yKDW9ngv@Qra%eD*z>~74SZddqU@:_uw6l.Q34*' );
define( 'NONCE_KEY',        'W]?7LEDXcRzRNq}o~1)lUbZec$@~A%oJC;8 GHB?#$>mf3p) 6LB+% yE>>u=]*M' );
define( 'AUTH_SALT',        'RRe+hFN2~4&[a!oCjV<6]!OheQ_y6,@KRto9d% }oI<<!xF?!:|QXRKNsi |}Nbk' );
define( 'SECURE_AUTH_SALT', 'sk-Ql^>3d*x=ZCpH[/&~7ussD<{PQs&%G*^$&RYGjz2noLS!c64LkyQ;j(M6,p5#' );
define( 'LOGGED_IN_SALT',   'n}T~kgj<]Ms mNQ8#PKdR%TaY]<<_Mc5ua*[8nzu/8Equm2c*wdG(p+Cf0:=|/h2' );
define( 'NONCE_SALT',       'aR=[#h($r?>;{@eGB%HdglnNEK3$Nx_-9(jk X[K5XB`PULxuns`{F%PSjx/tJ*;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pokefolio_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
