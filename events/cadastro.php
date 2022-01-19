<?php

    require ('../db/conexao.php');

    global $pdo;

    $pdo = new PDO('mysql:host='.$DBHOST.';dbname='.$DBNAME.'', $DBUSER, $DBPASS);

    if (isset($_POST['inputEmail'])) {
        $sqlInsert = $pdo->prepare("INSERT INTO tb_user (nome, email, senha, situacao) VALUES ('".$_POST['inputName']."', '".$_POST['inputEmail']."', MD5('".$_POST['inputPassword']."'), 'A');");
        $sqlInsert->execute();

        if ($sqlInsert->rowCount() > 0) {
            $retornoInsert = '<h6><br>Cadastro feito com sucesso!<br></h6>';
        } else {
            $retornoInsert = '<h6><br>Erro ao realizar cadastro. Tente novamente!<br></h6>';
        }
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemWeb - Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <a class="navbar-brand" href="../index.php">SistemWeb</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <main>
        <form class="form" method="POST">
            <div class="card">
                <div class="card-top">
                    <h2 class="titulo">SistemWeb</h2>
                </div>

                <div class="card-group">
                    <input type="text" name="inputName" placeholder="Nome e Sobrenome">
                </div>

                <div class="card-group">
                    <input type="email" name="inputEmail" placeholder="E-mail">
                </div>

                <div class="card-group">
                    <input type="password" name="inputPassword" placeholder="Senha">
                </div>

                <div class="card-group btn">
                    <button type="submit">Cadastre-se</button>
                </div>

                <a class="card-cadas" href="../index.php" style="display: block; margin: auto;">Retornar para o Login!</a>
            </div>
        </form>

        <div class="retorno">
            <?php if (isset($_POST['inputName'])) { echo $retornoInsert; }?>
        </div>
    </main>

    <footer class="bg-dark text-center text-white">
        <div class=" bg-dark text-center p-3" style="position:absolute; bottom:0; width:100%;">SistemWeb © <?php echo date('Y'); ?></div>
    </footer>

</body>
</html>