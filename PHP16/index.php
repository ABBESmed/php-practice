<?php
// PHP functions explained
// here $first_name is parametre An empty box waiting for a value.
    function happy_birthday(string $first_name, int $age){
        echo "happy birthday dear " . $first_name . ".<br>";
        echo "happy birthday to you. <br>";
        echo "happy birthday dear " . $first_name . ".<br>";
        echo "you are " . $age . " years old! <br>";
    }
    // here "Mohammed" is argument The actual value you put into the box.
    happy_birthday("Mohammed", 28);
    happy_birthday("john", 21);


function is_even(int $number){
    $result = $number % 2;
    return $result;  // return = give the result back to whoever called the function.
}
echo is_even(11) . "<br>";

function hypotenuse(int $a, int $b){
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo hypotenuse(4, 5);


?>