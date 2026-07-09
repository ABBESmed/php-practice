<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password checker</title>
</head>
<body>
    <form action="./password.php" method="post">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" value="check">
    </form>
</body>
</html>

<?php
// password checker
    $passwordEnter = $_POST["password"];
    $password = "1234";

    if ($passwordEnter == $password){
        echo "Access granted";
    }else{
        echo "Access denied";
    }
?>