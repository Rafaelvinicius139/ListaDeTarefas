<?php

 session_start();
 require_once('./conectar.php');


 if(!isset($_SESSION['logado']))
 
 header('Location:menu.html')

?>