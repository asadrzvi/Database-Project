<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Home</title>
	<link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="uploads">
        <h2>Change your user preferences here</h2>
        <form action='RegisterArtist.php' method="post">
            <input class="myButton" type="submit" id="BecomeArtist"style="display:none;"/>
            <label class="myButton" for="BecomeArtist">Become an ARTIST</label>
        </form>
    </div>
    <div class="uploads">
        <h2>Change your Username</h2>
        <form action='AddArtistInfo.php' method="post">
            <input type="text" name="user">
            <input class="myButton" type="submit" id="ChangeUsername" style="display:none;"/>
            <label class="myButton" for="ChangeUsername">Submit</label>
        </form>
    </div>
    <div class="uploads">
        <h2>Change your Password</h2>
        <form action='AddArtistInfo.php' method="post">
            <input type="text" name="passcode">
            <input class="myButton" type="submit" id="ChangePass" style="display:none;"/>
            <label class="myButton" for="ChangePass">Submit</label>
        </form>
    </div>
    <div class="uploads">
        <form action='LogOut.php' method="post">
            <input class="myButton" type="submit" id="die"style="display:none;"/>
            <label class="myButton" for="die">Log Out</label>
        </form>
    </div>
</body>
<footer>
	<p>
		Created by Asad, Phuoc, Carlos, Johnny, & Lizandro
	</p>
</footer>
</html>