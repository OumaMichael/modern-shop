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
define( 'AUTH_KEY',          'hK;F3x<H/@ch+MQoxAiCAD,+d9uW3pNv_Zo|#J@LX~Qa5+8|40mSwkHsIiehXwy+' );
define( 'SECURE_AUTH_KEY',   '}+|w(`a3?,GF`FqZ@:m!DIZgXO^G{L[4_P1&Tdl`6W|e<S>U&!tN0-?#d~@8tV-q' );
define( 'LOGGED_IN_KEY',     '1IQ66g/dpNIr_0~hPNA?nJ5GiE7qzJDfkc%YtROPRNBDN.(TCJ8s_JiKL0<YG?w2' );
define( 'NONCE_KEY',         'GqPS8GV_~PdH_uug$[wblRcy(l(IwS|Z(E^e AG4|%,*UQVS`Dt5wIro-V;PDS2+' );
define( 'AUTH_SALT',         'Ic^&JLqk4,eJog<w:yxk<!-DEf<%4`qEd6$;9m,ujf@Y<X;]pyy8WyGqb<kYQsg]' );
define( 'SECURE_AUTH_SALT',  '}<` h=1E?3aXyrGg(uKVu^O!VH>B$1AkG*IZUme?2mx}@J9ES!|DgTNv*<ElbEgu' );
define( 'LOGGED_IN_SALT',    '_B0d(>wkv^75;8|Cp.F3wxbQ%p}IRS)E?v}?KHyB>,#}<*9hWpWKg*aK[:$`zAgi' );
define( 'NONCE_SALT',        '$yX(Jg[d(h5dx&UlA3Az*=l+*u@:#fs322hy%{^lw/G`Sde@f54A}QVce6EIwiEm' );
define( 'WP_CACHE_KEY_SALT', 'ho{^dJ~HY~O[,pj}>@iC964p?Cqa(VhDUC[[!2w0NE<D{!GHmvTV|urcW~8({t%T' );


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
