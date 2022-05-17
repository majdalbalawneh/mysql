<?php

$servername="localhost";
$username="root";
$password="";
$db="create";

try{
    $conn=new PDO("mysql:host=$servername;dbname=$db" ,$username,$password);
    $sql="CREATE DATABASE $db";
    $conn->exec($sql);
    // $s="INSERT INTO student(name_s) VALUES ('ALI');";
    // $conn-> exec($s);

    echo "done";
}
catch(Exception $h){
    echo "error".$h->getMessage();
}




 $servername = "localhost";
 $username = "root";
 $password = "";
 $db="create";

 try{
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
 } catch(PDOException $e) {
   echo "Connection failed: " . $e->getMessage();
 }
?>

