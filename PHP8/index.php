<?php 
// PHP switches explained

// A switch is another way of writing many if...else if...else statements. Use it when you want to compare one variable with many possible values.

// here is an example with if 

$grade = "A";
    /*if($grade === "A"){
        echo "YOU DID GREAT.";
    }elseif($grade === "B"){
        echo "YOU DID GOOD.";
    }elseif($grade === "C"){
        echo "YOU DID OKAY.";
    }elseif($grade === "D"){
        echo "YOU DID POORLY.";
    }elseif($grade === "F"){
        echo "YOU FAILED.";
    }else{
        echo $grade . " IS NOT A VALID GRADE.";
    }*/

    switch($grade){
        case "A":
            echo "YOU DID GREAT. <br />";
            break;

        case "B":
            echo "YOU DID GOOD.";
            break;

        case "C":
            echo "YOU DID OKAY.";
            break;

        case "D":
            echo "YOU DID POORLY.";
            break;

        case "F":
            echo "YOU FAILED.";
            break;

        default:
            echo $grade . " IS NOT A VALID GRADE.";

    }

    $date = date("l");  // date("l") : get the current date.
    
        switch($date){
            case "Monday":
                echo "I hate Mondays.";
                break;

            case "Tuesday":
                echo "It is Taco Tuesday.";
                break;

            case "Wednesday":
                echo "The work week is half over.";
                break;

            case "Thursday":
                echo "It's almost the weekend.";
                break;

            case "Friday":
                echo "The weekend is here.";
                break;

            case "Saturday":
                echo "Time to party!";
                break;

            case "Sunday":
                echo "Time to relax.";
                break;

            default:
                echo $date . " is not a day.";
        }

?>