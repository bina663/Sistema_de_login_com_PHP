<?php
    session_start();
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <?php
        require_once('site/header.php');
    ?>
    <div class='container p-5'>
        <form action='sistema/valida_login.php' method='post'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Seu e-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='user' placeholder="Example@gmail.com">  
                <?php if(isset($_GET['login']) && $_GET["login"] == "erro"){ ?>
                    <div class="form-text text-danger">Dados Invalidos!</div>
                <?php }; ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Sua senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name='senha' placeholder="******">
            </div>
            <div class='mb-3'>
                <a href='cadastro.php' class='btn btn-primary'>Cadastro</a>
                <input type='submit' value='Entrar' class='btn btn-success'>
            </div>
        </form>
    </div><!-- conteiner -->
</body>
</html>
