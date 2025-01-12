<?php

include_once("./conectar.php");

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0){
        echo "preencha seu email";
    }else if(strlen($_POST['Senha ']) == 0){
       echo" Preencha sua Senha ";
    }else{

        $email = $conectar->real_escape_string($_POST['email']);
        $senha = $conectar->real_escape_string($_POST['senha']);

        $logando = "SELECT * FROM usuario WHERE Email = ? AND senha = ?";

        $parametros = $conectar->prepare($logando);

        $parametros->bind_param('ss', $email,$senha );

        $parametros->execute();

        $loginresultado = $parametros->get_result();

        if($loginresultado == 1){
            $usuario->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['uso']= $usuario['id'];
            $_SESSION['nome']= $usuario['Nome'];

            header('Location: menu.php');

            
        
        }else{
            echo "falha a logar ";
        }







    }

}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lista.css">
    <script src="https://kit.fontawesome.com/e1b86b0aaa.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body class="corpologin">
    <div id="conteiner">
        <div id="foto">
        </div>
        <div id="login">
            <form action="" method="post">
                <i class="fa-solid fa-circle-user" id="info"></i>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="Senha " placeholder="Senha" required><br>
                <button type="submit" class="botoes" value="logar"> Logar </button>
                <input type="reset" value="Limpar" class="botoes">
            </form>            
        </div>
    </div>
</body>
</html>