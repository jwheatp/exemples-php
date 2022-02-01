<?php
  // j'ouvre et me connecte à la bdd
  try {
    $db = new PDO("mysql:host=localhost;dbname=demo;port=3306", "root", "root");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute( PDO::ATTR_EMULATE_PREPARES, FALSE );
  } catch (Exception $e) {
    echo "General Error: The user could not be added.<br>".$e->getMessage();
  }
?>