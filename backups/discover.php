<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Discover</title>
	<link rel="stylesheet" href="discoverStyles.css"> 
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
                <dir class="context">
                        <p class="title">Discover new artists and music to broaden your library.</p>
                        <table class="albums">
                            <tr><th>Hop on these albums: </th></tr>
                            <tr><td>Album option 1......................................</td></tr>
                            <tr><td>Album option 2..........................................</td></tr>
                            <tr><td>Album option 3..................................</td></tr>        
                        <table class="artist">
                            <tr><th>Artist to check out: </th></tr>
                            <tr><td>Artist option 1....................</td></tr>
                            <tr><td>Artist option 2...............</td></tr>
                            <tr><td>Artist option 3......</td></tr>  
                        </table>
                        <table class="tracks">
                            <tr><th>Check out these songs: </th></tr>
                            <tr><td>Song option 1...................</td></tr>
                            <tr><td>Song option 2...............................</td></tr>
                            <tr><td>Song option 3......</td></tr>  
                        </table>
                </dir>
        </body>
        <footer><p>Created by Asad, Phuoc, Carlos, Johnny, & Lizandro</p></footer>
</html>