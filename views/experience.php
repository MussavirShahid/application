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
<div class="container">
    <h1>Experience</h1>
    <form method="post" action="#">
        <div class="form-group">
            <label for="bio">Biography:</label>
            <textarea class="form-control" rows="5" id="bio" name="bio"></textarea>
        </div>
        <div class="form-group">
            <label for="github">Github Link:</label>
            <input type="text" class="form-control" id="github" name="github">
        </div>
        <div class="form-group">
            <label for="years">Years of Experience:</label>
            <input type="number" class="form-control" id="years" name="years">
        </div>
        <div class="form-group">
            <label>Willing to relocate?</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="relocate" id="relocate-yes" value="yes">
                <label class="form-check-label" for="relocate-yes">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="relocate" id="relocate-no" value="no">
                <label class="form-check-label" for="relocate-no">
                    No
                </label>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary float-right">Next</button>
    </form>
</div>
</body>
</html>
