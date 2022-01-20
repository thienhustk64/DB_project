<?php
    include("../config.php");
    $id_csm = $_GET['delete_idcsm'];
    $id = $_GET['delete_id'];
    $query = 'DELETE FROM public."Import_detail" WHERE "ID_CSM" =\'' . $id_csm.'\' and "ID_Product" = \''.$id.'\';';
    $result = pg_query( $cn, $query);
    header("Location: index.php?import=check&check=".$id_csm);
    pg_close($cn);
    ob_end_flush();
?>