<?php
session_start();
require('../config/constants.php');
require('../classes/Database.php');

if( !empty($_POST) ) {
    foreach($_POST as $key => $value) {
        $$key = $value;
    }

    $db = new Database();
    $db->init(DB_HOST, DB_USER, DB_PSW, DB_NAME);
    $db->connect();

    $email      = $db->shiftDown($email);
    $password   = $db->shiftDown($password);

    $sql_Auth = sprintf('SELECT * FROM users WHERE email = "%s" AND 
        password = "%s"', $email, md5($password));

    $db->query($sql_Auth);

    if( $db->countRows() == 1 ) {
        $_SESSION['login_status'] = 'logged';
    } else {
        unset($_SESSION['login_status']);
    }

$db->disconnect();
}
header('Location: ../views/index.php');
exit();
