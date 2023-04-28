<?php

try {
  $connection = new PDO("mysql:host=localhost;dbname=mydb", "root", "Motherboardmod1997.");
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
  die();
}
