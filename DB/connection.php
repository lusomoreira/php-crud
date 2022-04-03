<?php

# connection with PDO


function getConnection()
{
  $host = 'localhost';
  $dbname = 'php_crud';
  $user = 'root';
  $password = '';

  $dns = "mysql:host=$host;dbname=$dbname;charset=utf8";

  try {
    $pdo = new PDO($dns, $user, $password);
    return $pdo;
  } catch (PDOException $ex) {
    echo 'Erro ' . $ex->getMessage();
  }
}

