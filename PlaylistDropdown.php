<?php
    $UHID=$_SESSION['UHID'];
    $playlist="SELECT *
            FROM playlist 
            WHERE UH_ID = '".$UHID."';";
    $PLQ= $conn -> query($playlist);
    $setup= "<div class='dropdown'><button class='dropbtn'>Add to Playlist</button><div class='dropdown-content'>";
    if($PLQ)
    {
        while($PLN = $PLQ->fetch_assoc())
        {
            $SUBMITID++;
            $ID=$PLN['PlayListID'];
            $setup.="<form action='' class='dropbtn' method='post'>
                        <input type='text' value='".$row['TrackID']."' name='addT' style='display:none;'/>
                        <input type='text' value='".$ID."' name='add'  style='display:none;'/>
                        <input type='submit' value='sent' name='submit' id='".$SUBMITID."' style='display:none;'/>
                        <label for='".$SUBMITID."'>".$PLN['PlayListName']."</label></form>";
        }
    }
    $setup.="</div></div>";
?>