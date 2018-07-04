<?php

    // read-only user to access data
    // my web security instructor has his face in his palm right now
    // $user = 'read_user';
    // $pass = ''; --REMOVED FOR DEVELOPMENT

    $dbconn = pg_connect( "host=localhost dbname=hawcroft_ca" .
        " user=" .      $user .
        " password=" .  $pass );

?>