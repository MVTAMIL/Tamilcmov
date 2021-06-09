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
define( 'DB_NAME', 'tamilcmov_db' );

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
define( 'AUTH_KEY',         '1&CPCRNaZtgtxzodM<3@n>R lvC>OIhP%m.NNW5l|<=:Vg_OcRP `_J|GjO fc}O' );
define( 'SECURE_AUTH_KEY',  'NR@:)?R^Ci/`HjRb[./%l;~,VF,t$15Q2Mr[L{v4XN80-DF:) o-+@xw0Yf|k:)8' );
define( 'LOGGED_IN_KEY',    ']|q, >i=0B2Q6-,CGh&}Lo1/sR7H};a3vP)1Cp.&wV*$>_5Z:NfErkWjgG4EOD}L' );
define( 'NONCE_KEY',        'z*[uB68g@=w(1ZTnp,&IWL+MfXV=osm.:rDLo P[E<T-FphERyvdjyt~tDk7h8uO' );
define( 'AUTH_SALT',        '4j*jlz<WqJxLt)N-DOlFIl;#|0@H3{!%ID&CCb!z3@2xO.=}^QWtLf:*X,~nF~h_' );
define( 'SECURE_AUTH_SALT', 'Ki:G(jKN4;UX7g:l68,t+I6Sz%i^G4_@%NGv<bKi?YIDvy@FWTs3_.gw~({EY%K-' );
define( 'LOGGED_IN_SALT',   'S>EsNQn/pXG6SQ]K7u[D3hE<UO+HRM<2%p.WX:q;Y6J*bi3xc.?q#l9UO^jLyt_.' );
define( 'NONCE_SALT',       '[//VLj6ZoLs/nYY&bdtC|:qo5QWi-EX~+$>iH?I)@dV}Wy,{)ga)nl^_3L(=)=/H' );

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
