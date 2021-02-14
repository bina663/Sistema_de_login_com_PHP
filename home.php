<?php
    session_start();
    if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao'] != "sim"){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 
    <link rel='stylesheet' href="estilo.css"> -->
    <title>Sucesso</title>
</head>
<body>
    <div class='conteiner'>
        <h1>Login efetuado com Sucesso</h1>
        <a href='index.php'>Voltar</a>
    </div>
</body>
</html>