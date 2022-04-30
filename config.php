<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
        define( 'DB_NAME', 'dbaldwin14' );
        define( 'DB_USER', 'dbaldwin14' );
        define( 'DB_PASSWORD', 'dbaldwin14');
        define( 'DB_HOST', 'localhost' );

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>