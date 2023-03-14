<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mydb';

//create connection

$connection = mysqli_connect($hostname, $username, $password, $dbname);

//check connection

if (!$connection) {
    die("Unable to Connect to the database: ".mysqli_connect_error());

} else {
    //echo 'SUCCESS! Connected to the database.';
}

?>