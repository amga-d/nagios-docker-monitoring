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
define( 'DB_NAME', 'db_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'pass-wordpress' );

/** Database hostname */
define( 'DB_HOST', '172.19.0.2' );

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
define( 'AUTH_KEY',         'h=tY5@h=f!]zn,q.Xi[Y6%qW49`-6~>I(p>,8myS)Y9A[^S]0X)LXgs1Y|la0Yjt' );
define( 'SECURE_AUTH_KEY',  'DnL&-?ou0<~&8sCyT5<zlr :c@bl;9-i!OrN:b_)|_K) y5|hcxchRWd8VV&)]Yx' );
define( 'LOGGED_IN_KEY',    '24F/.#1xne.U&qO+F$.3y#j`&*$emZzzUzF@ushQ|T9T]wHHYZJ(p`8(DICE%2TX' );
define( 'NONCE_KEY',        'sT%>JYfzmP,OKLmj2i0XnL X~`FydM7!)l;hMGyD#Uh$K_0ChyB6O&[v&/2z6iJc' );
define( 'AUTH_SALT',        'v#T4,7j/whWs/9+yxGq|6sgO1ski$dna.,KCRk$S|wm2fsH.ZWF@tt0zx.&P-2_C' );
define( 'SECURE_AUTH_SALT', '~K@i+Rhj7m;D_KATjPjA-nUf|?w+Dop@6V&^]?6Y{P9{,JW_AmOOdQ@Rb**G-([w' );
define( 'LOGGED_IN_SALT',   'RB;ooKszRw9loNLC57H9N*|k#[yq9Us^b6$j{!rwR}T2/?o8 CGRRzVwB4#wv@OF' );
define( 'NONCE_SALT',       ',H2s.22:&d[g)9!8gXS]Q[rxf~a?]bF~Jx*7&C(|^GuvM7PCe^I`;ig wy#Q<RYO' );

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
