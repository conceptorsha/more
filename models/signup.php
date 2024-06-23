<?php
include_once "database.php";


function  register_user($name, $email,$password)
{
    global $pdo;


    $query = "INSERT INTO users (name,email,password) VALUES (:name,:email,:password) ";

    $statement = $pdo->prepare($query);

    $statement ->bindValue(':name',$name);
    $statement->bindValue(':email', $email); 

    $statement->bindValue(':password', $password); 
    $statement->execute();
    $statement->closeCursor();

    echo '<script type="script/javascript">alert("registration was a success")</script>';
}