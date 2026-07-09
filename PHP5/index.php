<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP useful math functions you should know</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>x:</label>
        <input type="text" name="x">
        <br><br>
        <label>y:</label>
        <input type="text" name="y">
        <br><br>
        <label>z:</label>
        <input type="text" name="z">
        <br><br>
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php
// PHP useful math functions you should know
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    // declare a variable without assign a value like u see null
    $total = null;

    // absolute value function
    // $total = abs($x);

    // round function 
    // $total = round($x);

    // floor function 
    // $total = floor($x);

    // ceil function
    // $total = ceil($x);

    // power function
    // $total = pow($x, $y);

    // sqrt function
    // $total = sqrt($x);

    // max function
    // $total = max($x, $y, $z);

    // min function
    // $total = min($x, $y, $z);

    // pi function
    // $total = pi();

    // rand function
    // $total = rand();
    echo $total;

?>