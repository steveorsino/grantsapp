<?php
  $dsn = 'mysql:host=localhost;dbname=GrantTracking_v2';
  $username = 'steveorsino';
  $password = '';
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
   
  try {
    $db = new PDO($dsn, $username, $password, $options);
    $errorMessage = '';
  } catch (PDOException $e) {
    $errorMessage = $e->getMessage();
    echo "<p>An error occurred while connecting to the database: $errorMessage </p>";
  }
?>