<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <form action="./loginform.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Log in" name="login">
    </form>
</body>
</html>
<?php

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo "username is missing";
    }elseif(empty($password)){
        echo "password is missing";
    }else{
        echo "Hello " . $username;
    }
}




?>