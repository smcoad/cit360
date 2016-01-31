<?php
    $dsn = 'mysql:host=localhost;dbname=cat_registration';
    $username = 'mgs_user';
    $password = 'pa55word';
    
//    $dsn = 'mysql:host=localhost;dbname=coadname_guitar1';
//    $username = 'coadname_admin';
//    $password = '1Two3Four5';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../error/database_error.php');
        exit();
    }
?>