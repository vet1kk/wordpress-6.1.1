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
define( 'DB_NAME', 'mysql' );

/** Database username */
define( 'DB_USER', 'mysql' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         '**S,ej]/I%57luI;-M)v{7,7EMGn3l[xM$1 f+~l?77*s7`:su$bj_*$y(F6/I9^' );
define( 'SECURE_AUTH_KEY',  ' jJO,Ni^x%:Q4#tNSr70}IE>J8|/FW=F(E-)o5[5SQ4W*Pv@qd[gpngr=6},mxUO' );
define( 'LOGGED_IN_KEY',    '_MC/ =|(<a_Vl@*_BraAZoWswnJLEpe(:s{+rP|^S6RQ9P~mY)}j|[ugXCxL2=`@' );
define( 'NONCE_KEY',        'E`M,SqLHDZx6+?,Y)# _O>5g.9txmi=c.YyiJ83Cy9]V5jF~hW{fWal>g~p08h|<' );
define( 'AUTH_SALT',        '6Bb0N6hE&bO!p7m8?!U{HF+#s`?Zz9yI#6EC[!WocVP:;@-smRWG),(W?%xD^+WJ' );
define( 'SECURE_AUTH_SALT', 'r/&bO~U`(zhDyJ1g}i2(x $mapkb*kS!AeOsR@5cNqSw3:@s#qQ`fQ0$}&m/x(V=' );
define( 'LOGGED_IN_SALT',   '.6^%Crv`~abU4hEAp[`_,b.250&)-,_4eQGof4K!6w0RVXHRxl>~7XWX|V/M.DpG' );
define( 'NONCE_SALT',       'HORxweETuRBz^|3l_9HWMY$Jp1 V`DX;2:1DkA)i%(Y+`X>U6OJRZ6?HAb;G>*d1' );

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
