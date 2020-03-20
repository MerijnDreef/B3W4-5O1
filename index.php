<?php
$dbservername = "localhost";
$username = 'SilverHawk'; 
$password = '2lhTgGvMS4YKS3t2H7MV';
$dbname = "characters";
try {
    $conn = new PDO("mysql:host=$dbservername;dbname=characters", $username, $password);
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
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
    <title>character knowledge</title>
</head>
<body>
    <h1>Alle 10 characters uit de database</h1>
    <?php 
    foreach($result as $character){
   echo "<div class='doos'><img src='images/" . $character['avatar'] . "'>";
   echo "<p id='naamText'>" . $character['name'] . "</p>";
   echo "<p id='health'> health : " . $character['health'] . "</p>";
   echo "<p id='attack'> attack : " . $character['attack'] . "</p>";
   echo "<p id='defense'> defense : " . $character['defense'] . "</p></div>";
    }
    include("footer.php");
   ?> 
</body>
</html>