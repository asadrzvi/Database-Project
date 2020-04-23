<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
    <?php
            session_start();
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
        <h1>Settings<h1>
    </div>
    <?php
            if($_SESSION['ARTIST']==true)
            {
                include 'artist-settings.php';
            }
            else
            {
                include 'user-settings.php';
            }
    ?>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>