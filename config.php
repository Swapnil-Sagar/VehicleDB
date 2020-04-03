<?php
$dbhost = "localhost:3307"; // host name
$dbUsername = "root";  // database username
$dbPassword = ""; // database password
$dbname = "vehiclereg"; // database name

$connection = new mysqli($dbhost,$dbUsername,$dbPassword,$dbname);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
?>