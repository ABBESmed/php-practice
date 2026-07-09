<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radius</title>
</head>
<body>
<!--html form so the user can enter the radius value-->
    <form action="./radius.php" method="post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php 
    $radius = $_POST["radius"];
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2); // for example $circumference = 31.415926; 31.42 cause 31.415 cause it contain 5
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);
    $volume = (4/3) * pi() * pow($radius, 3);
    $volume = round($volume, 2);
    echo "The Circumference of circle: " . $circumference . "m. <br />";
    echo "The Area of disk: " . $area . "m^2. <br />";
    echo "The volume of ball: " . $volume . "m^3. <br />";
?>