<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restaurants</title>
</head>
<body>
    <form action="./restaurants.php" method="post">
        <label>quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>

<?php 
    $item = "pizza";
    $price = 5.99;
    $_POST["quantity"];
    // but we put $_POST["quantity"]; inside a local variable like this :
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;
    echo "You have ordered " . $quantity . " x " . $item . "s. <br />";
    echo "Your total is: " . $total . " euro.";
?>