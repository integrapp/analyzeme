<?php
require('../config/constants.php');
require('../classes/Database.php');

if( !empty($_GET) ) {
    foreach($_GET as $key => $value) {
        $$key = $value;
    }

    $db = new Database();
    $db->init(DB_HOST, DB_USER, DB_PSW, DB_NAME);
    $db->connect();

    $sql_Get = sprintf('SELECT * FROM app_promedios WHERE comercial = %s AND 
        granja = %s ORDER BY (fecha) DESC, id DESC ', $comercial, $granja);

    $db->query($sql_Get);
    if( $db->countRows() >0 ) {
        $averages = $db->loadRows(MYSQL_ASSOC);
        foreach($averages as $int => $value) {
            list($fecha, $hora) = explode(' ', $value['fecha']);
            $promediates[$fecha][$value['id']] = date('H:i A', strtotime($value['fecha']));
        }
        $data = $promediates;
    } else {
        $data = '';
    }
}
$db->disconnect();

header('Access-Control-Allow-Headers: Content-Type');
header('Content-type: application/json');
echo json_encode($data);
?>
