<?php
    include('MySQLConnect.php');
    session_destroy();
    mysql_close($conn);
    $_POST=array();

    header("location: index.php");
?>