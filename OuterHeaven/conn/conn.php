<?php
    $passw = "CNcLCtCbrbmQmD9q";
        
    $username = "dmcgloin01";

    $db = "dmcgloin01";

    $host = "dmcgloin01.lampt.eeecs.qub.ac.uk";

    $conn = new mysqli($host, $username, $passw, $db);

    if($conn->connect_error){
        echo "not connected".$conn->connect_error;
    }else{
        //echo "connection to DB found.";
    }

?>