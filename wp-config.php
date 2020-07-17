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
define( 'DB_NAME', 'NewsWeb' );

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
define( 'AUTH_KEY',         'fQL8/hypy*OukuUSs=EN; 8S,f2k+sBK!K4B_;XQ[.W&LM%1O_42[9[,2tfw3P_*' );
define( 'SECURE_AUTH_KEY',  'E&I|%SbY]|zx!c>o!,f=9#l>R.|W*R,U|lieK2AG v]Y3YT[Lteps~*7H9#bzpDe' );
define( 'LOGGED_IN_KEY',    '-I3x[3<8oF;VXJ5k]Rq0F?AR%s5BX6$SR``x/Na5@k3at;Cq`c/=QIOB4I1&u$,]' );
define( 'NONCE_KEY',        'NbKAa%h T% !D?2I62{$>pX?dWR&.!7T%|<&L!IqG%@?26g&Juh#hxV=a}db12 *' );
define( 'AUTH_SALT',        'o94HN!lf~/IDnUu6!>o3Z&@O&D~fX9_acHT=uE4[s%.Z]S{)i$^KChmkYYf%6%$=' );
define( 'SECURE_AUTH_SALT', 'p3W*[`:p5$<&A)yul_D}Q&dH!k!h^I8s+,fbV%-lk<_b{Ai_I} ! e#mQ2#|#C/E' );
define( 'LOGGED_IN_SALT',   '@Q@%P,AovhvS;d9kUrkT?Tu!TE ,w)rO^8c<lTs%1eZ^!lRb[5nMqR%VS@<?@6k9' );
define( 'NONCE_SALT',       'UD4 U#uI]W%66,(3Aq_UIdxkNn%|$<(Wzyui,u6&2,>u5=x=UyLF8/BMY}UX`5A^' );

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
