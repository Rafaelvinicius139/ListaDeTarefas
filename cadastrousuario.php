<?php
    include_once('./conectar.php');

  $Nome = $_POST['Nome'] ?? "";

  $Email = $_POST['email'] ?? "";

  $Telefone = $_POST['Telefone'] ?? "";

  $Senha = $_POST['Senha'] ?? "";

  $sql = "INSERT INTO usuario( Nome, Email, Telefone, Senha) VALUES (?,?,?,?)";

  $preparando = $conectar->prepare($sql);

  $preparando ->bind_param('ssss',$Nome,$Email,$Telefone,$Senha);

  
  $preparando->execute();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1>Usuario cadastrado com sucesso <h1>
    <a href="cadastrousuarios.html"> Voltar</a>
    
</body>
</html>
