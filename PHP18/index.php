<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php work</title>
</head>
<body>
    <form action="./index.php" method="post">
        <label>Username:</label>
        <input type="text" name="username">
        <label>Age:</label>
        <input type="text" name="age">
        <label>Email:</label>
        <input type="email" name="email">
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>

<?php
// PHP how to sanitize/validate input
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);  // filter_input(source, key, filter);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        if(empty($age)){
            echo "this is not valid";
        }else{
            echo "you are " . $age . " years old";
        }

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        if(empty($email)){
            echo "this is not valid";
        }else{
            echo "your email is " . $email;
        }
    }


    // Clean or make the input safer. filter sanitize

    // Check whether the input is valid. filter validate












?>