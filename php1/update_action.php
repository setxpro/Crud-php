<?php
require 'assets/config/config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$cpf =  filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($id && $nome && $idade && $cpf && $email) {

  $sql = $pdo->prepare("UPDATE usuarios SET 
    nome = :nome, 
    idade = :idade, 
    cpf = :cpf, 
    email = :email WHERE 
    id = :id");
  $sql->bindValue(":nome", $nome);
  $sql->bindValue(":idade", $idade);
  $sql->bindValue(":cpf", $cpf);
  $sql->bindValue(":email", $email);
  $sql->bindValue(":id", $id);
  $sql->execute();
  
  header("Location: index.php");
  exit;

} else {

  header("Location: index.php");
  exit;
}