<?php 

    require ('../db/conexao.php');

    if (isset($_SESSION['idUserSession']) && !empty($_SESSION['idUserSession'])) {

        require_once ('validaLogin.php');

        $userClass = new Usuario();
        $userLogged = $userClass->usuarioLogado($_SESSION['idUserSession']);
        $nameLogged = $userLogged['nome'];

    } else {

        header("Location: ../index.php");
    }

?>