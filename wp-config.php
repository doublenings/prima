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
define( 'DB_NAME', 'primacatalog' );

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
define( 'AUTH_KEY',         '/vh$2d0pbZ y9-+pOE7m3ou09Qz Qs+;etkR |<@B},x2(O>Iu-O)O6otm(qd_q8' );
define( 'SECURE_AUTH_KEY',  '(0obOm|;A}6`4hRj;  b63w?A>rU!sJ KputH{|-<k{=>~6kWmy~rbKbVDk-k$Iq' );
define( 'LOGGED_IN_KEY',    '=TzV vT4Hc,%C[9~Aw~7W9zj}{FWCxjN]^[j[%_9J1EjSC$yL][[jXg-HsFN#9!5' );
define( 'NONCE_KEY',        '_x6A(p$*8%o3.o$Gn~!9J:) ED--WEgvXIFv=^&;~Hj=8xezUWIEe.^$r::l/_jy' );
define( 'AUTH_SALT',        ')M;K)I,XBP-8X+`F_O.>)Of.[zUBDhN5k*JVy}cHhYwb+/wOC[,C_=VK%%k0Mjqu' );
define( 'SECURE_AUTH_SALT', '-T`&pJlXihT{|${8XeQCoE+US(}Lzn9t3O6YM7nQI|/H2#ZP,Bj73s&tW2J}IeGa' );
define( 'LOGGED_IN_SALT',   'Y^1,zz|uMvgRc(u+Lt00/A>R7Flvy |QQ*4;_f6yt}wyu_cfN3W3^`|?i:,d/ny3' );
define( 'NONCE_SALT',       'rPRJ{YfIx|l`H%B0%EtT1&rH{g&NRT!oN:%c2;a4qGn*<~IO|9H^RqSfmChA~g2C' );

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
