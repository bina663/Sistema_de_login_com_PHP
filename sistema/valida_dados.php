<?php
    session_start();
    if($_POST['user'] == "" || $_POST['senha'] == ""){
        header('location:../cadastro.php?dados=vazio');
    }
    $analise = true;
    require_once("banco_de_dados.php");
    foreach($banco_d as $dados){
        if($dados['user'] == $_POST['user']){
            $analise = false;
            header("location:../cadastro.php?dados=ja_existente");
        }else if($_POST['user'] == '' || $_POST['senha'] == ''){
            $analise = false;
            header("location:../cadastro.php?dados=vazio");
        }
    }
    if($analise){
        $_SESSION['status'] = 'novo';
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['senha'] = $_POST['senha'];
        header("location:../index.php");
    }
?>