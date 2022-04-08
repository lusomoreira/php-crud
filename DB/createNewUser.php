<?php

include './connection.php';

#recebe array com POST 
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


# atribui a funcao getConnection do arquivo connection.php
$conn = getConnection();

#cria a query e armazena em uma variavel
$sql = 'INSERT INTO users (name, birth_date, email) VALUES (:name, :birth_date, :email)';

$stmt = $conn->prepare($sql);
$stmt->bindValue(":name", $dados['name']);
$stmt->bindValue(":birth_date", $dados['dtn']);
$stmt->bindValue(":email", $dados['email']);

$stmt->execute();

if($stmt->rowCount()){
  echo 'Usuario adicionado com sucesso!';
  sleep(5);
  header('Location: ../index.php');

} else {
  echo 'Erro: não foi possivel salvar';
  sleep(5);
  header('Location: ../index.php');

}

