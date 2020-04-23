<?php
   
    if(isset($_POST['LikedName']))
    {
        $LIKEDID="LIKED".$_SESSION[UHID];
        
        $PLC="SELECT PlayListID
            FROM playlist
            WHERE PlayListID='".$LIKEDID."';";

        $found= $conn -> query($PLC);
        if($found->num_rows === 0)
        {
            $UHID=$_SESSION['UHID'];
            $DATECREATE=date("Y-m-d");

            $createLPL="INSERT INTO playlist
                        Values ('".$LIKEDID."','Liked Songs', '".$UHID."','".$DATECREATE."','0');";
            $create= $conn -> query($createLPL);    
        }
        
        $addToLPL="INSERT INTO `playlist_tracks` (`PlayListID`, `Tracks_ID`)
                    VALUES ('".$LIKEDID."', '".$_POST['Liked']."');";
        
        $CheckInLPL="SELECT *
            FROM `playlist_tracks`
            WHERE PlayListID='".$LIKEDID."' AND Tracks_ID='".$_POST['Liked']."';";

        $found= $conn -> query($CheckInLPL);
        if($found->num_rows > 0)
        {
            echo "SONG ALREADY LIKED";
        }
        else
        {
            $added=$conn -> query($addToLPL);
            $checkInLike="SELECT *
                            FROM tracks_likes
                            WHERE Tracks_ID='".$_POST['Liked']."';";
            
            $found= $conn -> query($checkInLike);
            if($found->num_rows > 0)
            {
                $updateL="UPDATE tracks_likes SET LikeCount=LikeCount+1  WHERE Tracks_ID='".$_POST['Liked']."';";
                $done=$conn -> query($updateL);
                echo"SONG LIKED";
            }
            else
            {
                $insertL="INSERT INTO tracks_likes (`Tracks_ID`, `LikeCount`) VALUES ('".$_POST['Liked']."', '1');";
                $done=$conn -> query($insertL);
                echo"SONG LIKED AND ADDED";
            }
        }
        $_POST=array();
    }

?>
