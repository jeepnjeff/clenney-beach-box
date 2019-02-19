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
define('DB_NAME', 'clenneybeachbox');

/** MySQL database username */
define('DB_USER', 'jp');

/** MySQL database password */
define('DB_PASSWORD', 'Rf4uCoQ5sfkq8b06');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'oz}q[-0y:~N<d#8f4b^A^A^Rn7<f^Hh&y{.m9;H.5EqqcyK.`,f(W%[$vG4#6xH6');
define('SECURE_AUTH_KEY', 'm1f|@Ns(?Uhnr2dVbETcYEJ`Z{I`au7}|.GVjnC`q;3zL4Xi**7r}OH[>1cv*=ku');
define('LOGGED_IN_KEY', 'omB1n8PMTnZqM}lG&yZ<:-=A;,{cpK+n(M|+ _.HGA_:RU[.E4rS eR;Ldf.(|5:');
define('NONCE_KEY', 'm553w3a]1W~NFtS|ICvE4R7K@Wf-F#mxrk}B#N;]QOLE(+gS]?bZCZ=3;}f&?uz6');
define('AUTH_SALT', '^yb%T.fo>~3@z>zApr-mn./g#4mL*-Bf.+-N^%ejBf22R>c.-(E$|RBXl,$5W});');
define('SECURE_AUTH_SALT', 'puF0>UJL_w]e[6Ti{_AJP.kfA.S[Qt~Fv5C=/,@CwOxI@o9/-G-^Ypt<AU]Y4!8.');
define('LOGGED_IN_SALT', '}%jc:W:p, US- yGisAsN~?Zo+a_-Mx>&O(2U[e$$-+P*x=.)!mW&SkZ0}xY05K]');
define('NONCE_SALT', 'U$HGzdla<%%TEq-=znC6Xu;9V&ZQKP~Ku52_Fe1SJZ6/M9a+EFI_%M+]+Z*=v1DA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dbcbb_';

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
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
