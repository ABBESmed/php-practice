<?php 
// PHP if statements explained : condition true do something , condition false do not do it.

    $age = 10;

    if ($age >= 18){
        echo "You may enter this website.";
    }elseif ($age == 0){
        echo "You were just born.";
    }elseif ($age < 0){
        echo "That was not a valid age.";
    }elseif ($age >= 100){
        echo "You are to old to enter this website.";
    }
    else {
        echo "You must be 18+ to enter. <br />";
    }

    $adult = true;

    // u can write $adult == true or just if($adult)
    if ($adult == true){
        echo "You may enter the room.";
    }else{
        echo "You can not enter the room.";
    }





?>