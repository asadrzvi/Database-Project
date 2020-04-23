<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Discover</title>
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
        <div class = "uploads">
            <h1>Discover</h1>
            <p>Here you can find new artist and fresh songs to add to your library.</p>
        </div>

        <div class = "uploads">
            <h1>Artist that are in the spotlight</h1>
            <table style="text-align: left" align="center">
                <?php
                    $sql = "SELECT ArtistName, Description FROM artist WHERE Description <> ('N/A') ORDER BY RAND() LIMIT 5";
                    $result = $conn->query($sql);
                    $counter = 0;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            if($counter == 5){
                                break;
                            }
                            echo "<tr>
                                    <td>" .$row["ArtistName"]. "</td>
                                    <td><span></span></td>
                                    <td>" .$row["Description"]. "</td>
                                </tr>";
                            $counter++;
                        }
                    }
                ?>
            </table>
        </div>

        <div class = "uploads">
            <h1>Albums to check out</h1>
            <table style="text-align: left" align="center">
                <?php
                    
                    if($_POST['Reveal'])
                    {
                        
                        echo "  <tr>
                                <td><img src=tracks/".$_POST['AlbumID']." width='150' height='150'></td>
                                </tr>";
                        $getTracks="SELECT TracksID FROM album_tracks WHERE AlbumID='".$_POST['AlbumID']."';";
                        $atracks= $conn->query($getTracks);
                        while($row = $atracks->fetch_assoc())
                        {
                            $getDetails="SELECT * FROM tracks WHERE TrackID='".$row['TracksID']."';";
                            $details=$conn->query($getDetails);
                            $d=$details->fetch_assoc();
                            echo "<tr>
                                    <td>".$d["TrackName"]."</td>
                                    <td><span></span></td>
                                    <td>".$d["DateCreate"]."</td>
                                    <td><span></span></td>
                                    <td>".$_POST['ArtistName']."</td>
                                    <td><span></span></td>
                                    <td>".$_POST['AlbumName']."</td>
                                    <td><span></span></td>
                                    <td><audio src=tracks/".$d["TrackID"]." controls></audio></td>
                                    </tr> ";
                        }
                        echo "<tr>
                                <form action='' method='post'>
                                <input name='close' type='submit' id='close' value='sent' style='display:none;'/>
                                <label class='myButton' for='close'>Explore More</label>
                                </form></tr>";

                        if($_POST['close'])
                        {
                            $_POST=array();
                        }
                        
                    }
                    else
                    {
                        $sql = "SELECT * FROM album ORDER BY RAND() LIMIT 5";
                        $result = $conn->query($sql);
                        $counter = 0;
                        if ($result->num_rows > 0) 
                        {
                            // output data of each row
                            while($row = $result->fetch_assoc()) 
                            {
                                $getName= "SELECT ArtistName FROM artist WHERE ArtistID = ".$row["ArtistID"];
                                $AName=$conn->query($getName);
                                $AName=$AName->fetch_assoc();
                                echo "<tr><td>" .$row["AlbumName"]. "</td>
                                        <td><span></span></td>
                                        <td>" .$AName["ArtistName"]. "</td>
                                        <td><span></span></td>
                                        <td><form action='' method='post'>
                                        <input name='AlbumID' type='text' value='".$row['AlbumID']."' style='display:none;'/>
                                        <input name='AlbumName' type='text' value='".$row['AlbumName']."' style='display:none;'/>
                                        <input name='ArtistName' type='text' value='".$AName['ArtistName']."' style='display:none;'/>
                                        <input name='Reveal' type='submit' id='".$row[AlbumID]."' value='sent' style='display:none;'/>
                                        <label class='myButton' for='".$row[AlbumID]."'>View Album</label>
                                        </form></td></tr>";
                                        
                            }
                        }
                    }
                    
                ?>
            </table>
        </div>

        <div class = "uploads">
            <h1>Hear these songs out</h1>
            <table style="text-align: center">
                
                <?php
                    $SUBMITID=0;
                    // $sql = "SELECT TrackName, ArtistName FROM tracks, artist WHERE tracks.ArtistID = artist.ArtistID ORDER BY RAND() LIMIT 5";
                    // $result = $conn->query($sql);
                    // $counter = 0;
                    // if ($result->num_rows > 0) {
                    //     // output data of each row
                    //     while($row = $result->fetch_assoc()) {
                    //         if ($counter == 5){
                    //             break;
                    //         }
                    //         $a = $row["TrackName"];
                    //         $b = $row["ArtistName"];
                    //         echo "<tr><td>" .$a. "</td><td><span></span></td><td>by " .$b. "</td></tr<td><span></span></td><td><audio src=tracks/".$row["TrackID"]." controls></audio></td>";
                    //         $counter++;
                    //     }
                    // }
                    
                    $sql="SELECT TrackName, DateCreate, TrackID, ArtistID
                        			FROM tracks;";
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
                            echo "<tr>
                                    <td>".$row["TrackName"]."</td>
                                    <td><span></span></td>
                                    <td>".$row["DateCreate"]."</td>
                                    <td><span></span></td>
                                    <td>".$artistname["ArtistName"]."</td>
                                    <td><span></span></td>
                                    <td><audio src=tracks/".$row["TrackID"]." controls></audio></td>
                                    <td><span></span></td>
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
                        echo "<tr><td>No Tracks Yet</td></tr>";
                    }
                ?>
            </table>
        </div>
        
</body>
</html>
