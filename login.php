
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Page Title</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- This is an HTML Comment -->
	<div class="container">
		
        <?php
            include 'NavigationBar.php';
        ?>

		<div class="sub-heading">
			<div>
				<p style="color: black">
					Please Enter Your Credentials
				</p>
			</div>

            <?php
                session_start();
                if( isset($_SESSION['CHECK']) && $_SESSION['CHECK']== false)
                {
                    $_SESSION['CHECK']=NULL;
                    session_destroy();
                    echo "<p>LOGIN FAILED PLEASE TRY AGIAN</p>";
                }
            ?>
            

            
			<form action="LoginBackend.php" method="post" class="sub-heading">
				<table class="login">
					<tr>
						<td>Username: </td>
						<td>
							<input type="text" name="Username">
						</td>
					</tr>
					<tr>
						<td>Password: </td>
						<td>
							<input type="password" name="Password">
						</td>
					</tr>
					<tr><td><p></p></td></tr>
				</table>
                <input class=myButton type="submit" name="submit" value="login"/>
			</form>
		</div>
	</div>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>