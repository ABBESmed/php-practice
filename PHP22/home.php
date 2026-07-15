<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) // gives the path of the PHP file currently running. ?>" method="post"> <!--for now the name of this page is index.php but if i change to home.php i will have a problem with action thats why i use $_SERVER -->
        <label>username:</label>
        <input type="text" name="username">
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php 
// PHP $_SERVER explained  $_SERVER = information about the page request.
foreach($_SERVER as $key => $value){
    echo $key . " = " . $value . "<br>";
} 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "hello";
}
?>