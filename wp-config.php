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
define( 'DB_NAME', 'wordpress_plugs_course' );

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
define( 'AUTH_KEY',         '5yH5Dz4!Z`DZEv_(V99nO5pVShGbWi`t.Z^^8:&,6#V6+vk<LZNUrT_U#4E+h;,E' );
define( 'SECURE_AUTH_KEY',  '`lO[pBbiS9y*:[B`KKP,rC$J2HYVTf6DG-&5u?I20n]]|1Ja&$U9Rg2t ~r0mi`u' );
define( 'LOGGED_IN_KEY',    'kFKd`J(,%|uT([a^8{wfCYN#jVP UOFC.wx^hM9#grpa_0UM1X%if-nI,/(nl4X)' );
define( 'NONCE_KEY',        'KezNLc!e~V)f?*bR}TVv5MPRjF{4Bu5kevL/)3`oJQsSHOQ*f)5PEz3L6%Q#V= P' );
define( 'AUTH_SALT',        'D*-@%E8|] )1H|C3 ov]LWtl4!}.4@t{b XBTuL$~PxLy?AY3d 3%3DF?!Z=tuc+' );
define( 'SECURE_AUTH_SALT', '9~aU:-q^SN4r-h3?he:!zWffdC[r+%(.rk>`F!qH1P&2O5afj4D2Aa@3cZ&831Du' );
define( 'LOGGED_IN_SALT',   'cHNl2z~UNj$-]1[8i/+x`D9^*sEE)nf8ZB3Vrv`_qIH2+vOUZ4%mz1#+wPtGyTWB' );
define( 'NONCE_SALT',       '2q1hHeZo3e.}e PVp=TP&9M>8+?=N#vp=})h$&:uLate_rRTP{]^r9xRJlsL]w>T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'st_';

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
