<?php
    $servername = "sql306.epizy.com";
    $username = "epiz_25317203";
    $password = "DCZ34QMBXIof";
    $db= "epiz_25317203_MLDB";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_errno) {
        printf("Unable to connect: %s
        ", $conn->connect_error);
        exit();
    }
    
    session_start();
    

    
?>