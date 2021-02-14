<?
    session_start();
?>
<!DOCTYPE htlml>
<html lang='pt-br'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 
    <link rel='stylesheet' href="estilo.css" > -->
    <title>Login</title>
</head>
<body>
    <div class='conteiner'>
        <form method='post' action='valida_login.php'>
            <div>
            <input type="text" name='user' placeholder='Usuario'>
            <input type="text" name='senha' placeholder='Senha'>
            </div>
            <? if(isset($_GET['login']) && $_GET["login"] == "erro"){ ?>
                <p class='msg_php'>Dados Invalidos.</p>
            <? } ?>
            <div>
                <input type='submit' value='Entrar'>
            </div>
            <section>
                <a href='cadastro.php'>Cadastrar-me</a>
            </section>
        </form>
    </div><!-- conteiner -->
</body>
</html>