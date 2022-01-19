<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SistemWeb - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
            <a class="navbar-brand" href="index.php">SistemWeb</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <main>
        <form class="form" action="events/logar.php" method="POST">
            <div class="card">
                <div class="card-top">
                    <img class="imglogin" src="assets/img/user.png" alt="Usuário">
                    <h2 class="titulo">SistemWeb</h2>
                </div>

                <div class="card-group">
                    <input type="email" name="inputEmail" placeholder="E-mail" required>
                </div>

                <div class="card-group">
                    <input type="password" name="inputPassword" placeholder="Senha" required>
                </div>

                <div class="card-group btn">
                    <button type="submit">Acessar</button>
                </div>

                <a class="card-cadas" href="events/cadastro.php" style="display: block; margin: auto;">Não tem cadastro? Cadastre-se!</a>
                <a class="card-cadas" href="#" style="display: block; margin: auto;">Esqueçeu sua senha? Redefina!</a>
            </div>
        </form>
    </main>

    <footer class="bg-dark text-center text-white">
        <div class=" bg-dark text-center p-3" style="position:absolute; bottom:0; width:100%;">SistemWeb © <?php echo date('Y'); ?></div>
    </footer>

</body>
</html>