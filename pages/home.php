<?php
    session_start();
    if(!isset($_SESSION['acesso']) || empty($_SESSION['user'])){
        header("Location: ../index.php");
    }
    $user = ($_SESSION['user'][0]);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='../css/style.css'>
    <title>Home</title>
</head>
<body>
    
    <div class="container">
        <div class="card" id='card'>
            <form action="#" method="post">
                <input type="number" name="id" id="id" value="<?= $user->id;?>" hidden>
                <input type="text" name="input" id="input" hidden>
                <input type="text" name="uptade_dados" id="uptade_dados">
                <input onclick="updateInfo()"  type="button" value="Atualizar dados">
                <input onclick="cancelar()" type="button" value="Cancelar">
            </form>    
        </div><!-- card -->
        <div class="modal">
            <section class='sec-main'>    
                <section class='title'>
                    <h1>Olá, <?= $user->nome;?></h1>
                </section>
                    <div class='info'>
                        <span>
                            <h3>Seu nome é:</h3>
                            <p><?= $user->nome;?></p>
                        </span>
                        <button onclick="uptade('<?= $user->nome;?>','nome')">Editar</button>
                    </div>
                    <div class='info'>
                        <span>
                            <h3>Seu login é:</h3>
                            <p><?= $user->login;?></p>
                        </span>
                        <button onclick="uptade('<?= $user->login;?>','login')">Editar</button>
                    </div>
                    <div class="info">
                        <span>
                            <h3>Sua senha é:</h3><p><?= $user->senha;?></p>
                        </span>
                        <button onclick="uptade('<?= $user->senha;?>','senha')">Editar</button>
                    </div>
                    <div class="info">
                        <span>
                            <h3>Seu hobbie é:</h3><p><?php if(!empty($user->hobbie)){echo $user->hobbie;}else{ echo 'Nao tem';} ?></p>
                        </span>
                        <button onclick="uptade('<?= $user->hobbie;?>','hobbie')">Editar</button>
                    </div>
            </section>
            <section class="sec-btn">
                <button><a href='../core/log.php?acao=delete&id=<?= $user->id;?>'>Deletar dados</a></button>
                <button><a href='../core/log.php?acao=exit'>Sair</a></button>
            </section>
        </div>
    </div><!-- container -->
    <script src='../script/script.js'></script>
</body>
</html>