<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>
            Registration Form
</title>
</head>

<h1>
   TYBCA5 STUDENT FORM
</h1>
<body>
    <div>
        <h2>
            Student Registration
</h2>
</div>

<form action="connect.php" method="POST">
    <label for="user">
        Name
    </label>
    <br>

    <input type='text' name='name' id='name' require/> </br> </br>

    <label for="email">
        Email
    </label>
    <br>

    <input type='text' name='email' id='email' require/> </br> </br>

    <label for="password">
        Password
    </label>
    <br>

    <input type='text' name='password' id='password' require/> </br> </br>

    <label for="cgpa">
        Cgpa
    </label>
    <br>

    <input type='text' name='cgpa' id='cgpa' require/> </br> </br>

    <input type="Submit" name='submit' id="submit" />

</form>
</body>
</html>



