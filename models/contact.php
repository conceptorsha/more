<?php
require_once "database.php";




function create_contac($name, $email,$message)
{
    global $pdo;


    $query = "INSERT INTO contac (name,email,message) VALUES (:name,:email,:message) ";

    $statement = $pdo->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':email', $email); 

    $statement->bindValue(':message', $message); 
    $statement->execute();
    $statement->closeCursor();
    echo '<script type="script/javascript">alert("registration was a success")</script>';
}



?>