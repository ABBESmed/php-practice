<?php 
// PHP logical operators explained = combine conditional statements for example if (cond1 && cond2)
/*
    && = true if both conditions are true.

    || = true if at least one condition is true.

    ! = true if false. false if true.
*/
    $temp = 82;

    if ($temp >= 0 && $temp <= 30){
        echo "Weather good.";
    }else{
        echo "Weather bad. <br />";
    }

    $cloudy = true;

    if($cloudy){
        echo "It's cloudy. <br />";
    }else{
        echo "It's sunny.";
    }

    $age = 18;
    $citizen = true;

    if($age >=18 && $citizen){
        echo "You can vote.";
    }else{
        echo "You can not vote.";
    }
?>