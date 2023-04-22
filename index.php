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

/*
// Define a default route
$F3->route('GET /', function (){
   echo '<h1>Hello, World!</h1>';

//$view = new Template();
//echo $view->render('Views/home.html');
});
*/
$f3->route('GET /', function (){
    echo "Hello, World";
});

// Run Fat Free Framework
$f3->run();
