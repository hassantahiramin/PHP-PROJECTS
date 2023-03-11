<?php
// Load Application Configuration File
require_once('config.php');
// Load Application Functions File
require_once('functions.php');
// Load Filter Sanitize File
require_once('sanitize.php');
// Load Html Purifier Files
require_once(HTML_PURIFIER);
// Load Php Mailer Files
require_once(PHP_MAILER);
// Load Application Class Files
spl_autoload_register(function ($class_name) {
    include ROOT_PATH.DS.CLASSES_DIR.DS.$class_name . '.php';
});
// Initialise database class
$db = new dbclass();
// Initialise HTMLPurifier classes
$Cart= new Cart();
//$GoogleAnalytics = new GoogleAnalytics();
//$metadata = new metadata();
//$slider = new slider();
$Categories = new Categories();
$Products = new Products();
$ProductDetails = new ProductDetails();
$Search = new Search();
$Competitor = new Competitor();
$logo = new Logo();
//$token = new Token();
//$csrf_token = $token->generate();
//$social= new social();
//$copyright= new copyright();
//$FooterCompanyName= new FooterCompanyName();
