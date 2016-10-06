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
define('DB_NAME', 'xanadu_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@M[<o@W52h-y9[L&`EBr+~!b){@/fxgzuZvQXGh5jdU>Gg0Y7Tm+K`Dy/a]S^K^-');
define('SECURE_AUTH_KEY',  '4^rCEHtX_#?m+=AY*Hp1ZN!Z9&3_@KDtn:q|,Ov<LRQ_=PJ){-+pDDLFKt2~zFNF');
define('LOGGED_IN_KEY',    'qI<AD{G8#dFK[u4X(!U%@d+}vJOi?upyyz>u>ImHT*9b-U 1nu3-D`qXx0`_Jjr+');
define('NONCE_KEY',        'NWE(KDHNY<?@Lnh_q[!x*#Q|s%^v-jUx,#asVwDVmfog5>|4)9j*BU0=[8ST:`X[');
define('AUTH_SALT',        'ZKv|-4w9^G-aVAkc:EZUL>ZlW^iZlE~&vU|#n2/S4d.fdi@MlTPz(Mn4~V23,F94');
define('SECURE_AUTH_SALT', '}05nR.|5x]*Lx?+rEN(#cCit:5yHv#^$v[4 +t;]|=Hnqj.V)#*)7UTn$WXj%d|{');
define('LOGGED_IN_SALT',   ']$skAA6l#r:e!0+vTZ~0~&u8|SZ-d-rnFSdVaY!AWm65@IJx|@e|S[ox5(0 A/td');
define('NONCE_SALT',       '$BR ivW:`_7^{c[sak-3=Cc4sS7(aBjdD0Z%L`UGVESX5p@[X<YJXpMgm%A;0,Hq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rb_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* In Production Server */
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

@ini_set( 'display_errors', 'Off' );
@ini_set( 'log_errors', 'On' );
//Disable File Edits
define('DISALLOW_FILE_EDIT', true);
