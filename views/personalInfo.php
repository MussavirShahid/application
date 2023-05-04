<?php
// Start the session
session_start();

// Initialize session variables
$_SESSION['first_name'] = "";
$_SESSION['last_name'] = "";
$_SESSION['email'] = "";
$_SESSION['state'] = "WASHINGTON";
$_SESSION['phone'] = "";

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Save form data to session variables
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['phone'] = $_POST['phone'];

    // Redirect to the next page
    header('Location: experience.php');
    exit;
}
?>

<!-- HTML form for Personal Information page -->
<div id="page-1" class="form-page">
    <h2>Personal Information</h2>
    <form method="POST">
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" id="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" id="last_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="state">State:</label>
            <select name="state" id="state">
                <option value="WASHINGTON" selected>Washington</option>
                <option value="ALABAMA">Alabama</option>
                <option value="ALASKA">Alaska</option>
                <!-- Add more options for other states -->
            </select>
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" required>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">Next</button>
        </div>
    </form>
</div>
