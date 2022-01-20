<?php


/**
* Su dung cho cac lenh: insert, update, delete
*/
function execute($sql) {
	//Mo ket noi toi database
	$cn = pg_connect( "host=localhost port=5432 dbname=test_lap
        user=postgres password=thanh20194677");

	//query
	pg_query($cn, $sql);

	//Dong ket noi
	pg_close($cn);
}

/**
* Su dung cho cac lenh: select
*/
function executeResult($sql, $onlyOne = false) {
	//Mo ket noi toi database
	$cn = pg_connect( "host=localhost port=5432 dbname=test_lap
        user=postgres password=thanh20194677");


	//query
	$result = pg_query($cn, $sql);

	if($onlyOne) {
		$data = pg_fetch_array($result);
	} else {
		$data = [];
		while(($row = pg_fetch_array($result)) != null) {
			$data[] = $row;
		}
	}
	//Dong ket noi
	pg_close($cn);

	return $data;
}