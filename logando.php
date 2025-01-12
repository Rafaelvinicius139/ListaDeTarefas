<?php
  if(!isset($_SESSION)){
    session_start();
  }

  if(!isset($_SESSION['id'])){
    die("<h1>voce nãp pode acessar esse sisteman por favor logar no sistema. <a href='\index.php\'>entrar</a></h1> ");
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
  
</body>
</html>


