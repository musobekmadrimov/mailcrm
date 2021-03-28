<?php 
try {
  $pdo = new PDO('mysql:dbname=mailcrm; host=localhost' , 'root', '',  array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
  ));
} catch (PDOException $e) {
  die($e->getMessage());
}
?>