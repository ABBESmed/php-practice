<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>radio button</title>
</head>
<body>
    <form action="./index.php" method="post">
        <input type="radio" name="credit_card" value="visa">
        Visa <br>
        <input type="radio" name="credit_card" value="Master card">
        Master card <br>
        <input type="radio" name="credit_card" value="American express">
        American express <br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>


<?php
// PHP radio buttons explained
if(isset($_POST["confirm"])){

    if(isset($_POST["credit_card"])){
        $credit_card = $_POST["credit_card"];

    if($credit_card == "visa"){
        echo "you selected visa";
    }elseif($credit_card == "Master card"){
        echo "you selected mastercard";
    }elseif($credit_card == "American express"){
        echo "you selected American express";
    }
    }else{
        echo "please make a selection";
    }

    switch($credit_card){
        case "visa":
            echo "u selected visa";
            break;

        case "Master card":
            echo "u selected Master card";
            break;

        case "American express":
            echo "u selected American express";
            break;

        default: 
            echo "Please make a selection";
    }
    
}












?>