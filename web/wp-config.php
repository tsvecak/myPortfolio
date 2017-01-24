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
define('DB_NAME', 'tomsvecak');

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
define('AUTH_KEY',         'J?#9wkO8-An_cx2@X|II}m|y5jGX_[OQ-F$uuVE%-A3+D)-.Yj3Kc+X/;=2Bqg7Q');
define('SECURE_AUTH_KEY',  'Iu#+.2iN.8WsA Ko<MJ`?.m:b)@`8Mda94/7Thlq*3a2fQT.eyb;[Qb=@yXjSLC:');
define('LOGGED_IN_KEY',    'z4F2}p%:Q)6VHx1}; }-B?p0LKjf]sqt~xY%-pT6^97&vgCheHEQD 0I27[takE:');
define('NONCE_KEY',        'iTjeh;iUw;XKh|F*k/#I;={+}m5{OidW-^ #ROwSSjB4[:N+Vp3Qv+mhSn-%qf;h');
define('AUTH_SALT',        'g!]vjIlNhvkH|q$vzT%JV |u]1uKD1D%]I2)z;p Pe2Z}<q8N;jl%&zXtUrPH}2A');
define('SECURE_AUTH_SALT', 'JK~vjlJ{n_LY=~F@h5+M)]Q1)<3USH&`)&laY-_&NNw_INKk7oQ$p@Ah/-rVK-uO');
define('LOGGED_IN_SALT',   'lk{gy#}Yc^7yD*+}KPnR6nqN|]~[iE/g0h&Sa~5Mg7O[C/Q2=q@7ZvJ-Tq_3PA|A');
define('NONCE_SALT',       'BF=B!tQ-QhC!!_g@b11chMR^&av+cX hqxTT:rKS<gaH+>8xzGyL{1YX>`Xr%a%/');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
