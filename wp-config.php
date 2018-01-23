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
define('DB_NAME', 'transition');

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
define('AUTH_KEY',         'S7%hldpTw}Ye0qyp[{{TJHn]~ItT=&S^P)^D3{#<,aFG3z913DhE8K&7_i4^.W9f');
define('SECURE_AUTH_KEY',  '#d0scr5iey)(q2@c/exaAxwB]imZoQ0)6hI:9g]FIUL`x&9~z~U/}1u,l)4nQf}6');
define('LOGGED_IN_KEY',    '? z{CJ+YQQ_J:SH1|VY-aASIBk }?lF+H;Fi=srazyaN.Mi(^)l069q3IU%vYGo^');
define('NONCE_KEY',        'Kk^C_aMoN~!uJ,u0=3aa3pf|[Su!_10Zh.*YV!ka.4UVJtm08z6W/uEA%NG>:qAP');
define('AUTH_SALT',        '^oe|33/~)= 1/EZ2]q5*f4uhK/)+v.H/G^Aq^_Q<Or*??gd&<X;[811^i&!}IsC%');
define('SECURE_AUTH_SALT', '`V+#TeGqAz~5TV~E}PY`ios`_f#Ez9sZv.qOB,;E/y}PaMzwQyb!P5JT(%-[B!d!');
define('LOGGED_IN_SALT',   '*0y^3C*&woCU})jBt*HfZe2%.47+|Iv6)DsEvaPD^*,@jPCpp1wihE,fZp9_JK~W');
define('NONCE_SALT',       '^{h%xd?.3cz{Av;iL-hF;4L`RReQhw+gM!z:@gCpq4xp:1XpyS$u!G?8Sz^,G7Of');

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
