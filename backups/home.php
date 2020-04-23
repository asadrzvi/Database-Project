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
            
            $ID=$_SESSION['UHID'];

            $validate="SELECT * 
                        FROM artist
                        WHERE UH_ID='".$ID."';";

            $results= $conn -> query($validate);
            
            if($results-> num_rows > 0)
            {
                $row=$results -> fetch_assoc();
                $_SESSION['ARTIST']=true;
                $_SESSION['ARTISTID']= $row['ArtistID'];
            }
            else
            {
                $_SESSION['ARTIST']=false;
            }
            unset($validate,$result);
            mysqli_close($conn);
            if($_SESSION['ARTIST']==true)
            {
                include 'artist-nav.php';
            }
            else
            {
                include 'home-nav.php';
            }
        ?>
        <h1> Welcome to Coog Muzik where you can listen to songs by UH students !</h1> 
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>