
<?php
    // Inclui o arquivo de conexão
    include_once('./conectar.php');

    // Obtém o ID passado via GET e garante que é um número inteiro
    $idm = intval($_GET['id']);

  

    
    // Query SQL corrigida$atualizar = "UPDATE tarefa SET  descricao = ?, tarefa = ? , datas = ?  WHERE id = ?";
    $selecionar = "SELECT descricao, id, tarefa, datas FROM tarefa WHERE id = ?";
    $selecionando = $conectar->prepare($selecionar);

    // Passa o valor de $ids para a query
    $selecionando->bind_param('i', $idm);

    // Executa a query
    $selecionando->execute();

    // Obtém os resultados
    $resultados = $selecionando->get_result();

    // Verifica se há resultados
    while($usuarios = $resultados->fetch_assoc()) {
    
        $de_atualizar = $usuarios['descricao'];
        $t_atualizar = $usuarios['tarefa'];
        $d_atualizar = $usuarios['datas']; 

 
  } 

?>
<a href="editando.php"></a>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <script src="https://kit.fontawesome.com/e1b86b0aaa.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="corpo" >
    
    <aside>
        <a href="cadastrotarefas.html"><i class="fa-solid fa-id-card"></i><br>cadastra tarefas </a>
        <a href="cadastrousuarios.html"><i class="fa-regular fa-user"></i><br>Cadastro de  suarios </a>
        <a href="tabeladetarefas.html"><i class="fa-solid fa-list"></i><br>Tabela de tarefas  </a>
        <a href="menu.html"><i class="fa-solid fa-door-open"></i><br>Sair</a>
        
    
       </aside>
     

    <div id="conteiner2">
      

    <form action="editando.php?id=<?php echo $idm; ?>" method="POST" class="form">
    <input type="text" name="tarefas" placeholder="Atualizar tarefa" value="<?php echo $t_atualizar ?>"><br>
    <input type="date" name="datas" placeholder="Atualizar data" value="<?php echo $d_atualizar ?>"><br>
    <textarea name="descricao" id="descricao" placeholder="Atualizar descrição"><?php echo htmlspecialchars($de_atualizar); ?></textarea><br>
    <button type="submit" class="botoes">Atualizar</button>
    </form>
   
       </div>
    
</body>
</html>