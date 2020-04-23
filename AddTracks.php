<?php
    if(isset($_POST['add']))
    {
        $TrackCheck="SELECT *
                FROM `playlist_tracks`
                WHERE PlayListID='".$_POST['add']."' AND Tracks_ID='".$_POST['addT']."';";

        $addTo="INSERT INTO `playlist_tracks` (`PlayListID`, `Tracks_ID`)
                VALUES ('".$_POST['add']."','".$_POST['addT']."');";
        
        
        $confirm=$conn -> query($TrackCheck);

        if(mysqli_fetch_row($confirm)>0)
        {
            echo "THAT SONG IS ALREADY IN THE PLAYLIST";
            
        }
        else
        {
            $add= $conn -> query($addTo);
            if($add)
            
            {
                echo "SUCESSFULLY ADDED";
            }
            else
            {
                echo "FAILED TO ADD";
            }
        }
       
        $_POST=array();
    }

    

?>