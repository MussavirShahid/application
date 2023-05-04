<?php
session_start();

// Initialize variables
$software_jobs = array();
$industry_verticals = array();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get selected checkboxes for software development jobs
    if (!empty($_POST["software_jobs"])) {
        $software_jobs = $_POST["software_jobs"];
    }

    // Get selected checkboxes for industry verticals
    if (!empty($_POST["industry_verticals"])) {
        $industry_verticals = $_POST["industry_verticals"];
    }

    // Save selections to session variables
    $_SESSION["software_jobs"] = $software_jobs;
    $_SESSION["industry_verticals"] = $industry_verticals;

    // Redirect to summary page
    header("Location: summary.php");
    exit();
}
?>

<!-- Mailing list page HTML -->
<div class="container">
    <h1>Mailing Lists</h1>
    <p>Please select the mailing lists you would like to subscribe to:</p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label>Software Development Jobs</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="JavaScript">
                <label class="form-check-label">JavaScript</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="PHP">
                <label class="form-check-label">PHP</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="Java">
                <label class="form-check-label">Java</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="Python">
                <label class="form-check-label">Python</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="HTML">
                <label class="form-check-label">HTML</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="CSS">
                <label class="form-check-label">CSS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="ReactJS">
                <label class="form-check-label">ReactJS</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="software_jobs[]" value="NodeJS">
                <label class="form-check-label">NodeJS</label>
            </div>
        </div>

        <div class="form-group">
            <label>Industry Verticals</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="Saas">
                <label class="form-check-label">Saas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="Saas">
                <label class="form-check-label">Health tech</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="health tech">
                <label class="form-check-label">Saas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="Ag tech">
                <label class="form-check-label">Ag tech</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="HR tech">
                <label class="form-check-label">HR tech</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="Industrial tech">
                <label class="form-check-label">Industrial tech</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="industry_verticals[]" value="Cybersecurity">
                <label class="form-check-label">Cybersecurity</label>
            </div>
        </div>
    </form>
