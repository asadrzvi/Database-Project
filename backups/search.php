<?php
  include 'MySQLConnect.php'
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
        <div class="menu">
                <ul>
                	<li>
                		<a href="home.php">Home</a>
                	</li>
                	<li>
                		<a href="playlists.php">Playlists</a>
                	</li>
                	<li>
                		<a href="discover.php">Discover</a>
                	</li>
                	<li class="right">
                		<a href="search.php">
                            <img src="images/search.png" width="20" height="20">
                        </a>
                	</li>
                	<li class="right">
                        <a href="settings.php">
                            <img src="images/settings.png" width="20" height="20">
                        </a>
                	</li>
                </ul>
	    </div>
</body>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	<link rel="stylesheet" href="search.css">
</head>
<body>
      <form action="searchPage.php" method="POST">
        <input type="text" name="search" placeholder="search">
        <button type ="submit" name="submit-search">SEARCH</button>
        <form>
          <h1> search Page </h1>
      
        
          

           </div>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>
