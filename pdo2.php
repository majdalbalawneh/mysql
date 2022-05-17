<?php
$servername = "localhost";
$username = "root";
$password = "";
$DB="pdnn";

// set the PDO error mode to exception ;dbname=pdoo"

try {
    $conn =new PDO("mysql:host=$servername;$DB", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE $DB";// use exec() because no results are returned
  
  $conn->exec($sql);
 
  echo "Database created successfully<br>";
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    
  $t = "CREATE DATABASE $db"; 
  $conn->exec($t);
   $x= "INSERT INTO users(firstname,lastname,email) VALUES ('ali','asas','asas@test.com');";
   $conn->exec($x);
   $a= "UPDATE users SET firstname= 'ahmad' WHERE id=2 ";
   $conn->exec($a);
   $y="DELETE FROM users WHERE id=4;";
   $conn->exec($y);
   $u= "SELECT firstname FROM users;";
   echo $conn->exec($u);
   echo "<br> Connected successfully";
}catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
  
    $conn = null;


       
//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//  $db="create";

//  try{

       ?>

       