<?php
//  PHP $_SESSION explained  is a special PHP associative array used to remember a user while they move between pages. A temporary memory stored on the server.
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the login page <br>
    <a href="home.php">Home</a>
</body>
</html>

<?php 
$_SESSION["username"] = "Mohammed";
$_SESSION["password"] = "Mohammed22345";

echo $_SESSION["username"] . "<br>";
echo $_SESSION["password"] . "<br>";

?>