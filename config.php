<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system-configuration-overrides.html

$environment = $_ENV['ENVIRONMENT'];

$config['app_version'] = '7.2.12';
$config['site_license_key'] = $_ENV['SITE_LICENSE_KEY'];
$config['encryption_key'] = $_ENV['ENCRYPTION_KEY'];
$config['session_crypt_key'] = $_ENV['SESSION_CRYPT_KEY'];
$config['show_ee_news'] = 'n';

$config['base_url'] = $_ENV['BASE_URL'];
$config['site_url'] = $config['base_url'];
$docroot = $_SERVER['DOCUMENT_ROOT'];

$config['cp_url'] = $config['base_url'] . "/admin.php";
$config['base_path'] = $docroot . "/";
$config['index_page'] = '';
$config['site_index'] = '';
$config['theme_folder_path'] = $config['base_path'] . "themes/";
$config['theme_folder_url'] = $config['base_url'] . "/themes/";

$config['require_cookie_consent'] = 'n';
$config['cp_session_type'] = 'cs';
$config['allow_php'] = 'n';
$config['allow_dictionary_pw'] = 'n';
$config['name_of_dictionary_file'] = 'dictionary.txt';
$config['pw_min_len'] = '8';
$config['password_lockout'] = 'y';
$config['password_lockout_interval'] = '15';
$config['expire_session_on_browser_close'] = 'y';
$config['remove_unparsed_vars'] = 'n';
$config['gmail_duplication_prevention'] = 'y';
$config['gzip_output'] = 'y';

$config['enable_devlog_alerts'] = 'y';
$config['debug'] = $_ENV['DEBUG'];
$config['show_profiler'] = $_ENV['SHOW_PROFILER'];

$config['cookie_samesite'] = $_ENV['COOKIE_SAMESITE'];
$config['cookie_domain'] = $_ENV['COOKIE_DOMAIN'];
$config['cookie_prefix'] = $_ENV['COOKIE_PREFIX'];
$config['cookie_secure'] = $_ENV['COOKIE_SECURE'];

$config['database'] = array(
	'expressionengine' => array(
		'hostname' => $_ENV['DB_HOSTNAME'],
		'database' => $_ENV['DB_DATABASE'],
		'username' => $_ENV['DB_USERNAME'],
		'password' => $_ENV['DB_PASSWORD'],
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => $_ENV['DB_PORT'],
	),
);

// ENVIRONMENT SPECIFIC
switch ($environment) {

	// DEV
	case 'development':
	case 'dev':
		$config['log_threshold'] = '5';
		$config['cache_driver'] = 'file';
	    break;
	
	// PRODUCTION
	case 'production':
	case 'prod':
	default:
		$config['log_threshold'] = '1';
		$config['cache_driver'] = 'memcached';
		$config['cache_driver_backup'] = 'file';
		$config['redis'] = array(
			'host' => $_ENV['REDIS_HOST'],
			'password' => $_ENV['REDIS_PASSWORD'],
			'port' => $_ENV['REDIS_PORT'],
			'timeout' => 0
		);
		$config['memcached'] = array(
			array(
				'host' => $_ENV['MEMCACHED_HOST'],
				'port' => $_ENV['MEMCACHED_PORT'],
				'weight' => 1,
			)
		);
	    break;
}
// EOF
