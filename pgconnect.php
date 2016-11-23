<?php
   $db_connection = pg_connect(
    "host=localhost 
    dbname=postgres 
    user=postgres      
    password=postgres ") or die('Could not connect:' . pg_last_error());

    if ($db_connection) {   

    echo 'Connection attempt succeeded.';   

    } else {   

    echo 'Connection attempt failed.';   

    }   
?>

