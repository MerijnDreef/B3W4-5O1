<?php
    $conn = new PDO("mysql:host=$dbservername;dbname=characters", $username, $password);
    $stat = $conn->prepare("SELECT id, name, avatar, health, attack, defense FROM characters;");
    $stat->execute();
    $result = $stat->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/B3W45O1/style.css">
    <script src="https://kit.fontawesome.com/ca88a28f8c.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>