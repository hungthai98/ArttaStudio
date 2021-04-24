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
define( 'DB_NAME', 'art40248_18jper' );

/** MySQL database username */
define( 'DB_USER', 'art40_artta' );

/** MySQL database password */
define( 'DB_PASSWORD', 'arttastudio@123@@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6:N6M@|AtD/:(@08k!#!*majZ+5+22A)p|5!dQ4#T!@kg7@JAgY_-GRE*lb3:*2*');
define('SECURE_AUTH_KEY', 'OF-2e+1~1mkP|v9(c52%hBx9My5f8azY92YjO4L_s67ugPteW2i&:Vq!j430-4Yf');
define('LOGGED_IN_KEY', '4e/ep8(FOWH27S8hiV:*INP2#Dfp55A-OV|2K[y:[6pef#9O&-u~u:XRphpur!Du');
define('NONCE_KEY', '|0+o3/3/(2]Fq(eQ2C[2i0(3R+x18N5~O(IF@1+7-Y7;dc62)[7Nt+O]cZE~|N+X');
define('AUTH_SALT', '65BO4N@3]XajM999~&S|8Wo6/#g148:%8FNx#y3F5Ou04Ime@H:J9ep~0;2gNTCb');
define('SECURE_AUTH_SALT', '14/831eVnju~15j607V[C-_Zo85FcVD]+N5(8:fzk*446hf64mUVyyI#L4VQ-3!t');
define('LOGGED_IN_SALT', 'p_Gz~[bF[*UM3A:f-8#-XL4O9(e*i@aja82HU6!Ul9%W*h!AV7&2J4_o83]AVF)7');
define('NONCE_SALT', '6aiC5Q&YAk0x(id~0T4k2_AyJb1dV;-Cc~|D;O6sHK/4(Ydo6LRE_#g&Qff!Nc-6');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'V3PSI1_';


define('WP_ALLOW_MULTISITE', true);

define( 'DISABLE_WP_CRON', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
