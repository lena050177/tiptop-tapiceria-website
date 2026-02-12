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
define( 'DB_NAME', 'tapiceria' );

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
define( 'AUTH_KEY',         'xm7X6dCM96jM&6hV>3DvfhjA}Rnj<;qU1:607q,X-:7[%7KyTl4yMEb1jB)AeUQZ' );
define( 'SECURE_AUTH_KEY',  'rjJ/)vohI5ED3EQB9p`B3[Y>#vGw7Z)zK?/Uc{eX=YF}G;N@1e^8KuNFt#cfgw#-' );
define( 'LOGGED_IN_KEY',    '67`|XyTpZg(cEG+fJ)/EDEd20tB[,pyt?i|TuUH5+0j95z7}3Rxh<<wI?o<h82#r' );
define( 'NONCE_KEY',        'p<u~(0KMo@ojs&%% _Sf!vP+>w=G(;{id/ M0*)1}sCm.YmP`|b7utbhE .J!s|Z' );
define( 'AUTH_SALT',        'b>^zdY:vO_b*: kf*b 2`aLwO4zxYI%WN%5eI(hO4@*9tm=QA6fgY yr/0wd>zVw' );
define( 'SECURE_AUTH_SALT', '=pjB3(!j%AkXI}9?`!ZOFQ}BEto~_H~orX(sQ8{$LJzrTO9V+RSU+CPO/Eq7fx@5' );
define( 'LOGGED_IN_SALT',   'Y#;0LK&@ ^e9_T<{W>?nH@D9EIDx`_{Dv!H|(?l2O@2/yGvBw>$<)4c-HuGihm3@' );
define( 'NONCE_SALT',       '=gS;i%8e>.tNZ_ZYHeFGN2|r%04~:&(7>vUpjTi/SG}ikiYV8gi2CQeiTWoHKL8S' );

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
