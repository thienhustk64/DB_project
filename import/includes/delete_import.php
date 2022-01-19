<?php
    $cn = pg_connect( "host=localhost port=5432 dbname=test_lab
    user=postgres password=123456");
    $id_csm = $_GET['delete_idcsm'];
    $query = 'DELETE FROM public."Import_detail" WHERE "ID_CSM" =\'' . $id_csm.'\';';
    $result = pg_query( $cn, $query);

    $query = 'DELETE FROM public."Import" WHERE "ID_CSM" =\'' . $id_csm.'\';';
    $result = pg_query( $cn, $query);
    // header("Location: index.php?import=check");
    pg_close($cn);
    ob_end_flush();

?>