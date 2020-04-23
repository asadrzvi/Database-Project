<?php
    session_start();
    $servername = "sql306.epizy.com";
    $username = "epiz_25317203";
    $password = "DCZ34QMBXIof";
    $db= "epiz_25317203_MLDB";

    $conn = new mysqli($servername, $username, $password, $db);

    if ($conn->connect_errno) {
        printf("Unable to connect: %s
        ", $conn->connect_error);
        exit();
        } else {echo "Connect successful<br>";}


    if($_SESSION['ARTIST'])
    {
        mysqli_close($conn);
        header("location: home.php");
    }    
    else
    {
        $insert="UPDATE users
            SET IsArtist=True
            WHERE UH_ID='".$_SESSION['UHID']."';";

        $results=$conn -> query($insert);
        if($results)
        {
            mysqli_close($conn);
            header("location: home.php");
        }
        else
        {
            echo "FAILED INSERT";
        }
    }

    
?>