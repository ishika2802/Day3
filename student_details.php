<html>
    <head>
        <title>STUDENT DETAILSFORM</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body style="background-color: lightgray;">
        <h1>STUDENT DETAILS FORM</h1>
        <form method="post" action="details.php">
        <div class="mb-3 row">
        <div class="col-sm-10">
        FullName: <input type="text" name="fname" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Student Id: <input type="number" name="sid"  required>
        </div>
        </div>
        <br>
        
        <p><h1>Subject Marks</h1></p>
        <div class="mb-3 row">
        <div class="col-sm-10">
        Data structure: <input type="number" name="ds" min="0" max="100" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Computer Networks: <input type="number" name="cn" min="0" max="100" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        DBMS: <input type="number" name="dbms" min="0" max="100" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Web technology: <input type="number" name="wt" min="0" max="100" required>
        </div>
        </div>
        <br>

        <div class="mb-3 row">
        <div class="col-sm-10">
        Advance java: <input type="number" name="aj" min="0" max="100" required>
        </div>
        </div>
        <br> 
        <input type="submit">
        </form>
    </body>
</html>