<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
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
			<div>
				<h1>Welcome to the My Music Page</h1>
				<p>This page is taylored for our artists to comfortably upload music at the click of a button. Simply select the file you choose to upload and name your track. Leave the rest to us.</p>
			</div>
			<div class="uploads">
				<form style="text-align: center" action="upload.php" method="POST" enctype="multipart/form-data">
					<h2 style="font-family: Impact, fantasy;">Select a track you would like to upload</h2>
		            <input class="myButton" type="file" name="file" id="img" style="display:none;"/>
					<label class="myButton" for="img">Find Your Track</label>
		            <span>Track Name:</span>
		            <input type="text" name="trackname">
		            <span></span>
		            <button class="myButton" type="submit" name="submit">Upload Track</button>
        		</form>
			</div>
		</div>
		<div class="uploads">
			<h2 style="font-family: Impact, fantasy;">Previous Uploads</h2>
			<table>
				<ul>
					<li>
						<p>Currently No Items Uploaded</p>
					</li>
				</ul>
			</table>
		</div>
        <?php 
        // Create a check input for each track which allows the user to combine uploaded tracks to an album. Should also allow the user to upload an image that will be the album cover. 
        // Also create an album name input field. Upload should be very similar to upload.php
        ?>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>