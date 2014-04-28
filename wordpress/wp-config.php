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
define('DB_NAME', 'nadia-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%Fv1vg.9D}*Z s@au3lGQ<H;N}K7wcX8!0rcH)l(I;7,6&<cN_mL/( 5<q<&E05C');
define('SECURE_AUTH_KEY',  'G5WLwY{P:Ev!/re&Dv5XEd|V~`8u}_!&aGo_7#oE;LHg%z.Bn2{#LVbDOl+uj=,]');
define('LOGGED_IN_KEY',    '7U$_m_{)WYY.$qDw--Gr6c<-a Mhx=KnAG* Y+kp>EKb%f$rB;m).s-&5~oy$.jK');
define('NONCE_KEY',        '}C:6`6@-/.+|{>j-2EUW*;mwnJ,jI}tD-B/-%fW{W~OPq47uP&R6e+8tKhv^*yG`');
define('AUTH_SALT',        'IRU9dOP%<DW;hb=XU#`z&)L?DlJvA^%Vn,8J_VFF(:9L.HlfS)T#`&|%9hvxLf^|');
define('SECURE_AUTH_SALT', 'Kz# >*>M1ag!dVb68KUN Aa:HD8o*CVa7v|]iM;yhD5}e@saGxqK9+d*Xu{Rf<&;');
define('LOGGED_IN_SALT',   'Lx}-@(sO%y/IQZle;<l-P|( IJ*5=/TnC+~&M@1[$3*8NRXBx+4eBv;dXu]@u8u*');
define('NONCE_SALT',       '22^;vy=6B:4r=O>zYC;i l&C LIx!VPEozdly_10f+bw+~afUX2:>+!S(JCX4v=f');

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
