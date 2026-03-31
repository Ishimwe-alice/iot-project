<?php
$host = "localhost";
$username = "root";
$password = ""
$db_name = "sensor_data";
$conn = mysqli_connect($host, $username, $password, $db_name);


if ($conn) {
    echo "Connection successful";
} else {
    else("Connection failed: " . mysqli_connect_error());
}
?>