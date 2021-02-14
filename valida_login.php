<?php
    include_once("banco_de_dados.php");
    $autenticacao = null;
    foreach($banco_d as $banco){
        if($_POST["user"] == $banco["user"] && $_POST['senha'] == $banco['senha']){
            $autenticacao = true;
        }else{
            header("location:index.php?login=erro");
        }
    }
    if($autenticacao){
        $_SESSION['autenticacao'] = "sim";
        header("location:home.php");
    }else{
        session_start();
        if(isset($_SESSION['status']) && $_SESSION['status'] == 'novo'){
            if($_SESSION['user'] == $_POST['user'] && $_SESSION['senha'] == $_POST['senha']){
                $_SESSION['autenticacao'] = "sim";
                header("location:home.php");
            }
        }
    }
?>
