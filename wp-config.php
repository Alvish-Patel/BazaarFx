<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'newproj' );

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
define( 'AUTH_KEY',         'UhUlBMnN|#00@F,Kj(,yyxwpLS.VN{U9QUk#ES/S#pCil>#~c8qKteC^wP)ati>=' );
define( 'SECURE_AUTH_KEY',  'KT0;n0,W:<Cz<HV&pqQZ$6y!oZcAn)4V^=5iEjTPR!LwtWZ4r;vi)>ly%M4]wb],' );
define( 'LOGGED_IN_KEY',    'A8$`qt}Dg|6;_IE4Fj+<I~P* `O(Ch?F}y}v[;739,LXg=:)0P>{gb[ps0yQG<ou' );
define( 'NONCE_KEY',        'C+JG)!zm)HpYOn7auy4x8V<D[vT&YqXuo{[iMS^oT(zzCf#NaG_E@Z$v^^IQt,Vb' );
define( 'AUTH_SALT',        '(NT+7wy$i[y7N2adtl)+W/tX+)>79KeiV*AgSBt|rAoIhZIiz]=P[hkT!ik&YF;9' );
define( 'SECURE_AUTH_SALT', '+7)7{[&=o`/ YW*OtCGFnX57UbZ>F8G>B!qGX#|h<e_mtDT~aqj0o@-hxS&S-LA{' );
define( 'LOGGED_IN_SALT',   '1_Vf:o,]h{T*kVw&Jzmps_MI)>6`<Vl3T$d;xC.yIr|b%],&pEknu,&H|C>CsI7N' );
define( 'NONCE_SALT',       'v{%[YWO+Uj*O,q=+/O;QJV!H?fX~4y+._6)Kie76x|>mFy5DH3{=QM(InaJ6l{I_' );

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
