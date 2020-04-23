<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>My Music</title>
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
				<h1>Welcome to the My Music Page</h1>
				<p>This page is taylored for our artists to comfortably upload music at the click of a button. Simply select the file you choose to upload and name your track. Leave the rest to us.</p>
		</div>
        
        <div class="uploads">
				<form style="text-align: center" action="upload.php" method="POST" enctype="multipart/form-data">
					<h2>Select a track you would like to upload</h2>
		            <input class="myButton" type="file" name="file" id="music" style="display:none;"/>
					<label class="myButton" for="music">Find Your Track</label>
		            <span>Track Name:</span>
		            <input type="text" name="trackname">
		            <span></span>
		            <button class="myButton" type="submit" name="submit">Upload Track</button>
        		</form>
		</div>
		<div class="uploads">
			<h2>Previous Uploads</h2>
			<table style="text-align: center">
				<?php 
                    $counter=0;
                    $ARTISTID=$_SESSION['ARTISTID'];
                    $sql="SELECT * FROM tracks WHERE ArtistID = '".$ARTISTID."' ORDER BY DateCreate DESC;";
                    $results= $conn -> query($sql);
                    if($results->num_rows > 0)
                    {
                        while($row = $results->fetch_assoc()) 
                        {
                            if($counter==3)
                            {
                                break;
                            }
                            echo "<tr><td>".$row["TrackName"]."</td><td><span></span></td><td>".$row["DateCreate"]."</td><td><span></span></td><td><audio src=tracks/".$row["TrackID"]." controls></audio></td></tr>";
                            $counter++;
                        }
                    }
                    else {
                        echo "<tr><td>No Uploads</td></tr>";
                    }
                ?>
			</table>
            <?php
                // Create a check input for each track which allows the user to combine uploaded tracks to an album. Should also allow the user to upload an image that will be the album cover. 
                // Also create an album name input field. Upload should be very similar to upload.php
                $sql="SELECT TrackName, TrackID
                        FROM tracks
                        WHERE ArtistID='".$_SESSION['ARTISTID']."';";
                $results= $conn -> query($sql);
                $SubmitID=0;
                $table="<table align='center'>";
                if($results->num_rows > 0)
                {
                    while($row = $results->fetch_assoc()) 
                    {
                        $table.="<tr>
                                <td><input type='checkbox' id='".$SubmitID."' name='Tracks[]' value='".$row["TrackID"]."'></td>
                                <td></span></td>
                                <td><label for='".$SubmitID."'>".$row["TrackName"]."</label><td>
                                <td></span></td>
                                <td><audio src=tracks/".$row["TrackID"]." controls></audio></td><td><span></span></td>
                                </tr></br>";
                    }
                }

                echo "<div class='uploads'>
                    <form style='text-align: center' action='create_album.php' method='POST' enctype='multipart/form-data'>
                        <h2>Create an Album</h2>
                        <input class='myButton' type='file' name='img' id='img' style='display:none;'/>
                        <label class='myButton' for='img'>Pick Your Art</label>
                        <span>Album Name: </span>
                        <input type='text' name='albumname'>
                        <span></span>
                        <button class='myButton' type='submit' name='submit'>Create Album</button></br>
                        ".$table."</table>
                    </form>
                </div>";
            ?>
		</div>
        <?php
            if(isset($_POST['becomeA']))
            {
                $BecomeAdmin="UPDATE artist SET IsAdmin=1 WHERE ArtistID='".$_SESSION[ARTISTID]."';";
                $done=$conn->query($BecomeAdmin);
                $_POST=array();
            }
            $adminCheck="SELECT * FROM artist WHERE IsAdmin=1 AND ArtistID='".$_SESSION[ARTISTID]."';";
            $admin=$conn->query($adminCheck);
            if($admin->num_rows > 0)
            {
                echo "<div class='uploads'>
                        <form action='report.php' method='post'>
                            <input class='myButton' type='submit' id='getreport' style='display:none;'/>
                            <label class='myButton' for='getreport'>Get Report</label>
                        </form>
                    </div>";
            }
            else
            {
                echo"<div class='uploads'>
                        <form action='' method='post'>
                            <input class='myButton' name='becomeA' value='becomeA' type='submit' id='becomeAdmin' style='display:none;'/>
                            <label class='myButton' for='becomeAdmin'>Become An Admin</label>
                        </form>
                     </div>";
            }
            
        ?>
        
        
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>
