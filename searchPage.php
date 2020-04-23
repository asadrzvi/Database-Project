<?php
  include 'MySQLConnect.php';
  if(isset($_POST['submit-search']))
  {
      $_SESSION['Search']=$_POST['submit-search'];
  }
  

 ?>

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
    <input type="text" name="search" placeholder="'Astroworld'">
    <button type ="submit" name="submit-search">SEARCH</button>
    <form>
</div>
<div class = "uploads">
    <h2> Artist Results</h2>
    <?php
    
    if (isset($_SESSION['Search'])) {
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql="SELECT * FROM artist where ArtistName LIKE '%$search%' or Description LIKE '%$search%' ";
        $results=mysqli_query($conn, $sql);
        $queryResults=mysqli_num_rows($results);
        if($queryResults>0)
        {
        while ($row=mysqli_fetch_assoc($results))
        {
        echo "<div class ='result-box'>
            <h3> ".$row['ArtistName']." </h3>
            <p>" .$row['Description']." </p>
            </div>";
        }
        }
        else {
        echo "<h3>No artist found!</h3> <br> \n <br> \n <br> \n";
        }
    }
    ?>
    <h2> Track Results </h2>
    <table style="color:white">
    <?php
    include 'MySQLConnect.php';
    if (isset($_SESSION['Search'])) {
        
        $search=mysqli_real_escape_string($conn,$_POST['search']);
        $sql="SELECT * FROM tracks where TrackName LIKE '%$search%' ";
        $results=mysqli_query($conn, $sql);
        $queryResults=mysqli_num_rows($results);
        if($queryResults>0)
        {
            $SUBMITID=0;
            while ($row=mysqli_fetch_assoc($results))
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
                                    <td><audio src=tracks/".$row["TrackID"]." controls></audio></td><td><span></span></td>
                    <td>".$setup."</td>";

                echo "<td><span></span></td>
                                    <td><form action='' method='post'>
                                    <input class='myButton' name='LikedName' type='submit' id='".$row["TrackID"]."' value='sent' style='display:none;'/>
                                    <input name='Liked' type='text' value='".$row["TrackID"]."' style='display:none;'/>
                                    <label class='myButton' for='".$row["TrackID"]."'>Like Track</label>
                                    
                                    </form></td></tr>";
                                    include 'AddTracks.php';
            }
            include 'like.php';
        }
        else {
        echo "No tracks found! <br> \n <br> \n <br> \n";
        }

    }
    ?>
    </table>
</div>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>
