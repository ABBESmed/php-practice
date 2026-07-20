<?php 
// PHP how to connect to MySQL database

// 1. MySQLi Extension
// 2. PDO (PHP DATA Objects)


include("database.php");

$username = "paul";
$password = "7749bml";
$hash = password_hash($password, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";

try{
    mysqli_query($conn, $sql);
    echo "user now is registered";
    
}
catch(mysqli_sql_exception){
    echo "could not register user";
}

mysqli_close($conn);

?>


