
 <?php
    $servername = "sql306.epizy.com";
    $username = "epiz_25317203";
    $password = "DCZ34QMBXIof";
    $db= "epiz_25317203_MLDB";

    session_start();

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_errno) {
    printf("Unable to connect: %s
    ", $conn->connect_error);
    exit();
    } else {echo "Connect successful<br>";}


    $USERNAME=$_POST['Username'];
    $PASS=$_POST["Password"];

    $validate="SELECT * 
                FROM users
                WHERE Username='".$USERNAME."'AND Password='".$PASS."';";
    
    
    
    $results= $conn -> query($validate);
    
    if( $results-> num_rows > 0)
    {
        $_POST = array();
        $row=$results -> fetch_assoc(); 
        
        session_destroy();
        session_start();
        $_SESSION['USER']=$USERNAME;
        $_SESSION['UHID']=$row["UH_ID"];
        $_SESSION['MAJOR']=$row["u_Major"];
        $_SESSION['EMAIL']=$row["u_Email"];
        
        mysqli_close($conn);
        unset($USERNAME,$PASS,$results,$row);
        header("location: home.php");
    }
    else
    {
        $_POST = array();
        mysqli_close($conn);
        $_SESSION['CHECK']=false;
        unset($USERNAME,$PASS);
        header("location: login.php");
    }


?> 
