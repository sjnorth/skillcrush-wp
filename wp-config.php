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
define('DB_NAME', 'samwp');

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
define('AUTH_KEY',         'fhQGQm,+V.nCm5TE9:immHu}}m!sRT,<|[rlGzQp/EdnR$HSPLT)bY<:|G*~b|!t');
define('SECURE_AUTH_KEY',  'B6x-+xXyFVZy#zT-RkP7f1!Dz$[k31N2o3ni(Nf-qlKXb~j<N.p-&8kXM,L&$wZx');
define('LOGGED_IN_KEY',    '+0Y|s b/F/jS}8A(cP|P5{Qst%+6<ECx>$3yEDWC7 03a=#sh&+u>rk&a$#]4g-v');
define('NONCE_KEY',        ',-?eFO#BEf[I^l+=XZ>UbrI6ya$g(k6<M<pEry_wxXxR Y;3yK%a_Q39#}W|Kr`R');
define('AUTH_SALT',        'rd)GyUIg)IG|BJ_^UOV!#$ BZLXMX0<3--Ht_OV5kE5f=9~cM1P[ZoA<B/NL0G/t');
define('SECURE_AUTH_SALT', 'W#,z@fJ~!u(sAEZ*&q>l/z^YeVceY0]j%wf*, Rg?j:=K-T>M*^%7[!:q8V5g~Ae');
define('LOGGED_IN_SALT',   ':G%$UB:6Y+G=nE7v+Mu^LRJ=8JxCKaE I$iqK<+q8vuN.&t+[I}Sho[zCu}5+$w+');
define('NONCE_SALT',       'C,av)m{mdrMvnfXHVt,R+sN+n0x:g@W4_4XL]>28nl,Qi1ub>>cPw%G?H4I);+--');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
