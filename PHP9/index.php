<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>
<body>
    <form action="./index.php" method="post">
        <label>Enter a number to count to:</label>
        <input type="text" name="counter">
        <input type="submit" value="start">
    </form>
</body>
</html>





<?php
// PHP for loops explained : repeat some code a certain number of times.
/*for($i = 0; $i < 5; $i++){
    echo "Hello <br />";
}

for($i = 0; $i < 100; $i++){
    echo $i . "<br />";
}*/

$counter = $_POST["counter"];

for($i = 0; $i <= $counter; $i++){
    echo $i . "<br />";
}








?>