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
define( 'AUTH_KEY',          'L!Ifo7B<M{!N `1P#^YLT94l;2%1{I%8?Qa2o(L8V:t/aTHM+pZ~NDscV{6`|%c5' );
define( 'SECURE_AUTH_KEY',   'ZCIT?>4&Y?=P3-sjE0H/M~^znYJH5%/A@X$dlO{}DOb:1Kd29D?|H:Nt2-z).9XL' );
define( 'LOGGED_IN_KEY',     'xY^g~|Fq.q>Izd{s0.C(eI%SS4L}z[KNX92F(]hM,`FIV*!j+b`k>u67:5-E6J;U' );
define( 'NONCE_KEY',         '1kvk9>P?iE+[OLr>$K%Hy{U-^X)43N$*kfgL.3R8km5%MIj9(X]pKa:H`WCp>tS2' );
define( 'AUTH_SALT',         '>NIUHO*NVUuhC6<|UcP(IM+%.>Jjklp/6.4PpCN;%-c3?m@FYW6rr`QbX7vt3s+3' );
define( 'SECURE_AUTH_SALT',  'QNARofDgyz.X}HmeZBsu(WQKdI;:OZjDiG[PC!i@=6/i}-jGh34FZ,qPob%h|z~1' );
define( 'LOGGED_IN_SALT',    '.cnC-Pn1AKy#jccKp7(Jd!}8Q]OSjT@ .@M.B#X_gWZGClKi^N%ue~+ zZInN,#b' );
define( 'NONCE_SALT',        '%Vkbx|Y#Xp0uQJpeCpBN=H1h%xE+~Zr-Ee*3K{7`+[dY3YDP1>=Dbs=fg@2IErP@' );
define( 'WP_CACHE_KEY_SALT', 'm1Y?MB`W6lZ|@9lgoeQrjI?tE.3ZP|y${ UzY)<.<gp>FL_moCfWD)1&p,)2R,V>' );


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
