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
$message="こんにちはんこそば";
$topic ="orz" ;
$mqtt->publish($topic,$message,0);

$mqtt->close();
?>
