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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '<{cNd$rCsc,5qyjRYAKp{RgHNx%*C2Jb7:4nhRnGIc,&V%=6)[ORdNffoflBjT:5' );
define( 'SECURE_AUTH_KEY',  'O)6r9,>;:f~Q%@_lFhyy;p3dscqjhaMC3~pWW9M#FYVK8;?Bh`^1^_;%b9[91-Wd' );
define( 'LOGGED_IN_KEY',    'iuk>CW,E:rSIZ!; ZPt@@yt{tI$V;[=ZA$lYJdvQ*D*9goV*pI+(6dtbx<%/1-o+' );
define( 'NONCE_KEY',        'PG`[_QY!/=qyYQ$<%=*sE+|d-cyys_k3Tx=?QrmQS$mng#asxZa8ueTC@?C>=W{Q' );
define( 'AUTH_SALT',        'l=}it(vh;UeKLQXORVclFM%<aI;[UT~SIlD}S7TY2^H>6z[vdQ=:sw.^i{l]7]iS' );
define( 'SECURE_AUTH_SALT', ' BylFI{gjK@3uAt}SQ#@JvPTU#u{F*=2F[D]S$KO?cGp>}]!_pNTF={fq9d#U7jN' );
define( 'LOGGED_IN_SALT',   '^I<_{i`w6$I]BuTfX5(M5iZ2Mj;i6(Z6dNfsHu#[d+>g[Ibg%1i?9bnf~D(lkO0/' );
define( 'NONCE_SALT',       'uQ},pkA},Og|PWP1.>L3c$#w@o<AosaK^vMS&<ke01cG&iz~o!2`zV1}*VR]?C%I' );

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
