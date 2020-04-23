<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Playlists</title>
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
				<h1>Welcome to your Playlist</h1>
				<p>Here you can access the audio in all your playlists and listen to your favorite tracks. Upon liking your first track, a liked playlist will be created </p>
		</div>
        <div class="uploads">
                <form style="text-align: center" action="create_playlist.php" method="POST" enctype="multipart/form-data">
                    <h2>Create a playlist</h2>
                    <span>Playlist Name: </span>
                    <input type="text" name="submit-playlist">
                    <span></span>
                    <button class="myButton" type="submit" name="submit">Create Playlist</button>
                </form>
        </div>
		<div class="uploads">
			<h2>My Playlists</h2>
			<table style="text-align: center">
				<?php 
                    $UHID=$_SESSION['UHID'];
                    $sql="SELECT * FROM playlist WHERE UH_ID = '".$UHID."';";
                    $results= $conn -> query($sql);
                    if($results->num_rows > 0)
                    {
                        while($row = $results->fetch_assoc()) {
                            echo "<tr><td><a style='color: red;' href='playlist.php?id=".$row["PlayListID"]."&name=".$row["PlayListName"]."'>".$row["PlayListName"]."</a></td><td><span></span></td><td>".$row["DateCreate"]."</td></tr>";
                        }
                    }
                    else {
                        echo "<tr><td>No Playlists</td></tr>";
                    }
                ?>
			</table>
		</div>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>
