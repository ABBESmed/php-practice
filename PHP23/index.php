<?php 

    // hashing = transforming sensitive data (password)
    //          into letters, numbers, and/or symbols
    //          via a mathematical process. (similar to encryption)
    //          Hides the original data from 3rd parties.


    $password = "123456789";

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $password . "<br>";

    echo $hash;


    if(password_verify("burger666", $hash)){
        echo "you are logged in";
    }else{
        echo "incorrect password";
    }
?>