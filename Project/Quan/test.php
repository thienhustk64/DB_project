<?php
$name_info = array(
    'firstname' => 'Phan Văn',
    'lastname' => 'Cương'
);
$fullname = implode('\',\'', $name_info);
$b= "'";
$a = "'";
$a .= $fullname;
$a .= $b;
echo $a;
?>