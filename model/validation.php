<?php
function validFirst($firstname)
{
// Check if the string contains only alphabetic characters
return ctype_alpha($firstname);
}
function validLast($lastname)
{
// Check if the string contains only alphabetic characters
    return ctype_alpha($lastname);
}

function validGithub($github)
{
// Validate the URL using filter_var function
return filter_var($github, FILTER_VALIDATE_URL) !== false;
}

function validExperience($years)
{
// Check if the value is numeric and greater than zero
return is_numeric($years) &&  !empty($years) && $years > 0;
}

function validPhone($phone)
{
// Remove any non-numeric characters from the phone number
$phone = preg_replace('/[^0-9]/', '', $phone);

// Check if the resulting string contains only numbers and has a valid length
return !empty($phone) && ctype_digit($phone) && strlen($phone) >= 10;
}

function validEmail($email)
{
// Validate the email using filter_var function
return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function validSelectionsJobs($selectedJobs, $software_jobs)
{
// Check each selected job against the list of valid options
foreach ($selectedJobs as $job) {
if (!in_array($job, $software_jobs)) {
return false;
}
}

return true;
}

function validSelectionsVerticals($selectedVerticals, $industry_verticals)
{
// Check each selected vertical against the list of valid options
foreach ($selectedVerticals as $vertical) {
if (!in_array($vertical, $industry_verticals)) {
return false;
}
}

return true;
}