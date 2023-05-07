<!DOCTYPE html>
<html lang="">
<head>
    <title>Experience</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Mailing list page HTML -->
<div class="container">
    <h1>Mailing Lists</h1>
    <p>Please select the mailing lists you would like to subscribe to:</p>

    <form method="post" action="#">
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
        <button type="submit" name="submit" class="btn btn-primary float-right">Next</button>
    </form>
</div>
</body>
</html>