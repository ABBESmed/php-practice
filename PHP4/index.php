<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST</title>
</head>
<body>
    <!-- first we create a form -->
    <!-- here action is where the data is sent and also we should specify the method get or post-->
    <form action="./index.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"><br>

        <label>password:</label><br>
        <input type="password" name="password"><br><br>

        <!-- we use input type="submit" cause we want to send data -->
        <input type="submit" value="Login">
    </form>

    <!-- first we create a form -->
    <!-- here action is where the data is sent and also we should specify the method get or post-->
    <form action="./index.php" method="post">
        <label>id:</label><br>
        <input type="text" name="id"><br>

        <label>passkey:</label><br>
        <input type="password" name="passkey"><br><br>

        <!-- we use input type="submit" cause we want to send data -->
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// $_GET and $_POST special variables we used them to collect data from an HTML form data sent into action="some_file.php"
// $_GET and $_POST they are special global variables they can hold more than 1 value basically like list or array = [.., ... ; ....]

    // here i typed username cause name = "username" its important name !!!! same thing for password
    echo $_GET["username"] . "<br />"; // $_GET[(key)"username" => (value)"Mohammed"];
    echo $_GET["password"] . "<br />";

    echo $_POST["id"] . "<br />";
    echo $_POST["passkey"] . "<br />";
?>




