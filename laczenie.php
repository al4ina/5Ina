<?php
$servername ="localhost";
$username = "root";
$password ="";


$conn = mysqli_connect($servername, $username, $password);


if (!$conn) {
    die("Connection failed." . mysqli_connect_error());


}
echo "Connected successfully";
$database="1Egzamin5";
$sql = "CREATE DATABASE $database";


if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
}
else {
    echo "Error creating database:" . mysqli_error($conn);
}
if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected:";
}
else {
    echo "Error select database:";
    mysqli_error($conn);
} ?>