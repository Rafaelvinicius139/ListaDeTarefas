<?php

 $host="localhost";
 $user= "root";
 $senha="";
 $banco="tarefas";

 $conectar = new mysqli($host,$user,$senha,$banco);

 try {

    echo "conecatado";
    # code...
 } catch (\Throwable $e) {

    echo "erro";
    # code...
 }







?>

<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    
 </body>
 </html>
