

<?php

$servername = "localhost";
$username = "root";
$password = "";
$db= 'test';

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("<h1 style = 'color:red;'> try again ro'a majd tamara Connection failed:  " . $conn->connect_error.'</h1>');
}
echo "<h1 style = 'color:green;'>Connected successfully bravooooooo ro'a majd tamara </h1>";
?>