<?php

class Controller
{
    public function home()
    {
        // Define View page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    public function personalInfo()
    {
        // Define View page
        $view = new Template();
        echo $view->render('views/personalInfo.html');
    }

    public function processPersonalInfo($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Redirect to the appropriate route
            if (empty($f3->get('errors'))) {
                $f3->reroute('experience');
            }
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/personalInfo.html');
    }

    public function experience($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Redirect to the appropriate route
            if (empty($f3->get('errors'))) {
                $f3->reroute('mailing-list');
            }
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/experience.html');
    }

    public function mailingList($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Redirect to the appropriate route
            if (empty($f3->get('errors'))) {
                $f3->reroute('summary');
            }
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/mailingList.html');
    }

    public function summary()
    {
        // Display a view page
        $view = new Template();
        echo $view->render('views/summary.html');

        session_destroy();
    }
}
