

<?php
session_start();
require_once('./conectar.php');

if (isset($_POST['logar'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = filter_var($_POST['Senha'], FILTER_SANITIZE_STRING);

    $logar = "SELECT * FROM usuario WHERE email = ?";
    $logando = $conectar->prepare($logar);
    $logando->bind_param('s', $email);
    $logando->execute();
    $resultado = $logando->get_result();

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['Senha'])) {
            $_SESSION['logado'] = true;
            header('Location: logando.php');
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Email não encontrado.";
    }
} else {
    echo "Erro na submissão do formulário.";
}
?>


