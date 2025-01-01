
<?php
    // Inclui o arquivo de conexão
    include_once('./conectar.php');

    // Obtém o ID passado via GET e garante que é um número inteiro
    $ids = intval($_GET['id']);

    // Query SQL corrigida
    $selecionar = "SELECT descricao, tarefa, datas FROM tarefa WHERE id = ?";
    $selecionando = $conectar->prepare($selecionar);

    // Passa o valor de $ids para a query
    $selecionando->bind_param('i', $ids);

    // Executa a query
    $selecionando->execute();

    // Obtém os resultados
    $resultados = $selecionando->get_result();

    // Verifica se há resultados
    while($usuarios = $resultados->fetch_assoc()) {
        // Atribui os valores retornados às variáveis
        $descricao = $usuarios['descricao'];
        $tarefa = $usuarios['tarefa'];
        $data = $usuarios['datas']; // Certifique-se de que o nome da coluna no banco é 'datas'
    } 
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
<body class="corpo" >
    
    <aside>
        <a href="cadastrotarefas.html"><i class="fa-solid fa-id-card"></i><br>cadastra tarefas </a>
        <a href="cadastrousuarios.html"><i class="fa-regular fa-user"></i><br>Cadastro de  suarios </a>
        <a href="tabeladetarefas.html"><i class="fa-solid fa-list"></i><br>Tabela de tarefas  </a>
        <a href="menu.html"><i class="fa-solid fa-door-open"></i><br>Sair</a>
        
    
       </aside>
     

    <div id="conteiner2">
      

        <form action="cadastrartarefas.php" method="post" class="form" >
   
            <input type="text" name="tarefa" placeholder="Atualizar tarefa" value="<?php echo $tarefa?>"><br>

            <input type="date" name="data" placeholder="aualizar data"  value="<?php echo $data?>"><br>

            <textarea name="descricao" id="descricao" placeholder="Atualizar descrição"><?php echo htmlspecialchars($descricao); ?></textarea><br>

            <input type="submit" value="Atualizar" class="botoes">
   
   
        </form>
   
       </div>
    
</body>
</html>