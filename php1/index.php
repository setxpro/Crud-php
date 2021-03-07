<?php {
  require 'assets/config/config.php';
  $lista= [];
  $sql = $pdo->query("SELECT * FROM usuarios");

  if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);       
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Usuários</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h1 class="h1">Ficha de Cadastro</h1>
  <a class="cadastrar" href="adcionar.php">Click aqui para Cadastrar</a>
    <table>
        <tr>
          <th>Nome</th>
          <th>Idade</th>
          <th>CPF</th>
          <th>Email</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      <?php foreach($lista as $usuario): ?>
          <tr>
            <td class="nome"><?php echo $usuario['nome'];?></td>
            <td class="idade"><?php echo $usuario['idade'];?></td>
            <td class="cpf"><?php echo $usuario['cpf'];?></td>
            <td class="email"><?php echo $usuario['email'];?></td>
            <td class="editar">
              <a href="update.php?id=<?php echo $usuario['id'];?>">✏️</a>
            </td>
            <td class="delete">
              <a href="delete.php?id=<?php echo $usuario['id'];?>" onclick="return confirm('Deseja Realmente Excluir um Usuário ?')">🗑️</a>
            </td>
          </tr>
      <?php endforeach; ?>
  </table>
</body>
</html>