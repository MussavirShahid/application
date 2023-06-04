<?php



class Controller
{
    private $_f3;

    public function __construct($f3)
    {
        $this->_f3 = $f3;

        require_once 'model/validation.php';
    }

    public function home()
    {
        // Define View page
        $view = new Template();
        echo $view->render('views/home.html');
    }

    public function personalInfo()
    {
        // If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Get the data
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $state = $_POST['state'];
            $phone = $_POST['phone'];

            // Validate the data
            if (!validFirst($firstname)) {
                $this->_f3->set('errors["firstname"]', 'Invalid firstname');
            }

            if (!validLast($lastname)) {
                $this->_f3->set('errors["lastname"]', 'Invalid lastname');
            }

            if (!validPhone($phone)) {
                $this->_f3->set('errors["phone"]', 'Invalid Phone Number');
            }

            if (!validEmail($email)) {
                $this->_f3->set('errors["email"]', 'Invalid Email');
            }

            // Store the data in the session array
            $this->_f3->set('SESSION.firstname', $firstname);
            $this->_f3->set('SESSION.lastname', $lastname);
            $this->_f3->set('SESSION.email', $email);
            $this->_f3->set('SESSION.state', $state);
            $this->_f3->set('SESSION.phone', $phone);

            //create new applicant
            if(empty($this->_f3->get("errors"))) {
                if(isset($_POST['true']))
                {
                    $applicant = new Applicant_SubscribedToLists(
                        $firstname,
                        $lastname,
                        $email,
                        $state,
                        $phone
                    );
                } else {
                    $applicant = new Applicant(
                        $firstname,
                        $lastname,
                        $email,
                        $state,
                        $phone
                    );
                }
                $this->_f3->set('SESSION.applicant', $applicant);
                if (empty($this->_f3->get('errors'))) {
                    $this->_f3->reroute('experience');
                }
            }

            /*// Redirect to the experience route
            if (empty($this->_f3->get('errors'))) {
                $this->_f3->reroute('experience');
            }*/
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/personalInfo.html');
    }


    public function experience()
    {
        // If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Get the data
            $bio = $_POST["bio"];
            $github = $_POST['github'];
            $years = $_POST['years'];
            $relocate = $_POST['relocate'];

            // Validate the data
            if (!validGithub($github)) {
                $this->_f3->set('errors["github"]', 'Invalid URL');
            }

            if (!validExperience($years)) {
                $this->_f3->set('errors["years"]', 'Invalid Experience');
            }

            // Store the data in the session array
            $this->_f3->set('SESSION.bio', $bio);
            $this->_f3->set('SESSION.github', $github);
            $this->_f3->set('SESSION.years', $years);
            $this->_f3->set('SESSION.relocate', $relocate);

            // Check if the mailing list checkbox is selected
            $optIn = isset($_POST['mailingListCheckbox']);

            // Store the opt-in status in a session variable
            $this->_f3->set('optIn', $optIn);

            // Redirect to the appropriate route
            if (empty($this->_f3->get('errors'))) {
                if ($optIn) {
                    $this->_f3->reroute('mailing-list');
                } else {
                    $this->_f3->reroute('summary');
                }
            }
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/experience.html');
    }

    public function mailingList()
    {
        // If the form has been posted
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // Get the data
            $software_jobs = implode(", ", $_POST['software_jobs']);
            $industry_verticals = implode(", ", $_POST['industry_verticals']);

            // Validate the data
            /* if (!validSelectionsJobs($_POST['software_jobs'])) {
                 $this->f3->set('errors["software_jobs"]', 'Invalid Software Jobs selected');
             }

             if (!validSelectionsVerticals($_POST['industry_verticals'])) {
                 $this->f3->set('errors["industry_verticals"]', 'Invalid industry vertical selected');
             }*/

            // Store the data in the session array
            $this->_f3->set('SESSION.software_jobs', $software_jobs);
            $this->_f3->set('SESSION.industry_verticals', $industry_verticals);

            // Check if the mailing list checkbox is selected
            $optIn = isset($_POST['mailingListCheckbox']);

            // Store the opt-in status in a session variable
            $this->_f3->set('optIn', $optIn);

            // Redirect to the summary route
            $this->_f3->reroute('summary');
        }

        // Display a view page
        $view = new Template();
        echo $view->render('views/mailingList.html');
    }

    public function summary()
    {
        // Retrieve the opt-in status from the session variable
        $optIn = $this->_f3->get('optIn');

        // Display a view page
        $view = new Template();
        if ($optIn) {
            echo $view->render('views/summary.html');
        } else {
            echo $view->render('views/summary2.html');
        }

        // Destroy the session
        session_destroy();
    }


}
