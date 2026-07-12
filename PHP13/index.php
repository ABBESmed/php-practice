<?php
// PHP isset() & empty() are really useful!
// isset return true if a variable is declare and not null
$username = "Mohammed";

// echo isset($username);
if(isset($username)){
    echo "This variable is set";
}else{
    echo "This variable is not set";
}



$password = null;
echo isset($password);
// empty return true if a variable not declare , false , null , ""

$six_pack = false;

if(empty($six_pack)){
    echo "This variable is empty";
}else{
    echo "This variable is not empty";
}




?>