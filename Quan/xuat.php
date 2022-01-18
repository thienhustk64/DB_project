<?php
require_once('help.php');



	$id1 = getPost('id1');
    echo $id1;
	$num1 = getPost('num1');
	echo $num1;
	if(isset($_COOKIE['test'])) {
		$json = $_COOKIE['test'];
		$cart = json_decode($json, true);
	}

    echo 'OKE';


        $test[] =[
            'id1'=>$id1,
            'num1'=>$num1
        ];
    setcookie('test', json_encode($test), time() + 30*24*60*60, '/');
    // echo $test['id'];
    foreach ($test as $item) {
        echo $b = $item['id1'];
	}
    echo $b;







?>