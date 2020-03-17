<?php
$conn = new PDO('mysql:host=localhost;dbname=login-test', $user, $pass);
$statement = $conn->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$statement->execute([':username' => $_POST['userName'], ':password' => $userpass]);
$result = $statement->fetchAll();
?>