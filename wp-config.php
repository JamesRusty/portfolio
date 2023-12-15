<?php
# BEGIN WP Cache by 10Web
define( 'WP_CACHE', true );
define( 'TWO_PLUGIN_DIR_CACHE', '/home/u838306913/domains/skincellaesthetic.com/public_html/jamesrustyorcena/wp-content/plugins/tenweb-speed-optimizer/' );
# END WP Cache by 10Web
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u838306913_thGyN' );

/** Database username */
define( 'DB_USER', 'u838306913_FOZgy' );

/** Database password */
define( 'DB_PASSWORD', '9nuzbRPEJi' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '.ILg|8/%_;vKUZZOrB}q%+3W$^0+?k>y>E3hX9=`PZ={@@XI%k^]6@Bd)sMcu[ZM' );
define( 'SECURE_AUTH_KEY',   '|oLbh` 6t,G?#u<QaCQ{zxq@$RlS`F{7r~fGe0Un`lB$WsHbR:F!BzPLl*s!byeh' );
define( 'LOGGED_IN_KEY',     '(r-g^b3I#c653zz>fHzU!aJ#{XDh]!QKwz%SxU$Bi)zk5F(g$&i]gh842.?LmjK]' );
define( 'NONCE_KEY',         'Mur#|?3eIc|pQxz?/Hs&bVUbN>)zK_KyxBOM:c+#:Dj;27:zo`1H+)h29/,C.iQ;' );
define( 'AUTH_SALT',         '<|dX7?Q7R&,PpCC:bQw7)WeEGO6[2.JL{6qVok#,,%HD$b|r.)t9>Q9Tg(Ne7D3&' );
define( 'SECURE_AUTH_SALT',  'SQX!8B<MnyElS6OIL-tcDOLKyjc;aD!7Oe~zG!`[-t$72+v$xE2s]<3|?K,)s1(R' );
define( 'LOGGED_IN_SALT',    'HX_]mBz7LqMvqI~>:R1-wWqQ?7>)N5sN5#=EL5w_5diz1UrlO?zebL,QI~wx%d;N' );
define( 'NONCE_SALT',        'BL/U$5C,K9fe*Ce dR*}vec-qz7L%k KJ?E-?wB1MG4H+?Kg*.KZBsWpBiv? I~l' );
define( 'WP_CACHE_KEY_SALT', 'FJ`U{r|!@U2y;Un^%zSG&7PY<[rkeN~hCz)$9EC]@`ayMvV52fE<:}ZJ@Tu@*F^*' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
