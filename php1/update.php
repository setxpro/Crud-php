<?php
require 'assets/config/config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
  
if($id) {

  $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

    if($sql->rowCount() > 0 ) {
      $info = $sql->fetch( PDO::FETCH_ASSOC );
    
    } else {
      header("Location: index.php");
      exit;
    } 

} else {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Usuário</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="bar"></div>

<h1>Editar Cadastrar</h1>
<form method="POST" action="update_action.php">
      <input type="hidden" name="id" value="<?=$info['id'];?>">
  <label>
    Nome:</br>
    <input type="text" name="nome" value="<?=$info['nome'];?>">
  </label></br></br>

  <label>
    Idade:</br>
    <input type="number" name="idade" class="idade" value="<?=$info['idade'];?>">
  </label></br></br>

  <label>
    CPF:</br>
    <input type="number" name="cpf" class="cpf" value="<?=$info['cpf'];?>">
  </label></br></br>

  <label>
    Email:</br>
    <input type="email" name="email" value="<?=$info['email'];?>">
  </label></br></br>

  <input type="submit" name="button" value="Salvar">
</form>

</body>
</html>