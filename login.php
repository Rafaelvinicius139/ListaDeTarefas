



<?php
      session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['Senha'])) {

        include_once('./conectar.php');

        // Sanitizar entradas para evitar injeção de código (mesmo com prepared statements)
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $senha = $_POST['Senha'];

        // Consulta ao banco de dados
        $logar = "SELECT * FROM usuario WHERE Email = ?";
        $logando = $conectar->prepare($logar);



        $logando->bind_param('s', $email);
        $logando->execute();
        $resultado = $logando ->get_result();

        // Verificar se o usuário existe
        if ($resultado->num_rows > 0) {

            // Verificar a senha usando password_verify
            if (password_verify($senha, $usuario['Senha'])) {
                // Login bem-sucedido: salvar informações do usuário na sessão
                $_SESSION['usuario_id'] = $usuario['id'];
                $_SESSION['email'] = $usuario['Email'];

                // Redirecionar para a página inicial
                header('Location: index.html');
                exit();
            } else {
                // Senha incorreta
                $_SESSION['erro'] = "Senha incorreta.";
                header('Location: logando.php');
                exit();
            }
        } else {
            // Usuário não encontrado
            $_SESSION['erro'] = "Usuário não encontrado.";
            header('Location: logando.php');
            exit();
        }
    } else {
        // Campos de email ou senha vazios
        $_SESSION['erro'] = "Preencha todos os campos.";
        header('Location: logando.php');
        exit();
    }
?>
