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
define('DB_NAME', 'my-project');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '~k4/aY)z,,^*A+xHk9+8G$:+ov|g[Vnc)CH9 TqrpTM96ggwS:458~A_*XHdx?/O');
define('SECURE_AUTH_KEY',  'gI.T)+!lmI%9/[V4)F6yl#qjJpEM7?,9x4xo{&o_m,q`o%i:=W|eB9V}[3r(@:a6');
define('LOGGED_IN_KEY',    '<kp NSR%I?2jK$WJENr9fq}IT9f.kwDXNqMMTVFUhqkNdqacLR9BldCcCWwa`IbC');
define('NONCE_KEY',        'zic#s!_{Ts!Uv$<b|A0mg,yKps{M(:_wuF^QpW,}alQy6l7Dl.&Q**Uox}jyF%er');
define('AUTH_SALT',        'f,cgxZTpHGEFIQ&a{^TA^ .%;@m[J/1|B~uPS,d7`JJ,@=`|2`K* >=@2N_8h|s^');
define('SECURE_AUTH_SALT', 'y0GvQ,&(t*JNz.(Kmb40B0R%@e4ccaMYm^{W,:>=fq~M>e,],S/4?rqk9VEBL~[t');
define('LOGGED_IN_SALT',   '#OrLa7gL?U84[QavygF|I(RyiZJ9lkQ}K}g&Ra`>eH|r^Jj7<q0`,>VGh%1:fi8b');
define('NONCE_SALT',       'J4jI5$6e1I6_ch{+uRYxQq!B)9V?zcw.[_)t7?(;gsg>)s&v5|:SruCX;ioKS0o3');

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
