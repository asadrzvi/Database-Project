<?php 
	$UHID=$_SESSION['UHID'];
    $PLAYLISTID=$_GET['id'];
    $PLAYLISTNAME=$_GET['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo $PLAYLISTNAME?></title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
    <?php
        include 'MySQLConnect.php';
        if($_SESSION['ARTIST']==true)
        {
            include 'artist-nav.php';
        }
        else
        {
            include 'home-nav.php';
        }
    ?>
	<div class="uploads">

			<img style="text-align: center" width="120" height="100" src="images/music.jpeg">
			<h2><?php echo $PLAYLISTNAME?></h2>
			<table>
				<?php
                    $SUBMITID=0;
                    $sql="SELECT TrackName, DateCreate, TrackID, ArtistID
                        			FROM tracks 
                        			WHERE TrackID IN 
                        				(SELECT Tracks_ID FROM playlist_tracks WHERE PlayListID = '".$PLAYLISTID."');";
                    $results= $conn -> query($sql);
                    if($results->num_rows > 0){
                        while($row = $results->fetch_assoc()) 
                        {
                            include'PlaylistDropdown.php';
                            $artist="SELECT ArtistName
                                        FROM artist
                                        WHERE ArtistID = ".$row["ArtistID"];
                            $name=$conn -> query($artist);
                            $artistname=$name->fetch_assoc();
                            echo "<tr><td>".$row["TrackName"]."</td>
                                    <td><span></span></td>
                                    <td>".$row["DateCreate"]."</td>
                                    <td><span></span></td>
                                    <td>".$artistname["ArtistName"]."</td>
                                    <td><span></span></td>
                                    <td><audio src=tracks/".$row["TrackID"]." controls></audio>
                                    </td><td><span></span></td>
                                    <td><audio id='".$row["TrackID"]."'src=tracks/".$row["TrackID"]." preload='auto'></audio>
                                    <td>".$setup."</td></tr>";
                                    
                            
                            include 'AddTracks.php';
                        }
                    }
                    else {
                        echo "<tr><td>No Tracks Yet</td></tr>";
                    }
                ?>
			</table>
		</div>
</body>
</html>