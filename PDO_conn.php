<?php
    $dsn ='mysql:host=localhost;port=3306;dbname=crud';
    $pdo = new PDO($dsn,'root','suyu860625');

    $pdo->query("SET NAMES 'utf8'");
    /*echo $pdo->errorCode();
    print_r($pdo->errorInfo());*/
?>