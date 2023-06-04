<?php

require_once 'vendor/autoload.php';

// Create an F3 (Fat Free Framework) object
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {

    // Define View page
    $view = new Template();
    echo $view->render('views/home.html');

});

session_start();

// Create an instance of the Controller class and pass the $f3 object
$controller = new Controller($f3);

// Define a route for personal info
$f3->route('GET|POST /personalinfo', [$controller, 'personalInfo']);

/*// Define a route for processing personal info
$f3->route('POST /process-personal-info', [$controller, 'processPersonalInfo']);*/


// Define a route for experience
$f3->route('GET|POST /experience', [$controller, 'experience']);

// Define a route for mailing list
$f3->route('GET|POST /mailinglist', [$controller, 'mailingList']);


// Define a route for summary
$f3->route('GET /summary', [$controller, 'summary']);

// Run the framework
$f3->run();
