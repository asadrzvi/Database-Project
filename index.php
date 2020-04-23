<!DOCTYPE html>
<?php
    session_start();
    session_destroy ();
?>

<html>
<head>
	<meta charset="utf-8" />
	<title>Coog Muzik</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="container">
        <?php
        include 'NavigationBar.php';
        ?>

		<div class="sub-heading">
			<p style="padding: 30px; font-family: cursive;">
				Hello and welcome to coog muzik. We are a music service for UH students, faculty and alumni. Simply provide your UH ID in our registration window to start listening.
			</p>
			<a href="register.php"><button class=myButton type="button">Register</button> </a>
			<form action="LoginBackend.php" method="POST">
				<p style="font-size: 16px; margin-left: 50px; color: grey">
					Already signed up?
				</p>
				<p>
					<label>Username:</label>
					<input type="text" id="user" name="Username">
				</p>
				<p>
					<label>Password:</label>
					<input type="password" id="pass" name="Password">
				</p>
				<p>
					<input type="submit" class="myButton" value="Login">
				</p>
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