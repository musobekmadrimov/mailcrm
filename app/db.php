<?php 
try {
  $pdo = new PDO('mysql:dbname=mailcrm; host=localhost', 'root', '',  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
  die($e->getMessage());
}
?>