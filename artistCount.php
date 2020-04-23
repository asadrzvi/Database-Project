<?php
  include 'MySQLConnect.php'
 ?>

 <!DOCTYPE html>
 <html>
  <head>
    <title>coog Muzik reports</title>
    	<link rel="stylesheet" href="reportPage.css">
  </head>
  <body>
    <div class="container">
      <?php
      include 'reportButton.php'
      ?>

        <?php
          $sql="SELECT * FROM artist;";
          $result =mysqli_query($conn,$sql);
          $resultCheck= mysqli_num_rows($result);
          if ($resultCheck>0) {
              echo "<div>
              <h2>total number of artist in databse is = ". $resultCheck ."</h2> </div>" ;
          }
          else {
            echo "<div>
            <h2>No artists found in database </h2> </div>" ;
          }


         ?>



    </div>
  </body>
</html>
