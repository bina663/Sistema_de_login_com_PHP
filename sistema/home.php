<?php
    session_start();
    if(!isset($_SESSION['autenticacao']) || $_SESSION['autenticacao'] != "sim"){
        header("location:../index.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Sucesso</title>
</head>
<body>
    <?php
        require_once('../site/header.php');
    ?>
    <div class='container'>
        <h1 class='text-center p-5 display-4 text-success'>Login efetuado com Sucesso</h1>
        <a href='deslogar.php' class='btn btn-outline-danger'>Deslogar</a>
    </div>
</body>
</html>