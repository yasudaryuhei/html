<?php

define('DSN', 'mysql:host=localhost;dbname=company;charset=utf8mb4');
define('USER', 'root');
define('PASS', '');

class Database
{
  private $pdo;

  private function connect()
  {
    if (!isset($this->pdo)){
      $this->pdo = new PDO(
        DSN,
        USER,
        PASS,
        [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );
    }
  }

    function getallsyain()
    {
        try{
          $this->connect();
          $stmt = $this->pdo->query("SELECT id, name FROM syain ORDER BY id;");
          $members = $stmt->fetchALL();
          return $members;
        } catch (PODException $e) {
          echo   $e->getMessage() . '<br>';
          exit; 
        }
    }
    function getsyain($id)
    {
        try{
          $this->connect();
          $stmt = $this->pdo->prepare("SELECT id, name FROM syain ORDER BY id = ? ;");
          $stmt->bindParm(1, $id, PDO::PARAM_INT);
          $member = $stmt->execute();
          if ($member){
            $members = $stmt->fetchALL();
            if (count($member) == 0) {
              return null;
            }
            return $member[0];
          }
          return null;
        } catch (PODException $e) {
          echo   $e->getMessage() . '<br>';
          exit; 
        }
    }
    function idexist($id)
    {
      if ($this->getsyain($id) != null){
        return true;
      }
      return false;
    }
    function createsyain($id, $name, $age, $work)
    {
      try {
        $stmt = $this->pdo->prepare("INSERT INTO syain VALUES(?,?,?,?);");
        $stmt->bindParm();
        $stmt->bindParm();
        $stmt->bindParm();
        $stmt->bindParm();
        $result = $stmt->execute();
        return true;
      } catch (PDOException $e){
      echo $e->getMessage() . '<br>';
      exit;
    }
    return false;
  }
}