<?php
define( 'WP_CACHE', true );

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
define( 'AUTH_KEY',          'I :~wdt&e5-h&n4zs7TO4#&4CHidjJu<ld~6[QE5Uo2{phQVLvt7U2?MNHe[k #|' );
define( 'SECURE_AUTH_KEY',   '67YVOGK]932NuJDl@DI@8.hs0}*0+q1eIL>Q~*v-a0;)t$<WPWkDJpa$l29C.90-' );
define( 'LOGGED_IN_KEY',     'q@AV@>O~{&&3mOrWf{pjMQp7fq]i$Yd(Qy8>TCb:i%HXWQLR=3i!p2m|dX9?EVw&' );
define( 'NONCE_KEY',         'K*Vq+%i:/iDpc-j=f&Z|x2bb1!nPkI/SpYV3/7v-CB^S!igfdV34)GJVo@;3WC4:' );
define( 'AUTH_SALT',         'jW4t^3BPa!;X*Z+xd^nN7AaWU%3s)0:)lD K ^2gj`A32#oSd=Mv&53m6TIf|y=d' );
define( 'SECURE_AUTH_SALT',  'S^QjkFII15[INyH9R5B*684HK/1 [/;AK;R66&d)`X YqS~1c3lH;zh|>WPMPRU`' );
define( 'LOGGED_IN_SALT',    ']BXL-;@I{uoL+J>CmTox_Cm|gm7*nDuG=d3`)fRZw.~cstg.vBGYH=:>FaeIrR-i' );
define( 'NONCE_SALT',        '@WYo0~?RB>~aJ=rj1ipT-}^_C61P.cxEtK!U}~+qZ~C.53WF&/w{/YFqmu+>K>=q' );
define( 'WP_CACHE_KEY_SALT', '4DI5nbxDEt;9;9@,}_/{?G4&w}hUG2E,K~++O&v~zilQ=%8HvNC20pq[K.M)8YcZ' );


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
