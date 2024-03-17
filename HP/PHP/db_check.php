<?php

try{
  $pdo = new PDO(
    'mysql:host=localhost;dbname=company;charset=utf8mb4',
    'root',
    ''
  );
  
  // $pdo->query()
} catch(PDOException $e){
  echo $e->getMessage().'<br>';
  exit;
}

?>