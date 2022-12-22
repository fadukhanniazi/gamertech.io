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
define( 'DB_NAME', 'Gamertech' );

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
define( 'AUTH_KEY',         'aX,Bv[xl*{m>8vS$uzL#<`];^THx~I`y^[[4HFl|p#nvh^@&![,cI:.{(|:@f};,' );
define( 'SECURE_AUTH_KEY',  'Iv$A_8(5+B2c)tiWV_~V(2#c]u]e#@qL@Sizl`a5~gd*dd5dIlGt~H`7$jqkm:A@' );
define( 'LOGGED_IN_KEY',    'OY1A Q1*.<R1BH,f|j+s`,08Qu,)$fJ}*2M)4rG)t&@-|)DaYHRr|R,]A)(/kX76' );
define( 'NONCE_KEY',        '=^ecL^MH$Z^HyL&(<I}[R5:+nN?W_2JXgpD9SOXlhc8tadU7Hmh `^V!3|rwiz5j' );
define( 'AUTH_SALT',        'tf;eW#dkccQ+R.n@RMgZLL;n*:IX+Z:*AB+bwmj|=XN;yF_C{:IyKdt6A`s@3g19' );
define( 'SECURE_AUTH_SALT', '^Y}%i]9jI?G5JrpL]|EdSh[5;T}-qktb(udh~>[W@!G?@$B4TIKn6k(P}qp( p49' );
define( 'LOGGED_IN_SALT',   '_6M66:]WtrJBpP}y>duDdb&M=5M69(APuutR9d&k[`IwWEWN D2)Ln9}u9%|JxWk' );
define( 'NONCE_SALT',       'NnoxxTLA}}GV=_kSIku]oqo}q_s^Bb_r|S7>PFm%2qe;|l%}Pt_+n/5:fPo?{q-L' );

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
