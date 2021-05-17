<!DOCTYPE htlml>
<html lang='pt-br'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body>
    <?
        require_once('header.php');
    ?>
    <div class='container p-5'>
        <form method='post' action='valida_dados.php'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ponha seu nome</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='user'>
                <? if(isset($_GET['dados']) && $_GET["dados"] == "vazio"){ ?>
                    <div class="form-text text-danger">Dados Invalidos!</div>
                <? } ?>
                <? if(isset($_GET['dados']) && $_GET["dados"] == "ja_existente"){ ?>
                    <div class="form-text text-danger">Usuario ja existente</div>
                <? } ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Cria uma senha</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name='senha'>
            </div>
            <div class='mb-3'>
                <a href='index.php' class='btn btn-primary'>Voltar</a>
                <input type='submit' value='Cadastrar' class='btn btn-success'>
            </div>
        </form>
    </div><!-- conteiner -->
</body>
</html>