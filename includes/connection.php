<?php
    $dsn = "mysql:host=localhost;dbname=project";
    $dbusername = "root";
    $dbpassword = '';
    // Create connection
  try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
    // Check connection
   catch (PDOException $e) {
    die("connection failed: " . $e->getMessage());
   }
   
?>