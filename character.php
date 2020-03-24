<?php
$dbservername = "localhost";
$username = 'SilverHawk'; 
$password = '2lhTgGvMS4YKS3t2H7MV';
$dbname = "characters";
try {
    $conn = new PDO("mysql:host=$dbservername;dbname=characters", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    $stat = $conn->prepare("SELECT * FROM characters where name = :naam;");
    $stat->execute([':naam' => urldecode($_GET['name'])]);
    $result = $stat->fetchAll();
    // print_r($result[0]['name']);
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
   <?php echo "<a id='terugKnop' href='../index.php'><i class='fas fa-long-arrow-alt-left'></i>Terug</a><h1 id='top'>" . $_GET['name'] . "</h1>"?>
    <div class='characterSite'>
    <?php  echo "<div class='stats'>" ;
     echo "<img class='statsImg' src='/B3W45O1/images/" . $result[0]['avatar'] . "'> <p class='characterText'>" . $result[0]['bio'] . "</p></div>";  
     echo "<div style='background-color:" . $result[0]['color'] . "' class='statsStats'><i id='health' class='fas fa-heart'></i> <p class='statsText'>" . $result[0]['health'] . "</p>";
     echo "<i id='attack' class='fas fa-fist-raised'></i> <p class='statsText'>" . $result[0]['attack'] . "</p>";
     echo "<i id='defense' class='fas fa-shield-alt'></i> <p class='statsText'>" . $result[0]['defense'] . "</p>";
     echo "<p class='weapon'> Weapon : " . $result[0]['weapon'] . "</p>";
     echo "<p class='armour'> Armour : " . $result[0]['armor'] . "</p> </div></div>"; 
     include("footer.php");?>
    </div>
</body>
</html>