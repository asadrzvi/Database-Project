
 <?php
    session_start();
    $servername = "sql306.epizy.com";
    $username = "epiz_25317203";
    $password = "DCZ34QMBXIof";
    $db= "epiz_25317203_MLDB";

    
    

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_errno) {
    printf("Unable to connect: %s
    ", $conn->connect_error);
    exit();
    } else {echo "Connect successful<br>";}

    $UHID=$_POST['UHID'];
    $EMAIL=$_POST['Email'];
    $USERNAME=$_POST['Username'];
    $PASS=$_POST["Password"];
    $MAJOR=$_POST["Major"];


    $validate="SELECT * 
                FROM users
                WHERE UH_ID='".$UHID."'or u_Email='".$EMAIL."'or Username='".$USERNAME."';";
    
    $Insert="INSERT INTO users
                VALUES ('".$UHID."','".$MAJOR."','".$EMAIL."','".$USERNAME."','".$PASS."','NULL');";
    
    
    $results= $conn -> query($validate);

    if( $results-> num_rows > 0)
    {
        $_POST = array();
        mysqli_close($conn);
        $_SESSION['CHECK']=false;
        header("location: register.php");
    }
    else
    {
        $results=$conn -> query($Insert);
        if($results)
        {
            $_POST = array();
            mysqli_close($conn);
            header("location: login.php");
        }
        else
        {
            $_POST = array();
            mysqli_close($conn);
            echo"FAILED INSERT";
        }
    }


?> 
