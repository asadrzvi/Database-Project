
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8" />
	<title>Register</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- This is an HTML Comment -->
	<div class="container">
		<?php
            include 'NavigationBar.php';
        ?>

		<div class="sub-heading">
			<p style="color: black">
				Register for Coog Muzik
			</p>

            
            <?php
                session_start();
                if( isset($_SESSION['CHECK']) && $_SESSION['CHECK']== false)
                {
                    $_SESSION['CHECK']=NULL;
                    session_destroy();
                    echo "<p>REGISTER FAILED PLEASE TRY AGIAN</p>";
                }
                
            ?>

			<form action='RegBackend.php' method="post" class="sub-heading">
				<table class="register">
					<tr>
						<td>UHID: </td>
						<td>
							<input type="text" maxlength="7" minlength="7" pattern= "\d*" name="UHID" required="required">
						</td>
					</tr>
					<tr>
						<td>Email: </td>
						<td>
							<input type="email" name="Email" required="required">
						</td>
					</tr>
					<tr>
						<td>Major: </td>
						<td>
							<input type="text" name="Major" required="required">
						</td>
					</tr>
					<tr>
						<td>Username: </td>
						<td>
							<input type="text" name="Username" required="required">
						</td>
					</tr>
					<tr>
						<td>Password: </td>
						<td>
							<input type="password" name="Password" required="required">
						</td>
					</tr>
					<tr><td><p></p></td></tr>
				</table>
                <input class=myButton type="submit" name="submit" value="Register"/>
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

