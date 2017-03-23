<?php

require("phpMQTT.php");
mb_internal_encoding("UTF-8");

//Insert
// Select
//$filter = ['address' => ['$gt' => 'tokyo']]; // where��
//$filter = [];
//$options = [
//	    'projection' => ['_id' => 0],
//	    'sort' => ['_id' => -1],
//	    ];
//$query = new MongoDB\Driver\Query($filter, $options);
//$cursor = $manager->executeQuery('avenir_ueda.t_user', $query);
//	
$mqtt = new phpMQTT("119.27.36.192", 1883, "phpMQTT Sub Example"); //Change client name to something unique

if (!$mqtt->connect()) {
    exit(1);
}

$topics['current_data'] = array("qos" => 0, "function" => "procmsg");
$mqtt->subscribe($topics, 0);

while ($mqtt->proc()) {
    
}
$mqtt->close();

function procmsg($topic, $msg) {
    $data = explode(",", $msg);
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $bulk = new MongoDB\Driver\BulkWrite;
    
        var_dump($data);
    if (count($data) == 5) {
        //print_r($data);
        //$bulk->insert(['ID' => $data[0], 'decimal' => $data[1], 'integer' => $data[2], 'string' => $data[3], 'datetime' => $data[4]]);
        //ID, dt[1] = 子機ID, dt[3] = 電波強度(RSSI), dt[6] = 電流値1 dt[7] = 電流値2, 日時
        $bulk->insert(['ID' => $data[0], 'RSSI' => $data[1], 'current_val1' => $data[2], 'current_val2' => $data[3], 'datetime' => $data[4]]);
        $manager->executeBulkWrite('avenir_ueda.electric_data', $bulk);
    }
}

?>
