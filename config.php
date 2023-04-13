
<?php

$servername = "localhost";

$username = "root"; 

$password = "P0S1tiv@!"; 

$dbname = "mydb"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 