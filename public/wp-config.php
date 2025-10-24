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
define( 'DB_NAME', 'wp_baseusua' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'MySQL-5.7' );

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
define( 'AUTH_KEY',         'YL$6^%zp)L,5f8j[i<8s%`0[1mXhrR0k(P^nV10TR[tdNdLC.FnAbdy8ONnCg`bE' );
define( 'SECURE_AUTH_KEY',  'um.J{b/_WZY-*mHM6V[W`s+V0QH-]8ku-%ivps<`PUiwV},TT*3j68z+nMkOjKAp' );
define( 'LOGGED_IN_KEY',    'zyV Hy>G,-*S?B7H[I %KGdC<Kwo,Cv6X& 4%Xn}qP/]YC{yT+2>2.b1%M-Rr*hE' );
define( 'NONCE_KEY',        '^T`kaEAgN!4YUE_{_:n8rR4;`8LyA:-63&+cI83AkfJw]`x&]WJGrXWQu1E`_!pj' );
define( 'AUTH_SALT',        'MBYM|WTtIIZMH*7>6(#|>87MW@f4=d#9W,GIj5(SFmx23P3Y:<^X{hu=GOjq V*,' );
define( 'SECURE_AUTH_SALT', '}ZzKOjX$ ^y`fE&c9ASLc|,!Ii;RO4trF7oEP?:NrQGD+OOR,e^k_lGmA-=+k}uW' );
define( 'LOGGED_IN_SALT',   'jc9U77;lc{N{>N8v*it!{7c#OVL+A-eA?KMhd:0IbV>;uw_P97wrJ`WhkmxtI>G,' );
define( 'NONCE_SALT',       'sI>*ekYKPw>C<o8f[QG9tp-_?.n$~oxEsUFd:WD!jme#]||N^< S^i&lS/EA!Y~E' );

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
