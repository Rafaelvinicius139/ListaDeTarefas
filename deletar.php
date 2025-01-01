

<?php

    include_once('./conectar.php');



  $id = intval($_GET['id']);
  
  
  $deletar = "DELETE FROM tarefa WHERE id = ? ";

  $deletando = $conectar->prepare($deletar);

  $deletando ->bind_param('i',$id);

  $deletando->execute()



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> registro deletado <h1>
     <a href="tabeladetarefas.php">voltar</a>
        
    
</body>
</html>