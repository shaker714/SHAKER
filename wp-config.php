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
define( 'DB_NAME', 'shaker' );

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
define( 'AUTH_KEY',         'L1Jr4j(72DKnn]A{a:~38>y^]ZSd2AZWVndw^Nc<sMXiVOl>RkN3XC}BLk4|9X&o' );
define( 'SECURE_AUTH_KEY',  'miBe%5d?+LfbmA-!R3lGcM+78rdB7p}.?O=o 0FJ[;JL hjdchpUTUgUr*C: d:L' );
define( 'LOGGED_IN_KEY',    'wg(_q-~<.$f=|g4~r;jX>x. ~b%Fq0g)Ykf]|H`g Rj>H3J0P<Xfk(bxxVuzU9`C' );
define( 'NONCE_KEY',        '9?m#v0PJPz0+#^)klFcW[g-FOlI1p}#Yc&!o_N9~_f plHBB7@>?jB7V@Y1g)xqW' );
define( 'AUTH_SALT',        '>N>TDM<[$M8#ISve CN|tT tUp_(+veH[NwI<bS)v,]LIeFn594:1Ko_ZFuXL]D7' );
define( 'SECURE_AUTH_SALT', 'Dv@eNrUSQ4E9SQf$1kZ=2>A9CIpULi8}XsG9d.K6qry,285UfCh*Q?5SG *x%rRj' );
define( 'LOGGED_IN_SALT',   'mTe&;x8$#=.P3:0(?y4JI5#cF_(SKn%Sn`S@Be7R_Aw*lV`7!E.dzyEF<fXk|}n{' );
define( 'NONCE_SALT',       'AmF3GSvvyXFFev)=`e$SP)V&o$Q4Xb!fJ%hS99AocKe;LCnM=>s,$L2yXP+Qc7~_' );

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
