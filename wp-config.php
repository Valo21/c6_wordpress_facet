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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'c6_faciano_valentin' );

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
define( 'AUTH_KEY',         '5++j-ew_}kf^`1qEl?)TK{W[v9i?If}BGiMv=0vO9yEm>jB&FIIu^|lnBnVT?z3<' );
define( 'SECURE_AUTH_KEY',  'R}[*xGO9+u:%fhH5$B38N4OW:G`pNHgvy6s<,j^CrG?Ctia3{)M}TXo/<kHYpdJt' );
define( 'LOGGED_IN_KEY',    'q#ZtRB2$tD/=)N@L<V``NK$F0v{x*+`AB#@X)]E4T*>Lxo<!DzDf-aX`7vxiN}a)' );
define( 'NONCE_KEY',        '8g2-JinDi?$nF.0.ka=l<1}yS40>3nFmDN4&O {u|:IjEAnsY#S#`2uW`Z0W8HT>' );
define( 'AUTH_SALT',        'ocSp*;/$YAjo)2O|WjnC[ub+znSO[W&udF&p}:+WPB/6G8E-gb#^lajGs4f)O}M9' );
define( 'SECURE_AUTH_SALT', 'v1OE1snF@,!@`%7`+%f2B~&1rvWdT)7auKhSc;B/=IiGpE97e@RVE=rdZLXKwtFm' );
define( 'LOGGED_IN_SALT',   '{;S3}x#v?,;qE.ab)dH8~xp.I*Kx6(R]MSYZcFpEn-*z2{a}4OK,qwcJ9$$2]x]h' );
define( 'NONCE_SALT',       '2|xXgG/;=mh[ >)#R2olP(~73>~!gL+d#d;!bdX){@{SkdF{}&citjq!Hx;mTC2 ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
