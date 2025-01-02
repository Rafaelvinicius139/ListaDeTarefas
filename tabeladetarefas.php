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

    
   <aside>
    <a href="cadastrotarefas.html"><i class="fa-solid fa-id-card"></i><br>cadastra tarefas </a>
    <a href="cadastrousuarios.html"><i class="fa-regular fa-user"></i><br>Cadastro de  suarios </a>
    <a href="tabeladetarefas.html"><i class="fa-solid fa-list"></i><br>Tabela de tarefas  </a>
    <a href="menu.html"><i class="fa-solid fa-door-open"></i><br>Sair</a>
    

   </aside>

   <table>


    <thead>
        <tr>
            <th>tarefa</th>
            <th>data</th>
            <th>atualizar</th>
            <th>Deletar</th>
            <th>status</th>
           
    </thead>

    <tbody>
     <?php

       include_once('./conectar.php');

       $mostrar = "SELECT * FROM `tarefa` WHERE 1";
       
       $preparando = $conectar->prepare($mostrar);

       $preparando->execute();


       $resultado = $preparando->get_result();



  
        while($dados = mysqli_fetch_assoc($resultado)){
               
    
            $trensfe = $dados['id'];
            echo "<tr>";
            echo "<td>". $dados['tarefa'] ."</td>";
            echo "<td>". $dados['datas'] ."</td>";
            echo "<td><a  id='atualizar' href='editar.php?id=" .$trensfe . "'><i class='fa-solid fa-marker'></i></a></td>";
            echo "<td><a  id='deletar' href='deletar.php?id=" .$trensfe . "'><i class='fa-solid fa-trash-can'></i></a></td>";
          
        
            
            echo "</tr>";

        }

        
     
    
     ?>

     
     

        
    </tbody>
   </table>
    
</body>
</html>