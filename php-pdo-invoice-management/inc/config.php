<?php

// Database Configuration Settings
defined("DB_DRIVER") ? null: define("DB_DRIVER", "mysql");
defined("DB_HOSTNAME") ? null: define("DB_HOSTNAME", "localhost");
defined("DB_PORT") ? null: define("DB_PORT", "3306");
defined("DB_USERNAME") ? null: define("DB_USERNAME", ""); //Database User Name
defined("DB_PASSWORD") ? null: define("DB_PASSWORD", ""); //Database Password
defined("DB_DATABASE") ? null: define("DB_DATABASE", ""); //Database Name
defined("DB_CHARSET") ? null: define("DB_CHARSET", "SET NAMES utf8");
define('DB_PREFIX', '');
?>
