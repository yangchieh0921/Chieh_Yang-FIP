<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

    $db_dsn = array(
        'host' => 'localhost',
        'dbname' => 'chieh_ca',
        'charset' => 'utf8'
    );

    $dsn = 'mysql:'.http_build_query($db_dsn, '', ';');


    $db_user = 'root';
    $db_pass = 'root';

    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
        echo 'Connection Error:'.$exception->getMessage();
        exit();
    }

    
    