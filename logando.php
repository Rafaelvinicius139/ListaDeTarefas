<?php
  if(!isset($_SESSION)){
    session_start();
  }

  if(!isset($_SESSION['id'])){
    die("acesso negado <br>  <a href='index.php'>entrar</a>");
  }

?>




