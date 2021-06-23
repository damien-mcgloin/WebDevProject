<?php
    $passw = "";
        
    $username = "";

    $db = "";

    $host = "";

    $conn = new mysqli($host, $username, $passw, $db);

    if($conn->connect_error){
        echo "not connected".$conn->connect_error;
    }else{
        //echo "connection to DB found.";
    }

?>
