<?php

require_once "database.php";

// Function to sign in the user
function signin($email, $password) {
    global $pdo;

    $query = "SELECT * FROM sign WHERE email = :email";
    $statement = $pdo->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $user = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    if ($user && password_verify($password, $user['password'])) {
        // Password matches
        header('Location: home.php');
        exit;
    } else {
        // Invalid credentials
        echo '<script>alert("Invalid email or password");</script>';
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'signin') {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    signin($email, $password);
}

?>
