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
define( 'DB_NAME', 'osho' );

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
define('AUTH_KEY',         ')%?|bI;gY.n>NoWIRe+e4iY]rqG&/_$*#A@Q-7J-&[)2!*E@>g#2Gq;97=48Iro|');
define('SECURE_AUTH_KEY',  'TNIRO}k]w7ckvu~&BI->WHFj}0)GFiUe!^9@2Awyv+-5$6QH66]}aW# -+CW9:B6');
define('LOGGED_IN_KEY',    'Aw=F]pAkQoyD_`(U4$;p|L+1nP6:Q1_b<aIK0Fk3a~JS}qPAi,z)>W $1ZkK(Dm$');
define('NONCE_KEY',        'AUL+]|3!XV$+1>j 84WiRVp]O+]()7UZr2* Z.+Vt6cYm2Lr>E3[+}FqO(VX5^K6');
define('AUTH_SALT',        'wfsxIdQ=p&H2EzQEo.]>V9KGk;k^j]13iQF9R9S+3C`/N[G:_d.,qDh}K#W~)-w)');
define('SECURE_AUTH_SALT', '#1PLkB]a-jeo!0}Z+b6r]fjV&- yYHJf&ipr}r/)r]G][5,piXNwg;h+A99VDbbl');
define('LOGGED_IN_SALT',   'SFQNTwF*%c SSR30&~2]J[j]`HUIO(.5+L#~+:M*;y,Kk(]a{VWV^AcFWaVVN]#<');
define('NONCE_SALT',       'D#oT_fgb -YM+%&xTo.Kmh(D5tt/0?G>,{@LHQPgL-<-}`cn=w!1(.I2ShfoB:e8');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'WPCF7_AUTOP', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
