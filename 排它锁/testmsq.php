<?php

require("./mysql.php");

$db = MyPDO::getInstance();

//var_dump($db);

/*for($i=1;$i<=30;$i++){
$time = time();
$goodname = "good$i";
$sql = "replace into good_test (good_id,good_name,good_num,good_status,update_time) values({$i},'{$goodname}',2000,0,{$time})";
$res = $db->execSql($sql, $debug = false);
#$res = $db->getCount('test', 'group_id', $where = "account_name = 'ewarvarr10'", $debug = false);
}*/

for($i=0;$i<30;$i++){

sleep(2);
$sql = "select good_num from good_test where good_id = 15 ";
$res = $db->query($sql, $queryMode = 'All', $debug = false);
//var_dump($res);
echo "当前数量：".$res[0]['good_num'].PHP_EOL;
$num = $res[0]['good_num']-1;
$updsql = "update good_test set good_num = $num where good_id = 15";
$sqlarr[0] = $updsql; 
	if($db->execTransaction($sqlarr)){
		$sql = "select good_num from good_test where good_id = 15 for update";
		$res = $db->query($sql, $queryMode = 'All', $debug = false);
		echo "减一后数量：".$res[0]['good_num'].PHP_EOL;
	}else{
		echo "更新失败了哦！".PHP_EOL;
	}
}
