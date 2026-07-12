<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative array</title>
</head>
<body>
    <form action="./index.php" method="post">
        <label>Enter a country:</label>
        <input type="text" name="country">
        <input type="submit" value="submit">
    </form>
</body>
</html>
<?php
// PHP associative arrays explained = an array made of key and values pairs
$capitals = array(  "USA" => "Washington D.C.", 
                    "Japan" => "Kyoto", 
                    "South korea" => "Seoul", 
                    "India" => "New Delhi"
);

// to display the value of an associative array

echo $capitals["South korea"] . "<br>";

// to print all the keys and values we use foreach
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}

// to change or update a value of an associative array
$capitals["USA"] = "Las Vegas";
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}

// to add new key value pair 
$capitals["Algeria"] = "Alger";
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}

// to remove last element
array_pop($capitals);
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}

// to remove first element 
array_shift($capitals);
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}
// to display all the keys u need to declar assign new variable
$keys = array_keys($capitals);
foreach($keys as $key){
    echo $key . "<br>";
}

// to display all the values u need to declar assign new variable
$values = array_values($capitals);
foreach($values as $value){
    echo $value . "<br>";
}

// to flip keys => values 
/*$capitals = array_flip($capitals);
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}*/

// to reverse an array 
$capitals = array_reverse($capitals);
foreach($capitals as $key => $value){
    echo $key . " " . $value . "<br>";
}

// to count 
echo count($capitals);


$capital = $_POST["country"];


echo $capital = $capitals[$_POST["country"]];

?>