<?php
$conn = new PDO('mysql:host=localhost;dbname=login-test', $user, $pass);
$statement = $conn->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
$statement->execute([':username' => $_POST['userName'], ':password' => $userpass]);
$result = $statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>