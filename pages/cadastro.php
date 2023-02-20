<?php
    $acao = 'cadastro';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../css/style.css'>
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <form class='modal' action="../core/log.php?acao=cadastro" method='post'>
            <section class='title'>
                <h1>Cadastro</h1>
            </section>
            <input type="text" name="nome" id="name" placeholder='*Nome'>
            <input type="text" name="hobbie" id="hobbie" placeholder='Hobbie'>
            <input type="text" name="new-user" id="new-user"placeholder='*Crie um usúario'>
            <input type="password" name="new-senha" id="new-senha"placeholder="*Crie uma senha com 6 digitos" maxlength="6" minlength="6">
            <p class='msg'>* Usúario não pode ser igual seu nome.</p>
            <?php
                if(isset($_GET['status']) && $_GET['status'] == 'invalid'){?>
                    <p class='error'>Preencha todos os campos corretamente.</p>
            <?php };
                if(isset($_GET['status']) && $_GET['status'] == 'invalidUser'){?>
                    <p class='error'>Usário ja existente.</p>
            <?php };?>
            <input type="submit" value="Entrar">
            <a href='../index.php'>Voltar</a>
        </form>
    </div>
</body>
</html>