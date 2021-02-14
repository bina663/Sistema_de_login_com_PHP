<!DOCTYPE htlml>
<html lang='pt-br'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- 
    <link rel='stylesheet' href="estilo.css" > -->
    <title>Cadastro</title>
</head>
<body>
    <div class='conteiner'>
        <form method='post' action='valida_dados.php'>
            <div>
            <input type="text" name='user' placeholder='Seu Usuario'>
            <input type="text" name='senha' placeholder='Sua Senha'>
            </div>
            <? if(isset($_GET['dados']) && $_GET["dados"] == "vazio"){ ?>
                <p class='msg_php'>Dados Invalidos para realizar o cadastro.</p>
            <? } ?>
            <? if(isset($_GET['dados']) && $_GET["dados"] == "ja_existente"){ ?>
                <p class='msg_php'>Usúario ja Existente.</p>
            <? } ?>
            <div>
                <input type='submit' value='Cadastrar'>
            </div>
            <section>
                <a href='index.php'>Voltar</a>
            </section>
        </form>
    </div><!-- conteiner -->
</body>
</html>