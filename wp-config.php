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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'andrea-silas-pf' );

/** MySQL database username */
define( 'DB_USER', 'andrea-silas-pf' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Table2019!@' );

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
define( 'AUTH_KEY',         's+CbmE]T.w+9eO|}BQFjLWe7|rE6=@rJ/$3 TzsK+4i-2`SH dkGJ}$>2DpY&zV]' );
define( 'SECURE_AUTH_KEY',  'YsQ~{c$e]@a?yN@abtLGA;DALcu=YA68?qUV(&nI:/xva{MEx9N|LP/mO3xY,,BA' );
define( 'LOGGED_IN_KEY',    'Qy&+m|f]?t,%+Xl;~)u3hy*8tI,wgs?g1)aDw}S<j0b@E&KRz-HMj!L;A!UMDta:' );
define( 'NONCE_KEY',        '462-NP>hbx.g9b{r]5XXq|sPPypn$rHekL> !4B}ExSlS68KAO{|9?%y[m+.LcgH' );
define( 'AUTH_SALT',        ':druSkvX0F*lE&hMcPX+UO)>Yf0A7jE6sF@hHFJj*kqq1l+zsnYtU,koo^2(JDo4' );
define( 'SECURE_AUTH_SALT', '6zl.g?%X:fLHB3aUf9 `;db}:)G+Y<#j|;Po;#=DT/RdpCYRHKko;2S@OrrBWo}8' );
define( 'LOGGED_IN_SALT',   '?<5P@o-Lv@NCZi4N6R@R0?Qw)Wg^ny]@a1h#ML:4sW7qic=rUO`BD!M00t&Z7}Qr' );
define( 'NONCE_SALT',       't @*4y!YN{n$cKbZ,s)}Y?;<5RD.+Cy){*BYyH|_`BV)0P;Q*pMMW *?D< i];Vy' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
