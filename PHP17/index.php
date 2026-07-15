<?php
// PHP string functions are awesome
    $username = "Abbes Mohammed Zoheir";
    $phone = "123-456-7890";

    $my_name = array("Timmy", "turner");
    // $username = strtolower($username);

    // $username = strtoupper($username);

    // $username = trim($username);  trim will remove the white space "       Abbes Mohammed         Zoheir" => "Abbes Mohammed Zoheir"

    // $username = str_pad($username, 90, "*");  str_pad() = make a string longer by adding characters.

    /* $phone = str_replace("-", "", $phone);  ("-", "", $phone) Find: "-" , Because PHP needs to know where to search. str_replace(what, replacement, where);
                                                Replace with: nothing ""
                                                Search inside: $phone 
    echo $phone; */
    // $username = strrev($username);

    // $username = str_shuffle($username); // Take the text inside $username, mix its letters randomly, then save the mixed version back into $username.

    //  $equals = strcmp($text1, $text2); /*  0 → strings are equal ,less than 0 → first string comes before second ,greater than 0 → first string comes after second */

    // $count = strlen($username); echo $count;

    /* $index = strpos($username, " "); 
    echo $index; */

    /* $first = substr($username, 0, 5);
    echo $first; */

    /* $fullname = explode(" ", $username); // explode(separator, string); transform a string to an array
    foreach($fullname as $name){
        echo $name . "<br>";
    } */
    

     $my_name = implode(" ", $my_name);
     echo $my_name;   
    echo $username;















?>