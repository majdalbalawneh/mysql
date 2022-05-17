<?php

$dsn='mysql:host=localhost;dbname=pdotry';
$user='root';
$pass='';

try {
    $conn=new PDO($dsn,$user,$pass);

    $data = [
        'name' => $name,
        'surname' => $surname,
        'sex' => $sex,
    ];
    $sql = "INSERT INTO users (name, surname, sex) VALUES (:name, :surname, :sex)";
    $stmt= $pdo->prepare($sql);
    $stmt->execute($data);

    echo 'you are connected';
}

catch (PDOException $e){
    echo 'failed'.$e->getMessage();

}


