<?php
    session_start();
    $servername = "sql306.epizy.com";
    $username = "epiz_25317203";
    $password = "DCZ34QMBXIof";
    $db= "epiz_25317203_MLDB";
    $conn = new mysqli($servername, $username, $password, $db);
    echo "Connection Started";
   
    if ($conn->connect_errno) {
         printf("Unable to connect: %s", $conn->connect_error);
         exit();
    }
    
	if(isset($_POST['submit'])) 
    {
		$file=$_FILES['file'];
        //print_r($file);
		$fileName=$_FILES['file']['name'];
		$fileTmpName=$_FILES['file']['tmp_name'];
		$fileSize=$_FILES['file']['size'];
		$fileError=$_FILES['file']['error'];
		$fileType=$_FILES['file']['type'];
		$fileExt=explode('.',$fileName);
		$fileActualExt= strtolower(end($fileExt));
		$allowed=array('mp3', 'mp4');
		if(in_array($fileActualExt, $allowed)) 
        {
		 	if($fileError === 0) 
            {
				$fileNameNew = uniqid('',true).".".$fileActualExt;
		 			$fileDestination = 'tracks/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);

                    $DATECREATE=date("Y-m-d");

                    $PLAYCOUNTER=0;
                    $TRACKID=$fileNameNew;
                    $ARTISTID=$_SESSION['ARTISTID'];
                    $TRACKNAME=$_POST['trackname'];

                    

                    $Insert="INSERT INTO tracks
                                VALUES ('".$TRACKID."','".$TRACKNAME."', '".$ARTISTID."','".$DATECREATE."');";
                    /////////
                    echo $Insert;

                    $results=$conn -> query($Insert);

                    if($results)
                    {
                        $_POST = array();
	                    mysqli_close($conn);
                    }
                    else
                    {
                        echo "FAILED INSERT";
                    }
                    
                    ///////////


                    header("Location: my-music.php?uploadsuccess");
		 	}
		 	else 
            {
		 		echo "There was an error uploading your file!".$fileError;
		 	}
		}
		else 
        {
		    echo "You cannot upload files of this type!";
		}
	}
?>