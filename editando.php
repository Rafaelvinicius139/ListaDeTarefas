<?php

include_once("./conectar.php");



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $id = intval($_GET['id'] ?? 0);
    $tarefas = $_POST['tarefas'] ?? '';
    $datas = $_POST['datas'] ?? '';
    $descricao = $_POST['descricao'] ?? '';
   

 
   

    $atualizar = "UPDATE tarefa SET descricao = ?, tarefa = ?, datas = ? WHERE id = ?";
    $atualizando = $conectar->prepare($atualizar);
    $atualizando->bind_param('sssi', $descricao, $tarefas, $datas, $id);

    $atualizando->execute();
}   
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

  <h1>Registro atualizado com sucesso  </h1>
  <a href="tabeladetarefas.php">Voltar</a>
    
</body>
</html>