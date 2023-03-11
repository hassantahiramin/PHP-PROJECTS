<?php
// Error Reporting
define('DEBUG', false);
error_reporting(0);

if (DEBUG)
{
    ini_set('display_errors', 'On');
}
else
{
    ini_set('display_errors', 'Off');
}

// set your default time zone.
date_default_timezone_set("Asia/Karachi");

// Check PHP Version
if (version_compare(PHP_VERSION, '5.6.30', '<')) {
    die('Your host needs to use PHP Version 5.6.30 or higher to run this website.');
}

// Start Session
if(!isset($_SESSION)) {
	session_start();
}

$GLOBALS['config'] = array(
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => 604800
		),
	'session' => array(
		'session_name' => 'bms',
		'token_name' => 'token'
 		)
	);
// Website Application Version
define('Web_App_Ver', '1.46');

// Database Configuration Settings
defined("DB_DRIVER") ? null: define("DB_DRIVER", "mysql");
defined("DB_HOSTNAME") ? null: define("DB_HOSTNAME", "localhost");
defined("DB_PORT") ? null: define("DB_PORT", "3306");
defined("DB_USERNAME") ? null: define("DB_USERNAME", ""); //Database User Name
defined("DB_PASSWORD") ? null: define("DB_PASSWORD", ""); //Database Password
defined("DB_DATABASE") ? null: define("DB_DATABASE", ""); //Database Name
defined("DB_CHARSET") ? null: define("DB_CHARSET", "SET NAMES utf8");
define('DB_PREFIX', '');

// Database Table Settings
define('COMPETITOR_TBL', 'competitor_name');
define('COMPETITOR_REFERENCE_TBL', 'competitor_reference');
define('ORDERS_TBL', '');
define('PRODUCTS_TBL_EN', 'products_en');
define('CATEGORIES_TBL_EN', 'product_categories_en');
define('ATTRIBUTES_TBL', '');
define('ATTRIBUTE_VARS_TBL', '');
define('EMPTY_SHOPPING_CART', 'Your Enquiry Cart is Empty!');
define('ENQUIRY_CART_TBL', 'open_cart');
define('IMAGES_TBL', '');
define('CAROUSEL_TBL', '');
define('PAGES_TBL', '');
define('CMS_TBL', '');

// site domain name with http
defined("SITE_URL")
	|| define("SITE_URL", "http://".$_SERVER['SERVER_NAME']);

// directory separator
defined("DS")
	|| define("DS", DIRECTORY_SEPARATOR);

// root path
defined("ROOT_PATH")
	|| define("ROOT_PATH", realpath(dirname(__FILE__) . DS."..".DS));

// classes folder
defined("CLASSES_DIR")
	|| define("CLASSES_DIR", "classes");

// classes folder
defined("CORE_DIR")
	|| define("CORE_DIR", "core");
// back slash
//defined("BS")
//  || define("BS", "/");

// assets folder
defined("ASSETS_DIR")
  || define("ASSETS_DIR", "assets");

// assets folder
//defined("CSS_DIR")
//  || define("CSS_DIR", SITE_URL.BS.ASSETS_DIR.BS."css");

// assets folder
//defined("JS_DIR")
//  || define("JS_DIR", SITE_URL.BS.ASSETS_DIR.BS."js");

// pages directory
defined("PAGES_DIR")
	|| define("PAGES_DIR", "pages");

// modules folder
defined("MOD_DIR")
	|| define("MOD_DIR", "mod");

// Html Purifier
defined("HTML_PURIFIER")
	|| define("HTML_PURIFIER",  ROOT_PATH.DS.MOD_DIR.DS."htmlpurifier".DS."library".DS.'HTMLPurifier.auto.php');

// PhpMailer
defined("PHP_MAILER")
	|| define("PHP_MAILER",  ROOT_PATH.DS.MOD_DIR.DS."PHPMailer".DS.'PHPMailerAutoload.php');

// PhpMailer
defined("IP2LOCATION")
	|| define("IP2LOCATION",  ROOT_PATH.DS.MOD_DIR.DS."ip2location".DS.'IP2Location.php');


// inc folder
defined("INC_DIR")
	|| define("INC_DIR", "inc");

// templates folder
defined("TEMPLATE_DIR")
	|| define("TEMPLATE_DIR", "template");

// emails path
defined("EMAILS_PATH")
	|| define("EMAILS_PATH", ROOT_PATH.DS."emails");

// catalogue images path
defined("CATALOGUE_PATH")
	|| define("CATALOGUE_PATH", ROOT_PATH.DS."media".DS."catalogue");

// add all above directories to the include path
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(ROOT_PATH.DS.CLASSES_DIR),
	realpath(ROOT_PATH.DS.PAGES_DIR),
	realpath(ROOT_PATH.DS.MOD_DIR),
	realpath(ROOT_PATH.DS.INC_DIR),
	realpath(ROOT_PATH.DS.TEMPLATE_DIR),
	get_include_path()
)));

#ReCaptcha
define('RECAPTCHA_SITEKEY', '');
define('RECAPTCHA_SECRET', '');
define('RECAPTCHA_LAN', 'en');

define('CAROUSEL_SIDE_PAGINATION',
    '<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>');

define('PER_PAGE', 30); #pagination
define('THUMB_WIDTH', 500); // in pixels
define('THUMB_HEIGHT', 500); // in pixels
define('NO_IMAGE', 'Image Not Available'); //default
$allowedFiles = array(
    'image/pjpeg',
    'image/jpeg',
    'image/gif',
    'image/png'
);

function custom_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars)
{
    echo $message = "An error occurred in script '$e_file' on line $e_line: $e_message";
    /*
    if(SHOW_ERR) {
    echo $message;
    }
    else {
    echo '<strong>A system error has occurred. We apologize for the inconvenience.</strong>';
    }

    #debug_print_backtrace();
    */
}

set_error_handler('custom_error_handler');

?>
