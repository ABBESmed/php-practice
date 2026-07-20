<?php

    // Database server address.
    // "localhost" means MySQL is running on this computer.
    $db_server = "localhost";

    // MySQL username.
    // In XAMPP, the default username is usually "root".
    $db_user = "root";

    // MySQL password.
    // In XAMPP, the root password is usually empty.
    $db_pass = "";

    // Name of the database we want to connect to.
    $db_name = "businessdb";

    // This variable will store the database connection.
    // For now, it is empty because we are not connected yet.
    $conn = "";

    try {

        // Try to connect to MySQL.
        // The order is:
        // server, username, password, database name
        $conn = mysqli_connect(
            $db_server,
            $db_user,
            $db_pass,
            $db_name
        );

    } catch (mysqli_sql_exception) {

        // This code runs if the connection fails.
        echo "Could not connect!";
    }

?>