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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'sBZ|DBv7<YW4*C>1A7R+f$*<Y9g4gtT?6RfxMpW4k-pLG[i/)zM0$#;O){C4dLvp');
define('SECURE_AUTH_KEY',  'Ck/$&-86U<^,MgPBP[QM4iV)9[ lM|IYGwZ1J6UI1@X3iN`8Lws !g}(3d^J1 w-');
define('LOGGED_IN_KEY',    'IT32V)cl@{WtHPi*#{%@!9ivS+|c+wGmrf|xTb+-j&]XizHUi}|K,^DK5ii;.+4N');
define('NONCE_KEY',        '=6> :5Z/6d;mL&M4N,9&Gy|jb,rERmes9;-65#ikx_w_FZl>q.`V~cf_Qr*)RB/J');
define('AUTH_SALT',        'yg80rnF8trcts>`=hv.M^#gbz9HHFr*][`Eo-hgvMxif&c#HMY_OP^NFl?uwczq~');
define('SECURE_AUTH_SALT', 'B#~NqJJkO5opnV97=AJ^~-^o5/N4!Z&Wqlkcy:Fe=$42ONvN5$d?;:dRrd(?@L_ ');
define('LOGGED_IN_SALT',   '51!BRn<q_VoLr;q1 g;CAr`27P,j[&?&p__TDRT*h8{Y^a5^/_9*=`.U-P;q |HU');
define('NONCE_SALT',       'ww@^f%k)?9jYu,E9d!:|>L={T,j ~q3V7q.E$+d$OdO*Q*$-f>xP86jN63r`(#Aq');

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
