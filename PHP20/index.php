<?php
// PHP $_COOKIE explained setcookie() = save data in browser ,$_COOKIE = read saved cookie data

// to create a cookie we use setcookie("key", "value", time() + 86400 * n, "/")  (1day = 86400)  "/" : available on the whole website

// to delete a cookie just use - 0  instead of + 86400 * n

setcookie("fav_food", "pizza", time() + 86400 * 2, "/" );

foreach($_COOKIE as $key => $value){
    echo $key . " = " . $value . "<br>";
}


if(isset($_COOKIE["fav_food"])){
    echo "Buy more " . $_COOKIE["fav_food"];
}else{
    echo "I do not know your favorite food";
}


?>