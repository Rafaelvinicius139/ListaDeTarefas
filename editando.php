<?php

  include_once("./conectar.php");

  $id = intval($_POST['id']);

   

   $descrição = $_POST['descricao'] ?? "";

   $tarefa = $_POST['tarefa'] ??"";
 
 
   $data = $_POST['data'] ?? "";

   $atualizar = "UPDATE tarefa SET  descricao = ?, tarefa = ? , datas = ?  WHERE ?";

   $atualizando = $conectar->prepare($atualizar);
   
   $atualizando->bind_param('sssi',$descrição,$tarefa,$data,$ida);


   



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <h1>registro atualizado com sucesso </h1>
  <a href="tabeladetarefas.php">voltar</a>
    
</body>
</html>