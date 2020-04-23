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
        $sql= "SELECT TrackName, DateCreate
        from tracks
        where DateCreate between DATE_SUB(curdate(), INTERVAL 1 day) AND curdate();";
        $result =mysqli_query($conn,$sql);
        $resultCheck= mysqli_num_rows($result);

        if($resultCheck>0)
        {
          echo "<br>" . "Total number of songs added = ". $resultCheck . "<br>";
          echo "<table border='1'>";
          echo "<tr> <td>Track Name</td> <td>Date Added</td> </tr>";
          while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr> <td>{$row['TrackName']}</td> <td>{$row['DateCreate']}</td> </tr>";

          }
          echo "</table>";
        }
        else {
          echo "<br>" . "No songs uploaded in the past day";
        }

         ?>


      </div>
    </div>
  </body>
</html>
