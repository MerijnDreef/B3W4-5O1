<?php
$conn = new PDO('mysql:host=localhost;dbname=characters', $user, $pass);
$statement = $conn->prepare('SELECT `name`, `avatar`, `color`, `health`, `attack`, `defense` FROM characters ORDER BY `name`');
$statement->execute();
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
    <img href="index.php.png">
</body>
</html>