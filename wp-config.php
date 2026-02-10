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
define( 'AUTH_KEY',          '%S)L w1I9z6|W.F(4EJ/IO9ffwLUK1]C@sD9lW<P[q^g*K+ Z$2^NM*p&ScBY4o]' );
define( 'SECURE_AUTH_KEY',   ')P@:BP`{]G@CbXy{Ll^w%eg%w.BpAZTU[|QNleRSL?57_^KrBb6![0s=^[s@~b.M' );
define( 'LOGGED_IN_KEY',     'J#nfm~`#.wwxP?<87NTzuF%Nb)t&rf8jF`Prkb?8F4})Va5+v4^.=# U:/rkR}I>' );
define( 'NONCE_KEY',         '~c,=fVsVUE.9[j^fOha6,M;e/6]&<sho(gFW[ JFFFtX~^YPe723UZf.$VbD%@R9' );
define( 'AUTH_SALT',         ')aXHOP=pkI/F7FE7N>arpK`nINgE??fM&9Uv.9RrTQ,)aVGRBMA(^m1gT<AHGivA' );
define( 'SECURE_AUTH_SALT',  '^.z%5<1M]2xm(M@&nm3LkJ[1SJ8DqZe,A:GT21Je+q[k<AXW4j5^M1k}airK*BNx' );
define( 'LOGGED_IN_SALT',    'U2:uT?=S-]f(uAIHNSZ;{1oPD@l~gtEkq?e5cs1Xu/T4sWN-lZ&@uQKV@%X68((;' );
define( 'NONCE_SALT',        'SdpL,kelKkh%[J<N`S?H6dKK/+d}P@fEC1h J}/Xv}BOlF`5<M9::c~@E1J~/ X_' );
define( 'WP_CACHE_KEY_SALT', '35/EOz~2vKUZ<N3dUKsp }s>0L~W%j598}jv`Be `lN=CcAv!gp4MdCx8yiT*UzZ' );


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
