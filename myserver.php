<?php
$servername = "localhost";
$username = "root";
$password = "I95dev@123";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    
  die("Connection failed: " . $conn->connect_error);

}

// Create database
$sql = "CREATE DATABASE Himanshu";

if ($conn->query($sql) === TRUE) {

  echo "Database created successfully";

} 

else {

  echo "Error creating database: " . $conn->error;


}

$conn->close();

?>