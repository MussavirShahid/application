

<!-- HTML form for Personal Information page -->
<div id="page-1" class="form-page">
    <h2>Personal Information</h2>
    <form action="#" method="POST">
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
