<?php
    //Details for connecting to The Database
    $server = "sql311.epizy.com";
    $username= "epiz_33762465";
    $password="pmLfTRd02ZsQ";
    $database = "spublog";

    //Connecting to the database
    $dbconn = mysqli_connect($server, $username, $password, $database);

    //Output a message if the connection fails
    if(!$dbconn){
        echo "Connection Failed!";
    }
?>
