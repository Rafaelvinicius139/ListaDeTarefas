<?php

include_once('./conectar.php');

  $descrição = $_POST['descricao'] ?? "";

  $tarefa = $_POST['tarefa'] ??"";


  $data = $_POST['data'] ?? "";


 

  $sqltarefa = " INSERT INTO tarefa(descricao,  tarefa, datas) VALUES (?,?,?)";

  $preparandotarefa = $conectar->prepare($sqltarefa);

  $preparandotarefa->bind_param('sss',$descrição,$tarefa,$data);

  $preparandotarefa->execute()




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="paginas.css">
  <title>Document</title>
</head>
<body>

   <h1>Tarefa Cadastrada com Sucesso  <h1>
  <a href="tabeladetarefas.php">tabela</a>
  
</body>
</html>