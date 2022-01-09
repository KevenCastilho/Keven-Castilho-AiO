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
define( 'DB_NAME', 'gruposip_wrdpres' );

/** MySQL database username */
define( 'DB_USER', 'gruposip_kevencastilho' );

/** MySQL database password */
define( 'DB_PASSWORD', 'V@mp!r310' );

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
define( 'AUTH_KEY',         'lauR_$H/QbLz@7 PXuiX%HyTaaJh{aegsD;V-|2&uz-0XuN<f%rgx(P$w?wm;_q!' );
define( 'SECURE_AUTH_KEY',  'r4^^|>qW4@$wn,X)G33zrly}qLK5=FKJ;hyK$7Y+W9*$30L&XkX?PR+y:_f)V5p9' );
define( 'LOGGED_IN_KEY',    'Z__wmP22LfGQ(S?m+~R+?St(TS5BN{B>}WxzrI?D*P_H=fTqxjn|-{FT&x601[i~' );
define( 'NONCE_KEY',        'hKemX9Z1]vE5=w`HGDqd `*;(;~_dT_y-2p%)9:5YI*}p_/}?w;(zXb+1b@lhRdY' );
define( 'AUTH_SALT',        'v rlkl[t4XH-5:3lc2K|K)v/u Raqm<67$L.=X/-0_.c9{G;@u:ES/Ig./e]0 c|' );
define( 'SECURE_AUTH_SALT', '~Z*C[ w6sbUozL}LfLMKrUl3:IsE^4e934C5GsDBp0[iIGtl}sMuj@EYt6)&z`u+' );
define( 'LOGGED_IN_SALT',   '$7J[X~Wx*`4^no4P!,}(n(qs5RA!W &QLc!2:iIyso+yAyaiM_tW$,HaT1/RJS:9' );
define( 'NONCE_SALT',       ',Mv+0(@GDBIhD!P2f!<tAIuqE!23A2xPig);Fa!Z(7]uG6o:OI([ LX[YHf1-.h8' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
