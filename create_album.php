<?php
    include 'MySQLConnect.php';
    
	if(isset($_POST['submit'])) 
    {
		$file=$_FILES['img'];
        //print_r($file);
		$fileName=$_FILES['img']['name'];
		$fileTmpName=$_FILES['img']['tmp_name'];
		$fileSize=$_FILES['img']['size'];
		$fileError=$_FILES['img']['error'];
		$fileType=$_FILES['img']['type'];
		$fileExt=explode('.',$fileName);
		$fileActualExt= strtolower(end($fileExt));
		$allowed=array('jpg', 'jpeg','png');
		if(isset($_FILES['img'])) 
        {
		 	if($fileError === 0) 
            {
				$fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDestination = 'tracks/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $DATECREATE=date("Y-m-d");
                $tracks=$_POST['Tracks'];
                $NUMTRACKS=sizeof($tracks);
                $PLAYCOUNTER=0;
                $ALBUMID=$fileNameNew;
                $ARTISTID=$_SESSION['ARTISTID'];
                $ALBUMNAME=$_POST['albumname'];
                $Insert="INSERT INTO album
                        VALUES ('".$ALBUMID."','".$ALBUMNAME."', '".$ARTISTID."','".$DATECREATE."','".$NUMTRACKS."');";

                

                echo $Insert."</br>";
                $results=$conn -> query($Insert);


                if($results)
                {
                    $counter=0;
                    foreach($tracks as $toAdd)
                    {
                        $addTrack="INSERT INTO `album_tracks` (`AlbumID`, `TracksID`) VALUES ('".$ALBUMID."', '".$toAdd."');";
                        $results=$conn -> query($addTrack);
                        echo $addTrack."</br>";
                        $counter++;
                    }
                    if($counter===$NUMTRACKS)
                    {
                        $_POST=array();
                        $_FILES=array();
                        mysqli_close($conn);
                        header("Location: my-music.php?AlbumCreated");
                    }
                    else
                    {
                        echo"FAILED INSERT";
                    }
                }
                else
                {
                    echo"ALBUM CREATION FAILED";
                }
                
                
            }
		 	else 
            {
		 		echo $_FILES["file"]["error"];
		 	}
		}
		else 
        {
		    echo "You cannot upload files of this type!";
		}
	}
    echo "bruh";
?>