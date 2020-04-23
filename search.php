<?php
  include 'MySQLConnect.php'
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Search</title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
        <?php
            include 'MySQLConnect.php';
            if($_SESSION['ARTIST']==true)
            {
                include 'artist-nav.php';
            }
            else if($_SESSION['ARTIST']==false)
            {
                include 'home-nav.php';
            }
        ?>
        <div class="uploads">
            <h1> Search your favorite tracks</h1>
            <form action="searchPage.php" method="POST">
            <input type="text" name="search" placeholder="'Mercy'">
            <button type ="submit" name="submit-search">SEARCH</button>
            <form>
        </div>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>
