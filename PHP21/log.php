<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="log.php" method="post">
        <label>Id:</label>
        <input type="text" name="id">
        <label>PassKey:</label>
        <input type="password" name="passkey">
        <input type="submit" value="log" name="log">
    </form>
</body>
</html>

<?php 
if(isset($_POST["log"])){
    if(!empty($_POST["id"]) && !empty($_POST["passkey"])){
        $_SESSION["id"] = $_POST["id"];
        $_SESSION["passkey"] = $_POST["passkey"];

        header("location: here.php"); // we use this to jump to other pages like here.php
    }else{
        echo "missing id or passkey";
    }
}


?>