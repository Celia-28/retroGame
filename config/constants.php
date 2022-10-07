<?php
    // Start session
    session_start();

    // Create Constants to store non repeating values
    define('SITEURL', 'http://localhost:82/retroGame/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'retrogame');

    // Execute Query and save data in database
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Database connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // Selecting Database

?>