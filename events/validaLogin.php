<?php

class Usuario {

    public function validaLogin($email, $senha) {

        global $pdo;

        $sql = "SELECT * FROM tb_user WHERE email = :email AND senha = MD5(:senha);";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('email', $email);
        $sql->bindValue('senha', $senha);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $dado = $sql->fetch();
            $_SESSION['idUserSession'] = $dado['idUsuario'];
            return TRUE;

        } else {

            return FALSE;

        }

    }

    public function usuarioLogado($id) {

        global $pdo;

        $array = array();

        $sql = "SELECT nome FROM tb_user WHERE idUsuario = :idUsuario;";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('idUsuario', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {

            $array = $sql->fetch();

        } 

        return $array;

    }

}