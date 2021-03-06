<?php


/**
* Su dung cho cac lenh: insert, update, delete
*/
function execute($sql) {
	//Mo ket noi toi database
	include ("../config.php");

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
	include ("../config.php");


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