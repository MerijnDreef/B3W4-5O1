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
    $result = $stat->fetchAll();
    // $getResult = $_GET['name']
    $stat->execute([':naam' => urldecode($_GET['name'])]);
    print_r($result[0]['name']);
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
    <?php  ?>
</body>
</html>