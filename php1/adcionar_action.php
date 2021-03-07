<?php
require 'assets/config/config.php';

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$cpf =  filter_input(INPUT_POST, 'cpf');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if($nome && $idade && $cpf && $email) {

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
  $sql->bindValue(":email", $email);
  $sql->execute();

  //verificar se há algum email igual cadastrado no database
  //se não tiver. execute();
  if($sql->rowCount() === 0) {

    $sql = $pdo->prepare("INSERT INTO usuarios (nome, idade, cpf, email) 
    VALUES (:nome, :idade, :cpf, :email)");
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":idade",$idade); 
    $sql->bindValue(":cpf",$cpf);
    $sql->bindValue(":email",$email);
    $sql->execute();

    header("Location: index.php");
    exit;
  
  } else {

    header("Location: index.php");
    exit;
  }
} else {

  header("Location: index.php");
  exit;
}