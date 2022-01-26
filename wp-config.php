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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'X{=;M<X?HyqH8%Zuk%diAUkBcE)w=#6K2cbi?jCJ[M(4DY[9CwFC>an(|buK>SHC' );
define( 'SECURE_AUTH_KEY',  '}>s!eXE&N+(?;xB&a~P:D%pw(Ufm}[T3?k<8bG|AwZ8qN5B@H:NKS~eza?blnQ)`' );
define( 'LOGGED_IN_KEY',    'NK=_/ (%Q}{Y?/YA]aN@]UkXQ:`=K,b`>@O&alNM&VOYq(#u6E8|L^jUmoD,q/VJ' );
define( 'NONCE_KEY',        'CG0QRuEqq,@C`6qqD_q?F$,/bnmmQL[8+cD~FnE7jfJvzWjcK.|shCpd-yJ<C^GM' );
define( 'AUTH_SALT',        'G)Ooiai?HHe#:Mx+6px@;!Ik>6a|oT<*H9gAAC-:w8WEl&{4}<[l,YNtaJU{j9(%' );
define( 'SECURE_AUTH_SALT', '8^z^bV|YAM7c+<pLf_o}J!1h?{8Y{U{]+wrg)%=1dn:kL+Xyndh+nWu<P)LP!hGX' );
define( 'LOGGED_IN_SALT',   '^+g|g=z R<re5ZaoQictqcS&4j@pQNX+BncCtC3_hyd_H &7`V=:aia73;:T4a&!' );
define( 'NONCE_SALT',       ')Q7*| %Y7* ?O;Q (C-97s`q?iP94?>mkQ@:3`Jnzort}(iLuwPFA_k|/ xiH0sq' );

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
