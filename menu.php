<?php
  include('logando.php')

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <script src="https://kit.fontawesome.com/e1b86b0aaa.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="corpo">

   <?php  $_SESSION['id']?>

  
   
    <aside>
            
            <a href="cadastrotarefas.html"><i class="fa-solid fa-id-card"></i><br>Cadastro de Tarefas </a>
            <a href="cadastrousuarios.html"><i class="fa-regular fa-user"></i><br>Cadastro de usuario </a>
            <a href="tabeladetarefas.php"><i class="fa-solid fa-list"></i><br>Tabela de Tarefas  </a>
            <a href="sair.php"><i class="fa-solid fa-door-open"></i><br>Sair</a>
        
    </aside>



    <div id="menuc">

   

    </div>

       
        
    
</body>
</html>