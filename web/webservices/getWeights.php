<?php
error_reporting(E_ALL);
require('config/constants.php');
require('classes/Database.php');

if( !empty($_GET) ) {
    foreach($_GET as $key => $value) {
        $$key = $value;
    }

    $db = new Database();
    $db->init(DB_HOST, DB_USER, DB_PSW, DB_NAME);
    $db->connect();

    $sql_Get = 'SELECT date, quantity FROM activities WHERE user = 1 AND 
        activity = 3';

    $db->query($sql_Get);
    if( $db->countRows() >0 ) {
        $weights = $db->loadRows(MYSQL_ASSOC);
        foreach($weights as $int => $weight) {
            list($fecha, $hora) = explode(' ', $weight['date']);
            $weights[$fecha] = $weight['quantity'];
        }
        $data = $weights;
    } else {
        $data = '';
    }
}
$db->disconnect();

header('Access-Control-Allow-Headers: Content-Type');
header('Content-type: application/json');
echo json_encode($data);
?>
