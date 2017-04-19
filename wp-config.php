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
define('DB_NAME', 'javierpedroza');

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
define('AUTH_KEY',         '%n|4qXde:!YXU{K8B~QaE[{YH9s*!$ZU`&#Ph.c~Z-:gYI7s;/<>+s=q*yQ9*byE');
define('SECURE_AUTH_KEY',  ' TT<RX/Dcui=`:!{DzH@iw]Fj:2<f-3<q?)>tqL45M%Vxa>$4i4VE&shq2w--oB?');
define('LOGGED_IN_KEY',    '1=Pk4b:kTYqC21d`K_:`|W8`4:@9@`|Grh4v+&Ayd;A1E,CxI&7|(f !R~2Q>){a');
define('NONCE_KEY',        'xyv{~Yj!8^seW_hKbePs}DNtNCBIu~l0l1SBdaGy(pO;M]K?aa1Icz(?5< C`M,p');
define('AUTH_SALT',        'Vuz[77pAofr-d(;G)g9gr3cNjX)z~BqJ1=H0G%RO.*PSDIs;YS]@_3NRJA0!FV7w');
define('SECURE_AUTH_SALT', 'JvvL(_E!Czd7m;X:-@$SAZN}mKr:$ZT#5BnacXI{N8*E4~(_K0 o>vmPatt;3I8E');
define('LOGGED_IN_SALT',   '1&)~0ZgAw#UzK5]D5G7^3mFyB3@iEI7%2E!w%8B,Ws<Z[VgM+>|W31HM64GvJhk`');
define('NONCE_SALT',       'm*DS~$<4IqP0xtcHz-H;#1XAX%i@KWf Fa!zO(j&DD/w14^Vj#*KUN#1t?5kI2i4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
