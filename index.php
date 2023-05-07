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

// Define View page
    $view = new Template();
    echo $view->render('views/home.html');

});

//Define a a personal info route

$f3->route('GET /personalinfo', function() {

// Define View page
    $view = new Template();
    echo $view->render('views/personalInfo.html');

});


// Create a route "/personal-info" -> personalInfo.html
$f3->route('GET|POST /personalinfo', function($f3) {

    // If the form has been posted
    // "Auto-global" arrays:  $_SERVER, $_GET, $_POST
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        // Get the data
       //array(5) { ["first_name"]=> string(8) "Muhammad" ["last_name"]=> string(6) "Shahid" ["email"]=> string(24)
        // "mussavirshahid@gmail.com" ["state"]=> string(10) "WASHINGTON" ["phone"]=> string(10) "4242099636" }

        /*$firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $state = $_POST['state'];
        $phone = $_POST['phone'];*/

        // Validate the data

        // Store the data in the session array
        /*$f3->set('SESSION.firstname', $firstname);
        $f3->set('SESSION.lastname', $lastname);
        $f3->set('SESSION.email', $email);
        $f3->set('SESSION.state', $state);
        $f3->set('SESSION.phone', $phone);*/

        // Redirect to experience route
        $f3->reroute('experience');
    }
    // Display a view page
    $view = new Template();
    echo $view->render('views/personalInfo.html');
});

// Create a route "/experience" -> experience.html
$f3->route('GET|POST /experience', function($f3) {


    // If the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        //Get the data
        /*var_dump($_POST);
        echo var_dump();*/
       /* array(5) { ["bio"]=> string(2) "df" ["github"]=> string(2) "om" ["years"]=> string(1) "2" ["relocate"]=>
         string(3) "yes" ["submit"]=> string(0) "" }*/
        /*$bio = $_POST["bio"];
        $github = $_POST['github'];
        $years = $_POST['years'];
        $relocate = $_POST['relocate'];
*/

        //Validate the data

        //Store the data in the session array
        /*
        $f3->set('SESSION.bio', $bio);
        $f3->set('SESSION.github', $github);
        $f3->set('SESSION.years', $years);
        $f3->set('SESSION.relocate', $relocate);
        */
        //Redirect to the summary route
        $f3->reroute('mailing-list');
    }

    // Display a view page
    $view = new Template();
    echo $view->render('views/experience.html');
});
// Create a route "/mailing-list" -> mailingList.html
$f3->route('GET|POST /mailing-list', function($f3) {


    // If the form has been posted
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        //Get the data
        /*var_dump($_POST);
        echo var_dump();
        */
        /*array(3) { ["software_jobs"]=> array(3) { [0]=> string(10) "JavaScript" [1]=> string(3) "PHP" [2]=>
        string(4) "Java" } ["industry_verticals"]=> array(3) { [0]=> string(4) "Saas" [1]=> string(7) "Ag tech" [2]=>
        string(13) "Cybersecurity" } ["submit"]=> string(0) "" }*/
        /*$software_jobs = implode(", ", $_POST['software_jobs']);
        $industry_verticals = implode(", ", $_POST['industry_verticals']);*/


        //Validate the data

        //Store the data in the session array

       /* $f3->set('SESSION.software_jobs', $software_jobs);
        $f3->set('SESSION.industry_verticals', $industry_verticals);*/

        //Redirect to the summary route
        $f3->reroute('summary');
    }

    // Display a view page
    $view = new Template();
    echo $view->render('views/mailingList.html');
});

// Create a route "/summary" -> summary.html
$f3->route('GET /summary', function() {


    // Display a view page
    $view = new Template();
    echo $view->render('views/summary.html');

    /*session_destroy();*/
});

// Run Fat Free Framework
$f3->run();