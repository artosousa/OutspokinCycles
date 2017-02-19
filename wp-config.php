<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'outsjqyu_outspokin');

/** MySQL database username */
define('DB_USER', 'outsjqyu_admin');

/** MySQL database password */
define('DB_PASSWORD', 'v0lT@g3!');

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
define('AUTH_KEY',         'Xm6{6PBU,&Q#Xn0Qh6VW-BAAS2)*.bLgM4y1a>?[Q!wx>S(+Ha^N$@Q?t|FshVY+');
define('SECURE_AUTH_KEY',  'b$4cGsRGotYdjtXlq>(|b|x}HaW;N2?riC6ovF%L9[a)+4Y6dkfmk=W*|Nq;o=j9');
define('LOGGED_IN_KEY',    'HU,{[;*g+}4{})F>@WP&)P|6RXId`?ExEj1&`K-|-+E*NG}$V!bTa2jkkOcEPTls');
define('NONCE_KEY',        '>yp$j9muRdO|<;@>BNs~s7n{Ted VXa4)|W8$ah:V5WF:7YqEV%~@,IrV5CL`|Lh');
define('AUTH_SALT',        'CD42L2tqLo4*?R.zNgB)[2jX/VCDeL:iRRwm;ZO2C12AWl>[Tkv/w-5[R/ ffuVb');
define('SECURE_AUTH_SALT', 'eVfj4`)l7LBqACB~Q7~ ,<7H+EX5[j,&/s%8<.7qU>/3)J3?Rw4/>r7K4K9{sU_R');
define('LOGGED_IN_SALT',   'p#C?+! eh/V*)cVS t*5_+]kk{c[hvG&T-|#71nPbBe@#|ya=6]ITF) nXi<+7K-');
define('NONCE_SALT',       '*o+CFmx%hAf-vyK6[URVWFZ%UY|z?297|_/d<%,_!O 2a$fUu-x%NYZu8L`<UdGw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
