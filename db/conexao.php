<?php 

    session_start();

    $DBDRIVE = 'mysql';
    $DBHOST = 'localhost';
    $DBNAME = 'db_logincomphp';
    $DBUSER = 'root';
    $DBPASS = '';

    global $pdo;

    try {

        $pdo = new PDO('mysql:host='.$DBHOST.';dbname='.$DBNAME.'', $DBUSER, $DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {

        echo "ERRO: ".$e->getMessage();
        exit;

    }

?>