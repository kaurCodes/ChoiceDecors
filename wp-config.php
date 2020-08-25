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
define( 'DB_NAME', 'choicedecors' );

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
define( 'AUTH_KEY',         '/u~+CDJiIU@uwTsjz,<{P}XIjgq|Sokq=M+,RcKTh|Xi/Cg$]sLHUp sP7<wiot#' );
define( 'SECURE_AUTH_KEY',  '&uyliss0mBr=g:E[;F+yqzyBO43;&-@G_@,$rm)?P,Qww.[aNhJyydW|?j*AI^R ' );
define( 'LOGGED_IN_KEY',    'UbN-U)H-&f!}l]?ow%#7s,?Q`QMt,ZIu3evysE8+~L6Qt,j=!t7zX ~Um*a.`o@!' );
define( 'NONCE_KEY',        '|j>m3:8OA:^6(1gOYv;$C3cY/3Ui|Wj-K>QCp4@c0aj.1XX8-]r$**+S9L*u!|I#' );
define( 'AUTH_SALT',        '@hC|!nqrP276HsNfLVo-/WubOo5;8J7U[]]mvV f%c&9tpH<:@|c4bpJePEi5]*U' );
define( 'SECURE_AUTH_SALT', 'ay>F{z10zY)5,tl~A5(xm3t|uBv.;]<W-^$c#`.:>Mz66D&A>0*6YgLr|D,t@cC4' );
define( 'LOGGED_IN_SALT',   '`_O^e:JY3})qbW=<Q( Y:b)?,{`zfqk.}WUmU.8nsHy-d~y-#vF7GCEGWGYJ+dgu' );
define( 'NONCE_SALT',       '$by%cIg`lsetW1&._G[E--?<o!EPIU!K?E5*f8T<XO8Mbyk4>aK3Z/M?M5N;^fgl' );

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
