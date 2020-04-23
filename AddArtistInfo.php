<?php 
    include 'MySQLConnect.php';
    echo "CONNECTED";
    
    $yoname = $_POST['yoname'];
    $desc = $_POST['desc'];
    $user = $_POST['user'];
    $passcode = $_POST['passcode'];

    $NameChange = "UPDATE artist 
        SET ArtistName='".$yoname."'
        WHERE ArtistID='".$_SESSION['ARTISTID']."';";

    $DescChange = "UPDATE artist 
        SET Description='".$desc."'
        WHERE ArtistID='".$_SESSION['ARTISTID']."';";

    $PassChange = "UPDATE users 
        SET Password='".$passcode."'
        WHERE UH_ID='".$_SESSION['UHID']."';";

    $UserChange = "UPDATE users 
        SET Username='".$user."'
        WHERE UH_ID='".$_SESSION['UHID']."';";


    if(isset($yoname))
    {
        $results=$conn -> query($NameChange);

    }
    if($desc!=null)
    {
        $results=$conn -> query($DescChange);

    }
    if($user!=null)
    {
        $results=$conn -> query($UserChange);

    }
    if($passcode!=null)
    {
        $results=$conn -> query($PassChange);
        
    }
    
    if($results)
    {
        mysqli_close($conn);
        $_POST=array();
        header("location: settings.php");
    }
    else
    {
        echo "FAILED INSERT";
    }
	
        
?>