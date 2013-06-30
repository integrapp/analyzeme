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

    $sql_Get = 'SELECT date, quantity FROM log WHERE user = 1 AND 
        activity = 3';

    $db->query($sql_Get);
    if( $db->countRows() >0 ) {
        $items = $db->loadRows(MYSQL_ASSOC);
        foreach($items as $int => $item) {
            list($fecha, $hora) = explode(' ', $item['date']);
            list($aa, $mm, $dd) = explode('-', $fecha);
            $formated = sprintf('%s%s%s', $aa, $mm, $dd);
            $weights[] = array($formated, $item['quantity']);
        }
        $data = $weights;
    } else {
        $data = '';
    }
}
$db->disconnect();

$data2 = array();
$sum = 0;
$count = 0;
for ($i = 0; $i < count($data); $i++) {
  $sum += $data[$i][1];
  $count++;
  $data2[$i] = array($data[$i][0], $sum / $count);
}

$full_data = array($data, $data2);

header('Access-Control-Allow-Headers: Content-Type');
header('Content-type: application/json');
echo json_encode($full_data);
?>
