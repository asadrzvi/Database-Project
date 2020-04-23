<?php
    

    include 'MySQLConnect.php';
   
    if(isset($_POST['submit-playlist'])) 
    {
            $PlayListID = uniqid('',true);
            $DATECREATE=date("Y-m-d");
            $NUMTRACKS=0;
            $UHID=$_SESSION['UHID'];
            $PlayListName=$_POST['submit-playlist'];
            $Insert="INSERT INTO playlist
                            VALUES ('".$PlayListID."','".$PlayListName."', '".$UHID."','".$DATECREATE."','".$NUMTRACKS."');";
            echo $Insert;
            $results=$conn -> query($Insert);
            if($results)
            {
                $_POST = array();
                mysqli_close($conn);
            }
            else
            {
                echo "FAILED INSERT";
            }
            header("Location: playlists.php");
    }
    else
    {
        $_SESSION['P_CHECK']=true;
        header("Location: playlists.php");
    }
    echo "Something happened";
?>