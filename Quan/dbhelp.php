<?php


/**
* Su dung cho cac lenh: insert, update, delete
*/
function execute($sql) {
	//Mo ket noi toi database
	$cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
   user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");

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
	$cn = pg_connect( "host=ec2-23-23-199-57.compute-1.amazonaws.com port=5432 dbname=d5voph6nh682ao
   user=xmttvyrbszbnze password=c467c601c9d08db139aacd4bc1e6148efa419eebc6ac5dc377b828673ffb463e");


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