<?php

/*
 * Author:Muhammad M Shahid
 * Version: 1.0
 * Description:F3 File
 */
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once ('vendor/autoload.php');

// Create an F3 (Fat Free Framework) object
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    echo 'Hello, World!';
});


$view = new Template();
echo $view->render('views/home.html');

// Run Fat Free Framework
$f3->run();