<?php
    include("../config.php");
    $id_csm = $_GET['delete_idcsm'];
    $query = 'DELETE FROM public."Import_detail" WHERE "ID_CSM" =\'' . $id_csm.'\';';
    $result = pg_query( $cn, $query);

    $query = 'DELETE FROM public."Import" WHERE "ID_CSM" =\'' . $id_csm.'\';';
    $result = pg_query( $cn, $query);
    header("Location: index.php?import=check");
    pg_close($cn);
    ob_end_flush();

?>