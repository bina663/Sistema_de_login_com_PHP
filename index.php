<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='css/style.css'>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form class='modal' action="core/log.php?acao=login" method='post'>
            <section class='title'>
                <h1>Login</h1>
            </section>
            <input type="text" name="user"  placeholder='Usúario'>
            <input type="password" name="password"  placeholder='Senha'>
            <?php
                if(isset($_GET['status']) && $_GET['status'] == "notExist"){?>
                    <p class='error'>Usúario não encontrado.</p>
            <?php };?>
            <?php
                if(isset($_GET['status']) && $_GET['status'] == "invalid"){?>
                    <p class='error'>Por favor preecher o campos acima pra efetuar o login.</p>
            <?php };?>
            <?php
                if(isset($_GET['status']) && $_GET['status'] == "deleted"){?>
                    <p class='success'>Dados deletado com sucesso.</p>
            <?php };
                if(isset($_GET['status']) && $_GET['status'] == 'success'){?>
                    <p class='success'>Cadastro efetuado com sucesso, efetue o login</p>
            <?php };
                if(isset($_GET['status']) && $_GET['status'] == 'uptade'){?>
                    <p class='success'>Efetue novamente o login, pra atualização do dado</p>
            <?php };?>
            <input type="submit" value="Entrar">
            <a href="pages/cadastro.php">Cadastrar-se</a>
        </form>
    </div>
</body>
</html>