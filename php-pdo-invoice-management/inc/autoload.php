<?php
// Error Reporting.
error_reporting(E_ALL);
// Check Compatibility PHP Version.
if (version_compare(PHP_VERSION, '5.3.10', '<'))
{
  die('Your host needs to use PHP 5.3.10 or higher to run Application.');
}
// Load Configuration File
require_once('inc/config.php');
// Load Class Files
spl_autoload_register(function ($class_name) {
    include "classes/$class_name" . '.php';
});
// Initialise database class
$db = new dbclass();
// Initialise select class
$select = new Select();
// Initialise invoice class
$invoice = new Invoice();
// Initialise antiXss class
$antiXss = new AntiXSS();
// Initialise UTF8 class
$UTF8 = new UTF8();
// Initialise Bootup class
$Bootup = new Bootup();
