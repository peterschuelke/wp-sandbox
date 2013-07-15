<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '+CKqx7#fX ^2Lw+#73c`DZ1Hck$%Wj:<r6v%;Y,do |D;u1.[RA/n50$~|/*YL=$');
define('SECURE_AUTH_KEY',  ',}N[TN^Ovy~hk_jG?H@X(]r.(*+lu6l>zoOJ a+JG0|$-<UuqH paB=+6&2V[P^1');
define('LOGGED_IN_KEY',    '.;j^cYP)jon]>p6w| K]4zj)lqEV<UGSLr=HdG_]d90}{b{U`f!R{PF-cGuW^;#A');
define('NONCE_KEY',        '|+b#l-C?%h-t+k/VR]`%JV%YNQ`|8(]Q{kB+K%b-so9L#D15@PTA+!&$UoDkc{c6');
define('AUTH_SALT',        'Up03+!4RZo0@IfibkFGVJ:nv5uHX@DKh7+b+$>|i8,v#[HKearK|U;ouF4LfD9!~');
define('SECURE_AUTH_SALT', '-Qfn+yoO-7#8dxiHs:W}{XX=3>)Zzg;Ih[@P>:fV_l3k{:-x@vQd&]Q&01lf5<Hq');
define('LOGGED_IN_SALT',   'wSd=4nO>/Y~/>HgH HvZss[nbAc8>[+{niD=FsNR!M*_V(Drw%a8U6`=~F)39L(0');
define('NONCE_SALT',       '[|Wj2AnCYPL=-EJV&r,kp=LaR&g,IN4yL25#A)?Ju(,+ug( sBB$p?cWkmE2-0,Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
