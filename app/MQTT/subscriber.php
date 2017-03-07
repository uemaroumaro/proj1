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

if(!$mqtt->connect()){
	exit(1);
}

$topics['orz'] = array("qos"=>0, "function"=>"procmsg");
$mqtt->subscribe($topics,0);

while($mqtt->proc()){
		
}


$mqtt->close();

function procmsg($topic,$msg){
    
  
$data = explode(",", $msg);
    
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$bulk = new MongoDB\Driver\BulkWrite;
if(count($data)==5){
    //print_r($data);
$bulk->insert(['ID' => $data[0], 'decimal' => $data[1],'integer'=>$data[2],'string'=>$data[3],'datetime'=>$data[4]]);
$manager->executeBulkWrite('avenir_ueda.data_test', $bulk);
}
}
	


?>
