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
define( 'DB_NAME', 'ecommerce' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Mohcine@2003' );

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
define( 'AUTH_KEY',         '^.per5QN}O@}~F{Lm6xlU{o~GqJ=<rtt0E[FSxzcz0+;<~ey/aCm./AXA~i|2l)s' );
define( 'SECURE_AUTH_KEY',  '{N&(xs*TauHOsNP)mC+>1^-n#Y#=a[1i[tbPjol[Ms)E,2KRVa7!{@APRl 0:R-j' );
define( 'LOGGED_IN_KEY',    '{E,0KJNP$P[l=8gXT! ! 5}rZ*!e9t[dr;a<!P}PydXI/zT)aYVFo^GpA1RbTH,#' );
define( 'NONCE_KEY',        '=}8&l)v6w9cSe?/Tf9yPt}t`w)2KpJ><LmpPI}_}3iE]7nk1$yB%#P&w?D)*Nh=h' );
define( 'AUTH_SALT',        'HlGL>j{H~nKLtao`#Qy^S:-;3(i5Anu`Wm)OHZMW~H57*k2ufPqx$%G_v~l!=@&O' );
define( 'SECURE_AUTH_SALT', 'Yin*n?p<v v6I|rSvVprc|-h:7:M?0*Y&#/G3XxI.;$T1nYc &2}pk#FWjN8Oiov' );
define( 'LOGGED_IN_SALT',   '~<X]@gJlw=!MRW`V5TWi$Um#2wCM&T+6^;WV_7;!U}+CTbk@:S:#dTJ!L0C+Tc] ' );
define( 'NONCE_SALT',       '4]&c89c0@>}Hvl9+Vc%hEkMjG~P`br? NSJL(:#CB8)_*<AolV8{o0=vcP*4=g/7' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
