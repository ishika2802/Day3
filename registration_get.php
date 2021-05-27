<html>
    <head>
        <title>REGISTRATION FORM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body style="background-color: lightgray;">
        <h1>REGISTRATION FORM</h1>
        <form method="get" action="display.php">
        <div class="mb-3 row">
        <div class="col-sm-10">
        First Name: <input type="text" name="fname" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Last Name: <input type="text" name="lname" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Age: <input type="number" name="age" min="1" and max="100" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Email: <input type="email" name="email" required>
        </div>
        </div>
        <br>
    
        <input type="submit">
        </form>
    </body>
</html>