<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the here page <br>
    <form action="here.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>


<?php 
echo $_SESSION["id"] . "<br>";
echo $_SESSION["passkey"] . "<br>";

if(isset($_POST["logout"])){
    session_destroy();
    header("location: log.php");
}
?>