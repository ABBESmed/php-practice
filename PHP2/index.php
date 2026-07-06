<?php 
    // variables and data types
    // this variables types is strings
    $name = "Mohammed";
    echo $name . "<br />";
    echo "Good morning " . $name . " ! <br />";
    $food = "pizza";
    $email = "mohammed@gmail.com";
    echo "Your email is: " . $email . "<br />";

    // this variables types is integers
    $age = 28;
    echo "You are " . $age . " years old. <br />";
    $users = 2;
    echo "There are " . $users . " users online. <br />";
    $quantity = 3;
    echo "You would like to buy " . $quantity . " items <br />";

    // this variables types is floats
    $gpa = 2.5;
    echo "Your gpa is: " . $gpa . "<br />";
    $price = 99.99;
    echo "Your controller cost " . $price . " euro. <br />";
    $tax_rate = 5.1;
    echo "The sales tax rate is: " . $tax_rate . "% <br />";

    // this variables types is Booleans
    $gym_membre = true;
    $gamer = true;
    $for_sale = false;

    echo "Gym membreship status: " . $gym_membre . "<br />";
    echo "Is he a gamer " . $gamer . "<br />";
    
    $total = null;
    echo "You have ordered " . $quantity . " x " . $food . "<br />";
    $total = $quantity * $price;
    echo "Your total is: " . $total . " euro <br />"
?>