<?php

$servername = "localhost";
$username = "root";
$password = "root";
$port = 8889;
$dbName = "myDB";

// Create connection
$conn = mysqli_connect("$servername:$port", $username, $password, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "<p>Connected successfully</p>";

// Create database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//   echo "<p>Database created successfully</p>";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// $sql = "CREATE TABLE student (
//     firstName VARCHAR(100),
//     lastName VARCHAR(100),
//     studentID VARCHAR(10),
//     school VARCHAR(100),
//     enrolled YEAR

// )";

if (mysqli_query($conn, $sql)) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }

$sql = "INSERT INTO student VALUES('Robt', 'Blos', 's3457735', 'CSIT', 2015);";
$sql .= "INSERT INTO student VALUES('obert', 'oggs', 's3457735', 'CSIT', 2015);";

if (mysqli_multi_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

// mysqli_close($conn);

?>