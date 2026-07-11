<?php 
// PHP arrays explained = special type of a variable that can hold more than 1 value at a time

$food_1 = "apple";
$food_2 = "orange";
$food_3 = "banana";
$food_4 = "coconut";

$foods = array("apple", "orange", "banana", "coconut");
// this is the long way to display the elements of an array
echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";

// u can use foreach loop its easier

foreach($foods as $food){
    echo $food . "<br>";
}

// to change an element in array we use:

$foods[0] = "pineapple";
foreach($foods as $food){
    echo $food . "<br>";
}

// to add an element to the end of the array we use push
array_push($foods, "strawberry");
foreach($foods as $food){
    echo $food . "<br>";
}

// u can remove the last element in array using pop
array_pop($foods);
foreach($foods as $food){
    echo $food . "<br>";
}
// to remove u r first element in an array we use shift
array_shift($foods);
foreach($foods as $food){
    echo $food . "<br>";
}

// to reverse an array u must create a new variable and assign it to array_reverse(name of u r array)
$reverse_foods = array_reverse($foods);
foreach($reverse_foods as $food){
    echo $food . "<br>";
}

// to count the elements in array we use count 
echo count($foods);






?>